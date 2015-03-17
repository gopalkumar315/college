<?php

class IndexController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    //show index page material
	public function index()
	{
        $data['event']=DB::table('event')->take(8)->orderBy('id','desc')->get();
        $data['notice']= DB::table('notice')->take(8)->orderBy('id','desc')->get();
        $data['photo']=DB::select('select a.name from photo a inner join album b on a.album_id=b.id group by(a.album_id) order by b.id desc limit 0,8 ');
       
        return View::make('index')->with('content',$data);

	}

    //show photo album
    public function photo_album()
    {
        $data=DB::table('photo')
            ->Join('album', 'photo.album_id', '=', 'album.id')->select('album.id','photo.name','album.name as album_name')->orderBy('photo.id','desc')->groupBy('album.name')
            ->get();
        return View::make('gallery')->with('content',$data);
    }

    //show Photos of  album photos
    Public function photo($id)
    {
        $data['photo']=DB::table('photo')->where('album_id',$id)->get();
        $data['album_name']=DB::table('album')->where('id',$id)->get();
        return View::make('photo')->with('content',$data);

    }

    //show video album
    public function video_album()
    {
        $data=DB::select('SELECT a.id,a.album_title,b.video_title,b.link FROM video a inner join video b where a.id=b.parent group by a.id');
        return View::make('video_album')->with('content',$data);
    }

    //show videos of video albums
    public function video($id)
    {
        $data['video']=DB::table('video')->where('parent',$id)->get();
        $data['video_album']=DB::table('video')->where('id',$id)->get();
        return View::make('video')->with('content',$data);
    }


    /**
     * NOtice from index page
     */

    public function notice($id)
    {
        $data=DB::table('notice')->where('id',$id)->get();
        return View::make('notice')->with('content',$data);
    }

    /**
     * To show all the notice with date and its count
     */

    public function notice_all()
    {
        //notice_date according to notice in particular month
        $data['notice_all']=DB::select("select id,notice_date, count(notice_date) as total from notice group by month(notice_date) order by notice_date desc");

        //show all notice of particular month
        $data['notice_by_date']=DB::select('select * from notice where month(notice_date)=(select month(notice_date) from notice order by id desc limit 1)');
        return View::make('notice_all')->with('content',$data);
    }

    /**
     *  all notice of particular month
     *
     */
    public function notice_month($id)
    {
        $data['notice_all']=DB::select("select id,notice_date, count(notice_date) as total from notice group by month(notice_date) order by notice_date desc");

        //show all notice of particular month
        $data['notice_by_date']=DB::select('select * from notice where month(notice_date)=(select month(notice_date) from notice where id='.$id.') ORDER BY id desc');
        return View::make('notice_all')->with('content',$data);
    }


    /**
     * placement
     * Training and placement that has event table
     */

    public function placement($id)
    {
        $data=DB::table('event')->where('id',$id)->get();
        return View::make('placement')->with('content',$data);
    }

    /**
     * @return mixed placement all
     */

    public function placement_all()
    {
        //notice_date according to notice in particular month
        $data['notice_all']=DB::select("select id,event_date, count(event_date) as total from event group by month(event_date) order by event_date desc");

        //show all notice of particular month
        $data['notice_by_date']=DB::select('select * from event where month(event_date)=(select month(event_date) from event order by id desc limit 1)');
        return View::make('placement_all')->with('content',$data);
    }

    /**
     *  all notice of particular month
     *
     */
    public function placement_month($id)
    {
        $data['notice_all']=DB::select("select id,event_date, count(event_date) as total from event group by month(event_date) order by event_date desc");

        //show all notice of particular month
        $data['notice_by_date']=DB::select('select * from event where month(event_date)=(select month(event_date) from event where id='.$id.') ORDER BY id desc');
        return View::make('placement_all')->with('content',$data);
    }


    /**
     * Contact Email page
     */

    public function contact_info()
    {
        $input=Input::all();

        $rule=array(
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>"required",
            'message'=>'required'
        );

        $message=array(
            'email'=>'*Invalid email ',
            'required'=>'*required'
        );

        $v=Validator::make($input,$rule,$message);
        if($v->fails())
        {
            $error=$v->errors();
            return Redirect::to('contact')->withInput()->withErrors($error);
        }
        else
        {
              $data=array(
                  'subject'=>Input::get('subject'),
                  'name'=>Input::get('name'),
                  'email'=>Input::get('email'),
                  'messages'=>Input::get('message'),
              );


             Mail::send('emails.contact',$data,function($message)
             {
                  $message->to('gopalkumar315@gmail.com','Contact Information')->subject('Riet Contact Information');
             });
             return Redirect::to('contact')->with('message','Thanks for message');

        }
    }

    public function about()
    {
        $data=About::find(1);
        return View::make('about')->with('data',$data);
    }

    /**
     * Syllabus page
     */

    public function syllabus()
    {
        $i=0;$j=0;
        global $course;
        $data['course']=array();
        $course['p_course']=array();
        $data['course']=Syllabus::distinct()->get(array('course','course_id'));
        $course['p_course']=array();
        foreach($data['course'] as $db)
        {
            if($db->course_id=='1')
            {
                $course['course'][$i]=Syllabus::where('course',$db->course)->orderby('year')->where('course_id','1')->get();
                $i++;
            }
            else
            {
                $course['p_course'][$j]=Syllabus::where('course',$db->course)->orderby('year')->where('course_id','2')->get();
                $j++;
            }

        }
        return View::make('syllabus')->with('content',$course)->with('course',$data);
    }


    /**
     * Programes
     */

    public function programs(){

        $data['graduate']=Course::where('parent','1')->orderBy('course')->get();
        $data['post']=Course::where('parent','2')->orderBy('course')->get();
        return View::make('programs')->with('content',$data);
    }

    /**
     *
     * Programs View
     */

    public function programs_view($id){
        $data['course']=Course::find($id);
        return View::make('programs_view')->with('content',$data);
    }

    /**
     * facility
     */

    public function facility()
    {
        $data['course']=facility::find(1);
        return View::make('facility')->with('content',$data);
    }

    /**
     * staff
     */

    public function staff(){
        $data['graduate']=Course::where('parent','1')->orderBy('course')->get();
        $data['post']=Course::where('parent','2')->orderBy('course')->get();
        return View::make('staff')->with('content',$data);
    }

    /**
     * staff View
     */
    public function staff_view($id){
        $data['course']=Course::find($id);
        $data['staff']=Staff::where('course_id',$id)->get();
        return View::make('staff_view')->with('content',$data);
    }


}
