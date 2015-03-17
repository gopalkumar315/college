<?php

class ProfileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('user.profile');
	}

    /**
     * profile Completed or not after login
     */
    public function profile()
    {

        $data['user']=Auth::user()->get();
        $data['profile']=Profile::where('u_id',$data['user']->u_id)->first();
        $data['course']=Course::distinct('course')->get(array('course','parent'));
        if($data['profile']->profile_status==0){

            return View::make('user.profile_edit')->with('content',$data)->with('message',array('message'=>'Complete Your Profile first !!!'));
        }
        else{

            return View::make('user.profile')->with('content',$data)->with('message',array('message'=>''));
        }

    }


	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		//
	}

    public function profile_edit()
    {

        $user=Auth::user()->get();
        $data['profile']=Profile::where('u_id',$user->u_id)->first();
        $data['course']=Course::distinct('course')->get(array('course','parent'));
        if($data['profile']->profile_status==0){

            return View::make('user.profile_edit')->with('content',$data)->with('message',array('message'=>'Complete Your Profile first !!!'));
        }
        else{

            return View::make('user.profile_edit')->with('content',$data)->with('message',array('message'=>''));
        }

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
             'file'=>'mimes:jpg,jpeg,JPEG,JPG',
             'country'=>'required',
             'state'=>'required',
             'branch'=>'required',
             'city'=>'required',
             'croll'=>'required',
             'broll'=>'required',
             'dob'=>'required|date_format:d-m-Y',
             'mobile'=>'required|numeric|min:10',
             'belong_state'=>'required',
             'residence_address'=>'required',
             'current_address'=>'required',
             'father'=>'required',
             'session'=>'required',
             'course'=>'required'
         );

        $message=array(
            'required'=>'*this field is required',
            'mimes'=>'*image should be in jpg format',
            'numeric'=>'*enter number only',
            'min:10'=>'*invalid number',
			'date_format'=>'*enter the date in DD-MM-YY that format'


        );

        $v=Validator::make($input,$rule,$message);


        if($v->fails()){
            return Redirect::back()->withInput()->withErrors($v->errors());
        }else{

            $dir=public_path().'/user/profile_img/';
             $file=Input::file('file');

            /**get authenticated user data*/
            $user=Auth::user()->get();
            $data=Profile::where('u_id',$user->u_id)->first();



            /**Stroe photo data*/
            if(isset($file))
            {
                $filename=Str::Random(10).'.'.$file->getClientOriginalExtension();
                Image::make($file->getRealPath())->resize(150,150)->save($dir.$filename);

                /** should not delete default image*/
                if(strcmp($data->photo,"no_img.jpg")){
                    File::delete($dir.$data->photo);
                }

                /**store new image data*/
                $data->photo=$filename;
            }





            $data->country=Input::get('country');
            $data->state=Input::get('state');
            $data->city=Input::get('city');
            $data->course=Input::get('course');
            $data->branch=Input::get('branch');
						$data->class_roll_no=strtoupper(Input::get('croll'));
						$data->board_roll_no=Input::get('broll');
						$data->dob=Input::get('dob');
						$data->mobile=Input::get('mobile');
            $data->belong_state=Input::get('belong_state');
            $data->residence_address=Input::get('residence_address');
            $data->current_address=Input::get('current_address');
            $data->father=Input::get('father');
            $data->session=Input::get('session');
            $data->profile_status='1';
            $data->save();
            return Redirect::to('user/profile')->with('message','Thanks !!!');
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
