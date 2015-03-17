<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')
</head>

<body>
<section>
    <div class="leftpanel">
        <div class="logopanel">
            <h1><span>[</span>RIET Panel<span>]</span></h1>
        </div>
        <!-- logopanel -->

        @include('admin.links.nav');
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')
        
        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> Subject</h2>
            <!--Data Inserted Success messsage     -->
            {{$success=Session::get('success')}}

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Bracket</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>


        <div class="contentpanel">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Subject Fields</h4>
                </div>

                <div class="panel-body panel-body-nopadding">
                    <form class="form-horizontal form-bordered"  enctype="multipart/form-data" method="post" action="subject_content">

                        <!--Trade-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Course</label>
                            <div class="col-sm-6">
                                <select name="course" id="" class="form-control">
                                    <option value=""></option>
                                    @foreach($trade as $data)
                                    {
                                      <option value="{{$data->course}}">{{$data->course}}</option>
                                    }
                                    @endforeach
                                </select>
                                <span class="help-block" style="color:red;">{{$errors->first('course')}}  </span>
                            </div>
                        </div>

                        <!--year-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Year</label>
                            <div class="col-sm-6">

                                <select name="year" id="" class="form-control">
                                    <option value=""></option>
                                    @for($i=2010;$i<=2050;$i++)
                                    { <option value="{{$i}}">{{$i}}</option> }
                                    @endfor
                                </select>

                                <span class="help-block" style="color:red;">{{$errors->first('year')}}  </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Semester</label>
                            <div class="col-sm-6">

                                <select  id="" name="semester" class="form-control">
                                    <option value=""></option>
                                    <option value="First">First</option>
                                    <option value="Second">Second</option>
                                    <option value="Third">Third</option>
                                    <option value="Fourth">Fourth</option>
                                    <option value="Fifth">Fifth</option>
                                    <option value="Sixth">Sixth</option>
                                    <option value="Seventh">Seventh</option>
                                    <option value="Eight">Eight</option>
                                </select>

                                <span class="help-block" style="color:red;">{{$errors->first('semester')}}  </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Enter Subject Name</label>
                            <div class="col-sm-6">

                                <input type="text" class="form-control" name="subject" placeholder="enter subject name"/>
                                <span class="help-block" style="color:red;">{{$errors->first('subject')}}  </span>
                            </div>
                        </div>


                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button class="btn btn-primary">Submit</button>&nbsp;
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div><!-- panel-footer -->
                    </form>
                </div><!-- panel-body -->

            </div>
        </div>
    </div>
</section>
</body>
</html>
