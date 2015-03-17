<?php

class SloginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(!Auth::user()->guest()){
            return Redirect::to('user/profile');
        }else{
            return View::make('user.index');
        }

	}

    /**
     * Login
     */

    public function login(){



        $input=Input::all();
        $rule=array(
            'email'=>'required|email',
            'password'=>'required'
        );

        $message=array(
            'required'=>'*this field cannot be empty',
            'email'=>'*invalid email'
        );

        $v=Validator::make($input,$rule,$message);
        if($v->fails()){
            return Redirect::back()->withInput()->withErrors($v->errors());
        }else{


            $login_content=array(
                'username'=>strtolower(Input::get('email')),
                'password'=>Input::get('password'),
                'confirm_status'=>'1'
            );


            Auth::user()->attempt($login_content,true);
            if(Auth::user()->check()){
                return Redirect::to('user/profile');
            }else{
                return Redirect::back()->with('message','Unable to login<br> hope you may confirm you email !!!');
            }

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
     * user logout
     */

    public function logout(){
        Auth::user()->logout();
        return Redirect::to('/');
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
		//
	}


}
