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
                   <div class="profile_edit">
                       <h3>{{$content['profile']->fname}} {{$content['profile']->lname}}</h3>

<!--                       <img id="uploadPreview1" src="no_image.jpg" /><br />-->
<!--                       <input id="uploadImage1" type="file" name="p1" onchange="PreviewImage(1);" />-->
                       <div class="col-md-6 col-md-offset-3" >
                           <div class="profile_form">

                               @if(!empty($message))
                                    <div class="p_msg">{{$message['message']}}</div>
                               @endif
                               <form action="profile_data" method="post" enctype="multipart/form-data">
                               <table class="table table-responsive table-borderless">
                                   <tr>
                                       <td></td>
                                       <td> <img id="uploadPreview1" class="profile_img" src="{{asset('user/profile_img/'.$content['profile']->photo)}} " /><br /></td>
                                   </tr>

                                   <tr>
                                       <td>Profile Photo</td>
                                       <td>
                                           <input id="uploadImage1" type="file" name="file"  class="form-control" onchange="PreviewImage(1);" />
                                           <span>{{$errors->first('file')}}</span>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td>Class Roll no</td>
                                       <td><input type="text" name="croll" value="{{Input::old('croll',$content['profile']->class_roll_no)}}" placeholder="00/CSE/2012" class="txt_box form-control"/>
                                           <span>{{$errors->first('croll')}}</span>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td>Board Roll no</td>
                                       <td><input type="text" name="broll" value="{{Input::old('broll',$content['profile']->board_roll_no)}}" class="txt_box form-control"/>
                                           <span>{{$errors->first('broll')}}</span>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td>Date Of Birth</td>
                                       <td><input type="text" name="dob" placeholder="DD-MM-YYYY" value="{{Input::old('dob',$content['profile']->dob)}}" class="txt_box form-control"/>
                                           <span>{{$errors->first('dob') }}</span>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td>Mobile Number</td>
                                       <td><input type="text" name="mobile" value="{{Input::old('mobile',$content['profile']->mobile)}}" class="txt_box form-control"/>
                                           <span>{{$errors->first('mobile')}}</span>
                                       </td>
                                   </tr>




                                   <tr>
                                      <td>Father name</td>
                                       <td> <input type="text" name="father" value="{{Input::old('father',$content['profile']->father)}}" class="txt_box  form-control"/>
                                           <span>{{$errors->first('father')}}</span></td>
                                   </tr>

                                   <tr>
                                       <td> Course  </td>
                                       <td>
                                           <select name="course" class="select  form-control" id="">
                                               <option value="{{Input::old('course',$content['profile']->course)}}">{{Input::old('course',$content['profile']->course)}}</option>
                                               @foreach($content['course'] as $db)
                                                    @if($db->parent==0)
                                                        <option value="{{$db->course}}">{{$db->course}}</option>
                                                    @endif
                                               @endforeach
                                           </select>
                                           <span>{{$errors->first('course')}}</span>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Branch</td>
                                       <td>
                                           <select name="branch" class="select  form-control" id="">
                                               <option value="{{Input::old('branch',$content['profile']->branch)}}">{{Input::old('branch',$content['profile']->branch)}}</option>
                                               @foreach($content['course'] as $db)
                                               @if($db->parent!=0)
                                               <option value="{{$db->course}}">{{$db->course}}</option>
                                               @endif
                                               @endforeach
                                           </select>
                                           <span>{{$errors->first('branch')}}</span>
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
                                       <td>Country</td>
                                       <td>
                                           <input type="text" name="country"  value="{{Input::old('country',$content['profile']->country)}}" class="txt_box  form-control"/>
                                           <span>{{$errors->first('country')}}</span>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>State</td>
                                       <td>
                                           <input type="text" name="state" value="{{Input::old('state',$content['profile']->state)}}" class="txt_box  form-control"/>
                                           <span>{{$errors->first('state')}}</span>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td>City</td>
                                       <td>
                                           <input type="text" name="city" value="{{Input::old('city',$content['profile']->city)}}" class="txt_box  form-control"/>
                                           <span>{{$errors->first('city')}}</span>

                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Belonging State</td>
                                       <td>
                                           <input type="text" name="belong_state" value="{{Input::old('belong_state',$content['profile']->belong_state)}}" class="txt_box  form-control"/>
                                           <span>{{$errors->first('belong_state')}}</span>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td>Permanent Address</td>
                                       <td>
                                           <textarea name="residence_address" id="" class="txt_area form-control">{{Input::old('residence_address',$content['profile']->residence_address)}}</textarea>
                                           <span>{{$errors->first('residence_address')}}</span>
                                       </td>
                                   </tr>

                                   <tr>
                                       <td>Current Address</td>
                                       <td>
                                           <textarea name="current_address" id="" class="txt_area form-control">{{Input::old('current_address',$content['profile']->current_address)}}</textarea>
                                           <span>{{$errors->first('current_address')}}</span>
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
        <script type="text/javascript">
            function PreviewImage(no) {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
                };
            }
        </script>
    </body>
</html>
