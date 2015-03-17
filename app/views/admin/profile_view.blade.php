<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')
</head>
  <style type="text/css">
    table tr,td
    {
      border:none;
    }
  </style>
<body>
<section>
    <div class="leftpanel">
        <div class="logopanel">
           <h1><span>[</span>RIET Panel<span>]</span></h1>
        </div>
        <!-- logopanel -->

        @include('admin.links.nav')
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')
        
        <!-- headerbar -->
        <div class="pageheader">
            <h2>{{$content['profile']->fname}} Profile</h2>
            <div class="text-right">
               @if($content['user']->verify==0)
                  <div style='color:red;'>Account Status: Unverfied</div>
                @else
                  <div style='color:red;'>Account Status: Verfied</div>
                @endif
            </div>
        </div>


        <div class="contentpanel">
           <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
              <li><a href="#alumni" role="tab" data-toggle="tab">Alumni Profile</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="profile">

                        <table class="table table-responsive">
                                   <tr>
                                       <td style="vertical-align: bottom;">Profile Photo</td>
                                       <td><img src="{{asset('user/profile_img/'.$content['profile']->photo)}}" width="150px" alt=""/></td>
                                   </tr>


                                   <tr>
                                       <td>Name</td>
                                       <td class="cap">{{$content['profile']->fname}}  {{$content['profile']->lname}}</td>
                                   </tr>

                                   <tr>
                                       <td>Father Name</td>
                                       <td class="cap">{{$content['profile']->father}}</td>
                                   </tr>

                                   <tr>
                                       <td>Date Of Birth</td>
                                       <td>{{date('d-M-y',strtotime($content['profile']->dob))}}</td>
                                   </tr>

                                   <tr>
                                       <td>Class Roll no</td>
                                       <td>{{$content['profile']->class_roll_no}}</td>
                                   </tr>

                                   <tr>
                                       <td>Board Roll no</td>
                                       <td>{{$content['profile']->board_roll_no}}</td>
                                   </tr>

                                   <tr>
                                       <td>Mobile Number</td>
                                       <td>{{$content['profile']->mobile}}</td>
                                   </tr>

                                   <tr>
                                       <td>Email</td>
                                       <td>{{$content['profile']->username}}</td>
                                   </tr>

                                   <tr>
                                       <td>Course</td>
                                       <td>{{$content['profile']->course}}</td>
                                   </tr>

                                   <tr>
                                       <td>Branch</td>
                                       <td>{{$content['profile']->branch}}</td>
                                   </tr>

                                   <tr>
                                       <td>session</td>
                                       <td>{{$content['profile']->session}}</td>
                                   </tr>

                                   <tr>
                                       <td>Country</td>
                                       <td class="cap">{{$content['profile']->country}}</td>
                                   </tr>

                                   <tr>
                                       <td>State</td>
                                       <td class="cap">{{$content['profile']->state}}</td>
                                   </tr>

                                   <tr>
                                       <td>City</td>
                                       <td class="cap">{{$content['profile']->city}}</td>
                                   </tr>

                                   <tr>
                                       <td>Belong State</td>
                                       <td class="cap">{{$content['profile']->belong_state}}</td>
                                   </tr>

                                   <tr>
                                       <td>Permanent Address</td>
                                       <td>{{$content['profile']->residence_address}}</td>
                                   </tr>

                                   <tr>
                                       <td>Current Address</td>
                                       <td>{{$content['profile']->current_address}}</td>
                                   </tr>

                               </table>

              </div>
              <div class="tab-pane" id="alumni">

                   <table class="table-responsive table table-borderless ">

                                   <tr>
                                       <td class="col-md-3">About Myself</td>
                                       <td class="cap">{{$content['alumni']->about}}</td>
                                   </tr>

                                   <tr>
                                       <td>Btech Course</td>
                                       <td class="cap">{{$content['alumni']->btech_course}}</td>
                                   </tr>

                                   <tr>
                                       <td>Btech Marks</td>
                                       <td class="cap">{{$content['alumni']->btech_marks}}</td>
                                   </tr>

                                   <tr>
                                       <td>Session</td>
                                       <td class="cap">{{$content['alumni']->session}}</td>
                                   </tr>

                                   <tr>
                                       <td>Passout Year</td>
                                       <td class="cap">{{$content['alumni']->passout}}</td>
                                   </tr>


                                   <tr>
                                       <td>Skills</td>
                                       <td class="cap">{{$content['alumni']->skill}}</td>
                                   </tr>

                                   <tr>
                                       <td>Preset Job</td>
                                       <td>{{$content['alumni']->preset_job}}</td>
                                   </tr>

                                   <tr>
                                        <td> First Job </td>
                                        <td> {{$content['alumni']->first_job}} </td>
                                   </tr>

                                   <tr>
                                      <td> Second Job </td>
                                      <td> {{$content['alumni']->second_job}} </td>
                                   </tr>

                                   <tr>
                                      <td> Third Job </td>
                                      <td> {{$content['alumni']->third_job}} </td>
                                   </tr>

                                   <tr>
                                       <td>Job Experience</td>
                                       <td>{{$content['alumni']->job_experience}}</td>
                                   </tr>

                                 <!--   <tr>
                                       <td>Matric School</td>
                                       <td>{{$content['alumni']->matric_school}}</td>
                                   </tr>

                                   <tr>
                                       <td>Martic Marks</td>
                                       <td>{{$content['alumni']->matric_marks}}</td>
                                   </tr>

                                   <tr>
                                       <td>Secondary School</td>
                                       <td>{{$content['alumni']->sec_school}}</td>
                                   </tr>

                                   <tr>
                                       <td>Secondary School Marks</td>
                                       <td>{{$content['alumni']->sec_marks}}</td>
                                   </tr> -->

                                   <tr>
                                       <td>Diploma</td>
                                       <td class="cap">{{$content['alumni']->diploma}}</td>
                                   </tr>

                                   <tr>
                                       <td>Diploma College</td>
                                       <td class="cap">{{$content['alumni']->diploma_col}}</td>
                                   </tr>

                                   <tr>
                                       <td>Diploma Marks</td>
                                       <td class="cap">{{$content['alumni']->diploma_marks}}</td>
                                   </tr>

                                   <tr>
                                       <td>Other Qualification</td>
                                       <td>{{$content['alumni']->other_qualification}}</td>
                                   </tr>


                               </table>

              </div>
            </div>


        </div>
    </div>
</section>
</body>
</html>
