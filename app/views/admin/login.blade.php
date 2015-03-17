<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')
</head>

<body class="signin">

<section>
    <div class="signinpanel" >
        <div class="row"  >
            <div style="width: 350px; margin:0 auto;">
                    <form method="post" action="admin_login">
                    <h4 class="nomargin">Sign In</h4>
                    <p class="mt5 mb20">Login to access your account.</p>
<!--                    //login falied messsage    -->
                    @if(Session::has('notice'))
                        <p style="color:red;">{{ Session::get('notice') }}</p>
                    @endif

                    <input type="text" class="form-control uname" value='{{Input::old('username')}}' name="username" placeholder="Username" />
                    @if($errors->has('username'))
                        <div style="color:red; font-size:12px ;"> {{ $errors->first('username')}} </div>
                    @endif
                    <input type="password" class="form-control pword" name="password" placeholder="Password" />
                    @if($errors->has('password'))
                    <div style="color:red; font-size:12px ;"> {{ $errors->first('password')}} </div>
                    @endif

                    <a href="admin_forgot"><small>Forgot Your Password?</small></a>
                    <input type="submit" class="btn btn-success btn-block" value="Login"/>
                </form>
            </div><!-- col-sm-5 -->

        </div><!-- row -->
    </div><!-- signin -->
</section>

</body>
</html>


