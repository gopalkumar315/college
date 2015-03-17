<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{

    Route::get('demo',function()
    {
        return View::make('admin.demo');
    });


    Route::get('/',function()
    {
        return View::make('index');
    });

    Route::get('logout','AloginController@logout');
    Route::get('notice',function()
    {
        return View::make('admin.notice');
    });

    Route::post('notice_content','NoticeController@store');
    Route::get('notice_list',function()
    {
        $data=Notice::orderBy('id','desc')->simplePaginate(17);
        return View::make('admin.notice_list')->with('content',$data);
    });
    /*notice VIew*/
    Route::get('notice_show/{id}','NoticeController@show');
    Route::get('notice_del/{id}','NoticeController@destroy');



    /*Event board*/
    Route::get('/event',function()
    {
        return View::make('admin.event');
    });

    Route::post('/event_content','EventController@store');
    Route::get('/event_list',function()
    {
        $data=Events::orderBy('id','desc')->simplePaginate(17);
        return View::make('admin.event_list')->with('content',$data);
    });

    /*notice VIew*/
    Route::get('/event_show/{id}','EventController@show');
    Route::get('/event_del/{id}','EventController@destroy');


    /* add course*/

    Route::get('course',function()
    {
        return View::make('admin.course');
    });

    Route::post('/course_content','CourseController@store');
    Route::get('/course_select',function()
    {
        return View::make('admin.course_select');
    });

    Route::get('/course_selected_view/{id}','CourseController@select');

    Route::get('/course_show/{id}','CourseController@show');
    Route::get('/course_del/{id}','CourseController@destroy');
    Route::get('/course_edit/{id}','CourseController@edit');
    Route::post('/course_update','CourseController@update');

    /* Gallery*/

    Route::get('/gallery',function()
    {

        return View::make('admin.gallery');
    });
    /* album*/
    Route::get('/album',function()
    {
        return View::make('admin.album');
    });
    Route::post('/upload-album','AlbumController@create');
    Route::get('/album_list',function()
    {
        $data=Album::orderBy('id','desc')->simplePaginate(17);
        return View::make('admin.album_list')->with('content',$data);;
    });
    Route::get('/album_del/{id}','AlbumController@destroy');

    /*album photo list*/
    Route::get('/photo_list/{id}','PhotoController@show');

    /*photo delete*/
    Route::get('/photo_del/{id}','PhotoController@destroy');
    Route::get('/photo',function()
    {
        $data=Album::orderBy('id','desc')->get();
        return View::make('admin.photo')->with('content',$data);
    });

    Route::post('/upload_photo','PhotoController@store');


    /**
     * Syllabus Upload
     */
    Route::get('/syllabus','SyllabusController@index');
    Route::Post('/syllabus_content','SyllabusController@store');
    Route::get('/syllabus_list','SyllabusController@syllabus_degree_list');
    Route::get('/syllabus_del/{id}','SyllabusController@destroy');
    Route::get('/syllabus_degree/{id}','SyllabusController@degree');
    Route::get('/syllabus_degree_view/{id}','SyllabusController@Syllabus_view');

//subject
    Route::get('/subject','SubjectController@index');
    Route::post('/subject_content','SubjectController@store');
    Route::get('/subject_select',function()
    {
        $data['trade']=Course::where('parent','!=','0')->distinct()->get(array('course'));
        return View::make('admin.subject_select')->with('trade',$data['trade']);
    });
    Route::post('/subject_select_content','SubjectController@view');
    Route::get('/subject_del/{id}','SubjectController@destroy');

//Assignment

    Route::get('/assignment','AssignmentController@index');
    Route::post('/assignment_content','AssignmentController@store');

    Route::get('/assignment_select',function()
    {
        $data['trade']=Course::where('parent','!=','0')->distinct()->get(array('course'));
        $data['subject']=Subject::distinct()->get(array('subject'));
        return View::make('admin.assignment_select')->with('trade',$data['trade'])->with('subject',$data['subject']);

    });

    Route::post('/assignment_select_content',function()
    {
        $data=Assignment::where('year',Input::get('year'))->where('course',Input::get('course'))->where('subject',Input::get('subject'))->get();
        return View::make('admin.assignment_list')->with('assignment',$data);
    });

    Route::get('/assignment_del/{id}','AssignmentController@destroy');

//video album
    Route::get('/video_album',function()
    {
        return View::make('admin.video_album');
    });

    Route::post('/video_album_content','VideoController@album');

    Route::get('/video_album_list',function()
    {
        $data=Video::where('parent','0')->orderBy('id','desc')->simplePaginate(17);
        return View::make('admin.video_album_list')->with('content',$data);;
    });

//add particular video
    Route::get('/video',function()
    {
        $data=Video::where('parent','0')->orderby('id','desc')->get();
        return View::make('admin.video')->with('album',$data);
    });

//add video Content
    Route::post('/video_content','VideoController@video');
    Route::get('/video_list/{id}',function($id)
    {
        $data=Video::where('parent',$id)->SimplePaginate(9);
        return View::make('admin.video_list')->with('video',$data);
    });

//video delete
    Route::get('/video_del/{id}','VideoController@video_del');
    Route::get('/video_album_del/{id}','VideoController@destroy');

    /**
     * About RIET Edit and View
     */

    Route::get('/about_edit',function()
    {
       $data=About::find(1);
       return View::make('admin/about_edit')->with('data',$data);
    });

    /**
     * Image upload using Editor
     */
    Route::post('/redactorupload', function()
    {
        $des=public_path();
        $file=Input::file('file');
        $filename =Str::random(20) .'.'. $file->getClientOriginalExtension();
        Input::file('file')->move($des.'\images\\',$filename);
        return Response::json(['filelink' => asset('images/'.$filename)]);
    });


    Route::post('/about_content','AboutController@store');
    Route::get('/about_view','AboutController@view');



    /**
     * Staff
     */

      Route::get('/staff','StaffController@index');
      Route::post('/staff_content','StaffController@store');
      Route::get('/staff_select','StaffController@select');
      Route::get('/staff_edit/{id}','StaffController@staff_edit');
      Route::post('/staff_update','StaffController@staff_update');
      Route::get('/staff_view/{id}','StaffController@staff_view');

    /**
     * facility
     */
    Route::get('/facility','FacilityController@index');
    Route::post('/facility_content','FacilityController@store');

    /**
     * Downloads
     */

    Route::get('/upload','UploadController@index');
    Route::post('/upload_data','UploadController@store');
    Route::get('/upload_view','UploadController@view');
    Route::get('/upload_del/{id}','UploadController@destroy');

    /**
     * alumni form list
    */

    Route::get('/alumni_search','AalumniController@index');
    Route::post('/alumni_search_content','AalumniController@alumni_search_content');
    Route::post('/alumni_course','AalumniController@alumni_course');
    Route::get('/alumni_verify','AalumniController@alumni_verify');
    Route::get('/alumni_verify_done/{id}','AalumniController@alumni_verify_done');
    Route::get('/profile_view/{id}','AalumniController@profile_view');
    Route::get('/alumni_del/{id}','AalumniController@destroy');


});
/**
 * session end
 */



