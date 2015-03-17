<?php

class SignupController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('user.signup');
	}



    /**
     * SignUp for student
     */

    public function signup(){
        $input=Input::all();
        $rule=array(
            'captcha'=>'required|captcha',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:user,username',
            'password'=>'required|min:6',
            'cpassword'=>'required|min:6|same:password',

        );
        $message=array(
            'required'=>'*this field is required',
            'captcha'=>"*wrong captcha",
            'email'=>'*invalid email',
            'unique'=>'email already exist',
            'min:5'=>'*minimum length is five ',
            'alpha'=>"*password is not strong",
            'same'=>'*password mismatch'
        );


        $v=Validator::make($input,$rule,$message);
				if($v->fails()){
            return Redirect::back()->withErrors($v->errors())->withInput();
        }
        else{

            $u_id=$this->gen_random();
            $this->create_account($u_id);
            $this->create_profile($u_id);
            $this->alumni($u_id);
            return Redirect::back()->with('message','Thanks for Registration <br> Please Confirm you Email!!!');
        }
    }

    /**
    *
    **/

    public function gen_random(){

        $str=Str::random('15');
        $result=User::where('u_id',$str)->first();
        if(empty($result)){
            return $str;
        }else{
            $this->gen_random();
        }

    }

    /**
     * create account for user
     * @param $u_id
     */

    public function create_account($u_id)
    {
        $confirm_code=Str::random('50');
        $user=new Signup();
        $user->username=strtolower(Input::get('email'));
        $user->password=Hash::make(Input::get('password'));
        $user->u_id=$u_id;
        $user->confirm_code=$confirm_code;
        $user->confirm_status='0';				
        $user->save();
        $this->send_email($confirm_code);

    }


		/**
		* create profile for user
		* @param $u_id
		*/
		public function create_profile($u_id){

				$data=new Profile();
				$data->username=strtolower(Input::get('email'));
				$data->fname=Input::get('fname');
				$data->lname=Input::get('lname');
				$data->profile_status='0';
				$data->u_id=$u_id;
				$data->save();

		}

        /**
         *Alumni status
         */

        public function alumni($u_id){

            $data=new Alumni();
            $data->u_id=$u_id;
            $data->status='0';
            $data->save();

        }



    /**
     * send confirmation code to user for signup process
     * @param $confirm_code
     */
    public function send_email($confirm_code){

        $data=array(
            'fname'=>Input::get('fname'),
            'email'=>Input::get('email'),
            'link'=>URL::to('confirmation',$confirm_code)
        );

        $user=array(
            'fname'=>Input::get('fname'),
            'email'=>Input::get('email')
        );

        Mail::send('emails.user',$data,function($message) use ($data){

            $message->to($data['email'])->subject('RIET Accout Confirmation');
        });
    }



    /**
     * confirma account
     */

    public function confirm_account($code)
    {
        $check=Signup::where('confirm_code',$code)->first();
        if($check){
            if($check->confirm_status=='0'){
                $check->confirm_status='1';
                $check->save();
                return Redirect::to('alumni')->with('message','Your account has confirmed<br> Please Login !!!!');

            }else{

                return Redirect::to('alumni')->with('message','Your Account is already confirmed <br>Please Login you account !!!');
            }
        }else{

            return Redirect::to('alumni')->with('message','Account does not exists  <br> Please Sign Up !!!');
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
