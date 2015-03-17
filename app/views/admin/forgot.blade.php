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
                <form method="post" action="admin_password_reset">
                    <h4 class="nomargin">Password Forgot</h4>
                    <p class="mt5 mb20">Enter the Email</p>
                    <!--                    //login falied messsage    -->
                    @if(Session::has('message'))
                    <p style="color:red;">{{ Session::get('message') }}</p>
                    @endif

                    <input type="text" class="form-control uname" value='{{Input::old('email')}}' name="email" placeholder="enter email" />
                    @if($errors->has('email'))
                    <div style="color:red; font-size:12px ;"> {{ $errors->first('email')}} </div>
                    @endif

                    <a href="admin_forgot"><small>Forgot Your Password?</small></a>
                    <input type="submit" class="btn btn-success btn-block" value="Reset"/>
                </form>
            </div><!-- col-sm-5 -->

        </div><!-- row -->
    </div><!-- signin -->
</section>

</body>
</html>