/* Admin Routes*/
/* admin login route*/
Route::get('login',function()
{
    return View::make('admin.login');
});
Route::post('admin_login','AloginController@login');
Route::get('admin_forgot',function()
{
    return View::make('admin.forgot');
});

Route::post('admin_password_reset','AloginController@send_email');
Route::get('admin_email_code/{id}','AloginController@email_code');
Route::get('admin/reset_password',function()
{
    return View::make('admin.reset_admin_password');
});

Route::post('admin/password_set','AloginController@reset');

/*notice board*/


/**
 * Front page
 */

Route::get('/','IndexController@index');
Route::get('photo_album','IndexController@photo_album');
Route::get('video_album','IndexController@video_album');
Route::get('photo/{id}','IndexController@photo');
Route::get('video/{id}','IndexController@video');
/**
 * Notice
*/
Route::get('notice/{id}','IndexController@notice');
Route::get('notice_all','IndexController@notice_all');
Route::get('notice_month/{id}','IndexController@notice_month');

/**
 * Placement
 */

Route::get('placement/{id}','IndexController@placement');
Route::get('placement_all','IndexController@placement_all');
Route::get('placement_month/{id}','IndexController@placement_month');

/**
 *Contact US page
 */
Route::get('contact',function()
{
    return View::make('contact');
});

Route::post('contact_info','IndexController@contact_info');

/**
 * About page
 */
Route::get('about','IndexController@about');

/**
 * Syllabus page
 */

Route::get('_syllabus','IndexController@syllabus');

/**
 * Programes
 */

Route::get('programs','IndexController@programs');
Route::get('programs_view/{id}','IndexController@programs_view');

/**
 * Assignment
 */

Route::get('assignments','AssignController@index');
Route::post('assignment_view','AssignController@show');

/**
 * facility
 */
Route::get('facility','IndexController@facility');

/**
 * Staff
 */
Route::get('staff','IndexController@staff');
Route::get('staff_view/{id}','IndexController@staff_view');



/**
 * Student alumie
 */

Route::get('alumni','SloginController@index');
Route::get('signup','SignupController@index');
Route::post('signup_content','SignupController@signup');

/**
 * Email confirmation
*/
Route::get('confirmation/{id}','SignupController@confirm_account');

Route::group(array('prefix'=>'user','before' => 'user'), function(){
    Route::get('profile','ProfileController@profile');

    /**
     * alumni
     */
    Route::get('alumni','AlumniController@index');
    Route::post('alumni_data','AlumniController@store');
    Route::get('alumni_edit','AlumniController@alumni_edit');

    /**
     * logout
     */
    Route::get('user_logout','SloginController@logout');

    /**
     * profile data and edit profile of particular user
     */
    Route::post('profile_data','ProfileController@store');
    Route::get('profile_edit','ProfileController@profile_edit');

});

Route::post('signin','SloginController@login');
