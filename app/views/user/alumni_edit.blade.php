<html>
<head>
    <title>Alumni Form</title>
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
            <div class="profile_edit">
                <h3>{{$content['profile']->fname}} {{$content['profile']->lname}}</h3>

                <!--                       <img id="uploadPreview1" src="no_image.jpg" /><br />-->
                <!--                       <input id="uploadImage1" type="file" name="p1" onchange="PreviewImage(1);" />-->
                <div class="col-md-6 col-md-offset-3" >
                    <div class="profile_form">

                        @if(!empty($message))
                        <div class="p_msg">{{$message['message']}}</div>
                        @endif
                        <form action="alumni_data" method="post" enctype="multipart/form-data">
                            <table class="table table-responsive table-borderless">
                                <tr>
                                    <td>About Yourself</td>
                                    <td>
                                        <textarea name="about" class="form-control">{{Input::old('about',$content['alumni']->about)}}</textarea>
                                        <span>{{$errors->first('about')}}</span>
                                    </td>
                                </tr>


                                <tr>
                                    <td>Skills</td>
                                    <td>
                                        <textarea name="skill" class="form-control">{{Input::old('skill',$content['alumni']->skill)}}</textarea>
                                        <span>{{$errors->first('about')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                        <td>  First job</td>
                                        <td>
                                            <textarea name="first_job" class='form-control'>{{Input::old('preset_job',$content['alumni']->first_job)}} </textarea>
                                        </td>
                                </tr>

                                <tr>
                                        <td>Second job</td>
                                        <td>
                                            <textarea name="second_job" class='form-control'>{{Input::old('preset_job',$content['alumni']->second_job)}} </textarea>
                                        </td>
                                </tr>


                                <tr>
                                        <td>Third job</td>
                                        <td>
                                            <textarea name="third_job" class='form-control'>{{Input::old('preset_job',$content['alumni']->third_job)}} </textarea>
                                        </td>
                                </tr>

                                <tr>
                                    <td>Present Job</td>
                                    <td>
                                        <textarea name="preset_job" class="form-control">{{Input::old('preset_job',$content['alumni']->preset_job)}}</textarea>
                                        <span>{{$errors->first('preset_job')}}</span>
                                    </td>
                                </tr>

                                <!-- <tr>
                                    <td>Job History</td>
                                    <td>
                                        <textarea name="job_history" class="form-control">{{Input::old('job_history',$content['alumni']->job_history)}}</textarea>
                                        <span>{{$errors->first('job_history')}}</span>
                                    </td>
                                </tr> -->

                                <tr>
                                    <td>Job Experience</td>
                                    <td>
                                        <textarea name="job_experience" class="form-control">{{Input::old('job_experience',$content['alumni']->job_experience)}}</textarea>
                                        <span>{{$errors->first('job_experience')}}</span>
                                    </td>
                                </tr>


                               <!--  <tr>
                                    <td>Matric School</td>
                                    <td>
                                        <input type="text" placeholder="Name,City,State" name="matric_school" class="form-control" value="{{Input::old('matric_school',$content['alumni']->matric_school)}}"/>
                                        <span>{{$errors->first('matric_school')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Matric Marks</td>
                                    <td>
                                        <input type="text"  name="matric_marks" class="form-control" value="{{Input::old('matric_marks',$content['alumni']->matric_marks)}}"/>
                                        <span>{{$errors->first('matric_marks')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12TH School</td>
                                    <td>
                                        <input type="text" placeholder="Name,City,State" name="sec_school" class="form-control" value="{{Input::old('sec_school',$content['alumni']->sec_school)}}"/>
                                        <span>{{$errors->first('sec_school')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12TH School Marks</td>
                                    <td>
                                        <input type="text"  name="sec_marks" class="form-control" value="{{Input::old('sec_marks',$content['alumni']->sec_marks)}}"/>
                                        <span>{{$errors->first('sec_marks')}}</span>
                                    </td>
                                </tr> -->


                                <tr>
                                    <td>Diploma (if any)</td>
                                    <td>
                                        <input type="text"  name="diploma" placeholder="diploma name" class="form-control" value="{{Input::old('diploma',$content['alumni']->diploma)}}"/>
                                        <span>{{$errors->first('diploma')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Diploma College</td>
                                    <td>
                                        <input type="text" placeholder="Name,City,State" name="diploma_col" class="form-control" value="{{Input::old('diploma_col',$content['alumni']->diploma_col)}}"/>
                                        <span>{{$errors->first('diploma_col')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Diploma Marks</td>
                                    <td>
                                        <input type="text"  name="diploma_marks" class="form-control" value="{{Input::old('diploma_marks',$content['alumni']->diploma_marks)}}"/>
                                        <span>{{$errors->first('diploma_marks')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td> Btech Course  </td>
                                    <td>
                                        <select name="btech_course" class="select  form-control" id="">
                                            <option value="{{Input::old('btech_course',$content['alumni']->btech_course)}}">{{Input::old('btech_course',$content['alumni']->btech_course)}}</option>
                                            @foreach($content['course'] as $db)
                                            @if($db->parent!=0)
                                            <option value="{{$db->course}}">{{$db->course}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <span>{{$errors->first('btech_course')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Btech Marks</td>
                                    <td>
                                        <input type="text"  name="btech_marks" class="form-control" value="{{Input::old('btech_marks',$content['alumni']->btech_marks)}}"/>
                                        <span>{{$errors->first('btech_marks')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                   <td>Session</td>
                                   <td>
                                       <select name="session" class="select  form-control" id="">
                                           <option value="{{Input::old('session',$content['profile']->session)}}">{{Input::old('session',$content['profile']->session)}}</option>
                                           @for($i=2004;$i<=2050;$i++)
                                              <option value="{{$i}}">{{$i}}</option>
                                           @endfor
                                       </select>

                                       <span>{{$errors->first('session')}}</span>
                                   </td>
                               </tr>    


                                 <tr>
                                   <td>Passout Year</td>
                                   <td>
                                       <select name="passout" class="select  form-control" id="">
                                           <option value="{{Input::old('passout',$content['alumni']->passout)}}">{{Input::old('passout',$content['alumni']->passout)}}</option>
                                           @for($i=2004;$i<=2050;$i++)
                                              <option value="{{$i}}">{{$i}}</option>
                                           @endfor
                                       </select>

                                       <span>{{$errors->first('session')}}</span>
                                   </td>
                                   </tr>



                                <tr>
                                    <td>Other Qualification</td>
                                    <td>
                                        <textarea name="other_qualification" class="form-control">{{Input::old('other_qualification',$content['alumni']->other_qualification)}}</textarea>
                                        <span>{{$errors->first('other_qualification')}}</span>
                                    </td>
                                </tr>



                                <tr>
                                    <td>Resume</td>
                                    <td><input type="file" class="form-control" name="file" />
                                        <span>{{$errors->first('file')}}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><button type="submit" class="btn btn-primary">Submit</button>
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
