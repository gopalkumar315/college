<?php

class AlumniController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $data['user']=Auth::user()->get();
        $data['alumni']=Alumni::where('u_id',$data['user']->u_id)->first();
        $data['profile']=Profile::where('u_id',$data['user']->u_id)->first();
        $data['course']=Course::distinct('course')->get(array('course','parent'));
        if($data['alumni']->status==0){

            return View::make('user.alumni_edit')->with('content',$data)->with('message',array('message'=>'Complete Your Alumni Form first !!!'));
        }
        else{

            return View::make('user.alumni')->with('content',$data)->with('message',array('message'=>''));
        }
	}


    public function alumni_edit()
    {
        $user=Auth::user()->get();
        $data['alumni']=Alumni::where('u_id',$user->u_id)->first();
        $data['profile']=Profile::where('u_id',$user->u_id)->first();
        $data['course']=Course::distinct('course')->get(array('course','parent'));
        if($data['alumni']->status==0){

            return View::make('user.alumni_edit')->with('content',$data)->with('message',array('message'=>'Complete Your Alumni Form first !!!'));
        }
        else{

            return View::make('user.alumni_edit')->with('content',$data)->with('message',array('message'=>''));
        }
    }





	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input=Input::all();

        $rule=array(
            'about'=>'required',
            'skill'=>'required',
            'preset_job'=>'required',
            'file'=>'mimes:docx,doc,pdf',
            'btech_course'=>'required',
            'btech_marks'=>'required'
        );

        $message=array(
            'required'=>'*this field is required',
            'mimes'=>'*file should be of docx,doc,pdf format'
        );

        $v=Validator::make($input,$rule,$message);

        if($v->fails()){
            return Redirect::back()->withInput()->withErrors($v->errors());
        }else{

            $user=Auth::user()->get();
            $data=Alumni::where('u_id',$user->u_id)->first();


            /**
             * file upload
             */
            $dir=public_path().'/user/resume/';
            $file=Input::file('file');

              if(isset($file)){

                  $filename=Str::random(10).'.'.$file->getClientOriginalExtension();
                  /**
                   * check file already exist or not
                   */
                  if($data->file!=null){
                      File::delete($dir.$data->file);
                  }
                  $file->move($dir,$filename);
                  $data->file=$filename;
              }

              //upload resume


              $data->about=Input::get('about');
              $data->skill=Input::get('skill');
              $data->first_job=Input::get('first_job');
              $data->second_job=Input::get('second_job');
              $data->third_job=Input::get('third_job');
              $data->preset_job=Input::get('preset_job');
              $data->job_experience=Input::get('job_experience');
              $data->diploma=Input::get('diploma');
              $data->diploma_col=Input::get('diploma_col');
              $data->diploma_marks=Input::get('diploma_marks');
              $data->btech_marks=Input::get('btech_marks');
              $data->btech_course=Input::get('btech_course');
              $data->session=Input::get('session');
              $data->passout=Input::get('passout');
              $data->other_qualification=Input::get('other_qualification');
              $data->status='1';
              $data->save();

              return Redirect::to('user/alumni');
        }

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
