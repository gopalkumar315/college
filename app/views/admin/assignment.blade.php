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

        @include('admin.links.nav')
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')
        
        <!-- headerbar -->



        <div class="contentpanel">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Assignment Upload Fields</h4>

                    @if(Session::has('message'))
                        <div class="alert alert-info">{{Session::get('message')}}</div>
                    @endif
                </div>

                <div class="panel-body panel-body-nopadding">
                    <form class="form-horizontal form-bordered"  enctype="multipart/form-data" method="post" action="assignment_content">

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

                        <!--Subject-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select subject</label>
                            <div class="col-sm-6">
                                <select name="subject" id="" class="form-control">
                                    <option value=""></option>
                                    @foreach($subject as $data)
                                    {
                                    <option value="{{$data->subject}}">{{$data->subject}}</option>
                                    }
                                    @endforeach
                                </select>
                                <span class="help-block" style="color:red;">{{$errors->first('subject')}}  </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Upload Syllabus</label>
                            <div class="col-sm-6">
                                <input type="file" name="file" class="form-control"/>
                                <span class="help-block" style="color:red;">{{$errors->first('file')}}  </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Submission Date</label>
                            <div class="col-sm-6">
                                <input type="date" name="submission" style="height:40px;" class="form-control"/>
                                <span class="help-block" style="color:red;">{{$errors->first('date')}}  </span>
                            </div>
                        </div>





                        <div class="form-group">
                            <label class="col-sm-3 control-label">Given By</label>
                            <div class="col-sm-6">
                                <input type="text" name="signature" placeholder="signature" style="height:40px;" class="form-control"/>
                                <span class="help-block" style="color:red;">{{$errors->first('signature')}}  </span>
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
