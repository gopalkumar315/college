<?php

class AloginController extends \BaseController
{
    public function login()
    {
        $al = new Adminlogin();
        $input = Input::all();
        $v = $al->validation($input);
        if ($v->fails())
        {
            $error = $v->errors();
            return Redirect::to('login')->withInput()->withErrors($error);
        }
        else
        {

            Auth::admin()->attempt($input,true);
            if(Auth::admin()->check())
            {
                return Redirect::to('admin/demo');
            }
            else
            {
                return Redirect::to('login')->with('notice', 'Invalid username and password');
            }
        }
    }


    public function send_email()
    {
        //get email for password reset to send main
        $input = array('email' => Input::get('email'));
        $rule = array('email' => 'required|email');

        //show extra message of validation
        $messages = array(
            'required' => 'This field cannot be empty',
            'email' => 'enter the proper email'
        );
        //make validation
        $v = Validator::make($input, $rule, $messages);
        //if validation fails

        if ($v->fails())
        {
            $error = $v->errors();
            //retdire to admin_fotgot to show error message
            return Redirect::to('admin_forgot')->withInput()->withErrors($error);
        }
        else
        {
            //send email to get row where email==....
            $email = Input::get('email');
            $user = AdminLogin::where('email', $email);
            if ($user->count())
            {
                $user = $user->first(); //resett code to set email
                $reset_code = str_random(60); //temp password so that user may use one time
                $temp_password = str_random(16); //save reset code
                $user->reset_code = $reset_code; //save temp password
                $user->password = Hash::make($temp_password);


                if ($user->save())
                {
                    $data = array(
                        'name' => $user->name,
                        'email' => $user->email,
                        'temp_password' => $temp_password,
                        'link' => URL::to('admin_email_code', $reset_code)
                    );

                    //send email to reset the password
                    Mail::send('emails.template', $data, function ($message) use ($user, $data) {
                        $message->to('Gopalkumar315@gmail.com', 'Gopal Kumar')->subject('Welcome to Riet');
                    });

                    return Redirect::to('admin_forgot')->with('message','Your Password Reset Link has been sent to your email');
                }
            }
        }
    }

    public function email_code($id)
    {

        return Redirect::to('admin/reset_password')->with('id',$id);
    }

    public function reset()
    {
        $input=Input::All();
        $rule=array(
            'password'=>'required|min:5',
            'confirm_password'=>'required|same:password'
        );

        $message=array(

            'required'=>'Fields Cannot be empty',
            'min:5'=>'minimum five character is required',
            'same'=>'confirm password did not matched'
        );

        $v=Validator::make($input,$rule,$message);
        if($v->fails())
        {
            return Redirect::to('admin/reset_password')->withErrors($v->errors());

        }
        else
        {
            $id=Input::get('id');
            $password=Input::get('password');
            $user=Adminlogin::where('reset_code',$id);
            if($user->count())
            {
                $user=$user->first();
                $user->reset_code='';
                $user->password=Hash::make($password);
                if($user->save())
                {
                    return Redirect::to('login');
                }
            }
            else
            {
                return Redirect::to('admin/reset_password')->with('notice','Invalid Access');
            }
        }
    }

    public function logout()
    {
       Auth::admin()->logout();
       return Redirect::to('/');
    }


}
