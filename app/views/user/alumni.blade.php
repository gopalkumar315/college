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
                @include('user/menu')
            <!--menu end -->

            <div class="row-fluid">
                <div class="col-xl-12">
                   <div class="profile">
                       <h3>{{$content['profile']->fname}} {{$content['profile']->lname}}</h3>
                       <div class="col-md-10">
                           <div class="profile_form">

                               <table class="table-responsive table table-borderless ">

                                   <tr>
                                       <td class="col-md-3"><strong>About Myself</strong></td>
                                       <td class="cap">{{$content['alumni']->about}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Btech Course</strong></td>
                                       <td class="cap">{{$content['alumni']->btech_course}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Btech Marks</strong></td>
                                       <td class="cap">{{$content['alumni']->btech_marks}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Session</strong></td>
                                       <td class="cap">{{$content['alumni']->session}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Passout Year</strong></td>
                                       <td class="cap">{{$content['alumni']->passout}}</td>
                                   </tr>


                                   <tr>
                                       <td><strong>Skills</strong></td>
                                       <td class="cap">{{$content['alumni']->skill}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Preset Job</strong></td>
                                       <td>{{$content['alumni']->preset_job}}</td>
                                   </tr>

                                   <tr>
                                        <td> <strong>First Job</strong> </td>
                                        <td> {{$content['alumni']->first_job}} </td>
                                   </tr>

                                   <tr>
                                      <td> <strong>Second Job</strong> </td>
                                      <td> {{$content['alumni']->second_job}} </td>
                                   </tr>

                                   <tr>
                                      <td> <strong>Third Job</strong> </td>
                                      <td> {{$content['alumni']->third_job}} </td>
                                   </tr> 

                                   <tr>
                                       <td><strong>Job Experience</strong></td>
                                       <td>{{$content['alumni']->job_experience}}</td>
                                   </tr>

                                 <!--   <tr>
                                       <td><strong>Matric School</strong></td>
                                       <td>{{$content['alumni']->matric_school}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Martic Marks</strong></td>
                                       <td>{{$content['alumni']->matric_marks}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Secondary School</strong></td>
                                       <td>{{$content['alumni']->sec_school}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Secondary School Marks</strong></td>
                                       <td>{{$content['alumni']->sec_marks}}</td>
                                   </tr> -->

                                   <tr>
                                       <td><strong>Diploma</strong></td>
                                       <td class="cap">{{$content['alumni']->diploma}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Diploma College</strong></td>
                                       <td class="cap">{{$content['alumni']->diploma_col}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Diploma Marks</strong></td>
                                       <td class="cap">{{$content['alumni']->diploma_marks}}</td>
                                   </tr>

                                   <tr>
                                       <td><strong>Other Qualification</strong></td>
                                       <td>{{$content['alumni']->other_qualification}}</td>
                                   </tr>

                                   <tr>
                                       <td><a href="{{URL::to('user/alumni_edit')}}" class="btn btn-danger">Edit</a></td>
                                   </tr>
                               </table>

                           </div>
                       </div>

                       <div class="col-md-2 text-right">
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
