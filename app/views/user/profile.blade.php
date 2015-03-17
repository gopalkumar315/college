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

    </head>
    <body>

        <div class="container main_container">
            <!--//header-->
            @include('header')
            <!--header end-->

            <!-- menu  -->
                @include('user/menu')
            <!--menu end -->

            <div class="row-fluid">
                <div class="col-xl-12">
                   <div class="profile">
                       <h3>{{$content['profile']->fname}} {{$content['profile']->lname}}</h3>
                       <div class="col-md-5">
                           <div class="profile_form">

                               <table class="table table-borderless table-responsive">
                                   <tr>
                                       <td style="vertical-align: bottom;"><strong>Profile Photo</strong></td>
                                       <td><img src="{{asset('user/profile_img/'.$content['profile']->photo)}}" width="150px" alt=""/></td>
                                   </tr>


                                   <tr>
                                       <td><strong>Name</strong></td>
                                       <td class="cap">{{$content['profile']->fname}}  {{$content['profile']->lname}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Father Name</strong></td>
                                       <td class="cap">{{$content['profile']->father}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Date Of Birth</strong></td>
                                       <td>{{date('d-M-y',strtotime($content['profile']->dob))}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Class Roll no</strong></td>
                                       <td>{{$content['profile']->class_roll_no}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Board Roll no</strong></td>
                                       <td>{{$content['profile']->board_roll_no}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Mobile Number</strong></td>
                                       <td>{{$content['profile']->mobile}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Email</strong></td>
                                       <td>{{$content['profile']->username}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Course</strong></td>
                                       <td>{{$content['profile']->course}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Branch</strong></td>
                                       <td>{{$content['profile']->branch}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>session</strong></td>
                                       <td>{{$content['profile']->session}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Country</strong></td>
                                       <td class="cap">{{$content['profile']->country}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>State</strong></td>
                                       <td class="cap">{{$content['profile']->state}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>City</strong></td>
                                       <td class="cap">{{$content['profile']->city}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Belong State</strong></td>
                                       <td class="cap">{{$content['profile']->belong_state}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Permanent Address</strong></td>
                                       <td>{{$content['profile']->residence_address}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Current Address</strong></td>
                                       <td>{{$content['profile']->current_address}}</td>
                                   </tr>

                                   <tr>
                                       <td><a href="{{URL::to('user/profile_edit')}}" class="btn btn-danger">Edit</a></td>
                                   </tr>
                               </table>

                           </div>
                       </div>

                       <div class="col-md-7 text-right">
                           <br/>

                           @if($content['user']->verify==0)
                           <div style="color: #D9534F; font-weight: bold;"> Unverfied </div>
                           @else
                           <div style="color: #D9534F; font-weight: bold;"> Verfied </div>
                           @endif
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
