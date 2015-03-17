<html>
<head>
    <title>Ramgarhia Institute of Engg & Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Live .js        -->
    {{HTML::script('user/js/live.js')}}
    <!-- my style sheet       -->
    {{HTML::style('user/css/style.css')}}
    <!--owl carousel-->

    <!--owl carousel-->

</head>
<body>

<div class="container main_container">
    <!--//header-->
    @include('header')
    <!--header end-->

    <!-- menu  -->
    @include('../menu')
    <!--menu end -->


    <div class="row-fluid">
        <div class="col-xl-12">

            <div class="signup">
                <div class="col-md-5 col-md-offset-4">
                    <div class="signup_form">
                        @if(Session::has('message'))
                            <div class="message">{{Session::get('message')}}</div>
                        @endif
                        <h3>Sign Up</h3>


                        <form action="signup_content" method="post">
                        <table width="100%">

                            <tr>
                                <td><strong>First name</strong></td>
                                <td>
                                    <input type="text" name="fname" value="{{Input::old('fname')}}" class="txt_box"/>
                                    <span>{{$errors->first('fname')}}</span>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Last name</strong></td>
                                <td><input type="text" name="lname" value="{{Input::old('lname')}}" class="txt_box"/>
                                    <span>{{$errors->first('lname')}}</span>
                                </td>
                            </tr>


                            

                            <tr>
                                <td><strong>Email</strong></td>
                                <td><input type="text" name="email" value="{{Input::old('email')}}" class="txt_box"/>
                                    <span>{{$errors->first('email')}}</span>
                                </td>
                            </tr>


                            <tr>
                                <td><strong>Password</strong></td>
                                <td><input type="password" name="password" class="txt_box"/>
                                    <span>{{$errors->first('password')}}</span>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Confirm Password</strong></td>
                                <td><input type="password" name="cpassword" class="txt_box"/>
                                    <span>{{$errors->first('cpassword')}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><img src="{{Captcha::getImage()}}"></td>
                            </tr>

                            <tr>
                                <td><strong>Write Captcha</strong></td>
                                <td><input type="text" name="captcha" class="txt_box"/>
                                    <span>{{$errors->first('captcha')}}</span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" ><button type="submit" class="sub_btn">Sign Up</button></td>
                            </tr>

                        </table>

                       </form>
                    </div>

                </div>
                <div class="clear"></div>
            </div>

        </div>
    </div>




    <!-- footer   -->
    @include('footer')
    <!--  footer end     -->
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
