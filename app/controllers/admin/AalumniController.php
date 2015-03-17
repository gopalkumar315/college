<?php

class AalumniController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $data=Course::where('parent','!=','0')->get(array('course'));
	    return View::make('admin.alumni')->with('content',$data);
	}

    /**
     * Search by alumni content by university,boardroll,class roll no
     */
    public function alumni_search_content(){

        $input=Input::all();
        $rule=array(
            'search'=>'required',
            'search_by'=>'required'
        );

        $v=Validator::make($input,$rule);
        if($v->fails()){

            return Redirect::back()->withInput()->withErrors($v->errors());
        }else{

            $data['count']=Profile::where(Input::get('search_by'),strtoupper(Input::get('search')))->count();
            if(Input::get('search_by')=='class_roll_no'){

                $data['profile']=Profile::where(Input::get('search_by'),strtoupper(Input::get('search')))->get();
                return View::make('admin.alumni_search')->with('content',$data);

            }else{

                $data['profile']=Profile::where(Input::get('search_by'),strtoupper(Input::get('search')))->get();
                return View::make('admin.alumni_search')->with('content',$data);
            }
        }
    }

    /**
     * alumni search by course
     */

    public function alumni_course(){
        $input=Input::all();
        $rule=array(
            'branch'=>'required',
            'session'=>'required'
        );

        $v=Validator::make($input,$rule);
        if($v->fails()){

            return Redirect::back()->withInput()->withErrors($v->errors());
        }else{

                $data['count']=Profile::where('branch',Input::get('branch'))->where('session',Input::get('session'))->count();
                $data['profile']=Profile::where('branch',Input::get('branch'))->where('session',Input::get('session'))->get();
                return View::make('admin.alumni_search')->with('content',$data);
        }
    }



    /**
     * Alumni Verification
     */
    public function alumni_verify(){
       $data=DB::select('select * from user a Inner join profile b on a.u_id=b.u_id where(a.verify=0)');
       return View::make('admin.alumni_verify')->with('content',$data);
    }

    /**
     * alumni Verification done
     */
    public function alumni_verify_done($id){

        $data=Slogin::where('u_id',$id)->first();
        $data->verify='1';
        $data->save();
        return Redirect::back()->with('message','Account Verified');
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
	* Profile Vierw
	*/

	public function profile_view($id){
		
		$data['profile']=Profile::where('u_id',$id)->first();
		$data['alumni']=Alumni::where('u_id',$id)->first();
		$data['user']=Slogin::where('u_id',$id)->first();
		return View::make('admin.profile_view')->with('content',$data);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		User::where('u_id',$id)->delete();
		Profile::where('u_id',$id)->delete();
		Alumni::where('u_id',$id)->delete();
		return Redirect::back();
	}


}
