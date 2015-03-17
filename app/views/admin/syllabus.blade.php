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
            <h2><i class="fa fa-home"></i> Syllabus</h2>

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
                    <h4 class="panel-title">Syllabus Upload Fields</h4>
                    @if(Session::has('message'))
                    <span class="help-block" style="color:red;">{{Session::get('message')}}  </span>
                    @endif
                </div>

                <div class="panel-body panel-body-nopadding">
                    <form class="form-horizontal form-bordered"  enctype="multipart/form-data" method="post" action="{{URL::to('admin/syllabus_content')}}">

                        <!--Trade-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Course</label>
                            <div class="col-sm-6">
                                <select name="course" id="" class="form-control">
                                    <option value=""></option>
                                    @foreach($trade['trade'] as $data)
                                    {
                                        <option value="{{$data->course}}">{{$data->course}}</option>
                                    }
                                    @endforeach
                                </select>
                                <input type="hidden" name="degree" value="{{$trade['course_id']}}"/>
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
                            <label class="col-sm-3 control-label">Upload Syllabus</label>
                            <div class="col-sm-6">
                                <input type="file" name="file" class="form-control"/>
                                <span class="help-block" style="color:red;">{{$errors->first('file')}}  </span>
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
