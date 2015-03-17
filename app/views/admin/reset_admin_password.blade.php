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
                <form method="post" action="password_set">
                    <h4 class="nomargin">Reset Password</h4>
                    @if(Session::has('id'))
                    <div style="color:red; font-size: 13px;;">{{Session::get('notice')}}</div>
                    @endif
                    <!--                    //login resetCode  -->
                    @if(Session::has('id'))
                    <input type="hidden" name="id" value="{{ Session::get('id') }}"/>
                    @endif
                    <input type="password" class="form-control uname"  name="password" placeholder="enter password" />
                    <div style="color:red; font-size:13px;">{{$errors->first('password')}}</div>
                    <input type="password" class="form-control uname"  name="confirm_password" placeholder="confirm password" />
                    <div style="color:red; font-size:13px;">{{$errors->first('confirm_password')}}</div>
                    <input type="submit" class="btn btn-success btn-block" value="Reset"/>
                </form>
            </div><!-- col-sm-5 -->

        </div><!-- row -->
    </div><!-- signin -->
</section>

</body>
</html>


