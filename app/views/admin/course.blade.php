<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')
    <script type="text/javascript">
        $(document).ready(
            function()
            {
                $('#redactor').redactor({

                });
            }
        );
    </script>
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
            <h2><i class="fa fa-home"></i> Dashboard <span>Subtitle goes here...</span></h2>

          
        </div>


        <div class="contentpanel">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title">Course Fields</h4>

                </div>
                <div class="panel-body panel-body-nopadding">

                    <form class="form-horizontal form-bordered" method="post" action="course_content">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Degree</label>
                            <div class="col-sm-6">
                                <select name="degree" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="1">Under Graduate</option>
                                    <option value="2">Under Post Graduate</option>
                                </select>
                                <span class="help-block" style="color:red;">{{$errors->first('degree')}}  </span>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Enter Course Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="course" value="{{Input::old('course')}}" placeholder="Enter the Course name"/>
                                <span class="help-block" style="color:red;">{{$errors->first('course')}}  </span>

                            </div>
                        </div>





                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea id="redactor" name="description">{{Input::old('description')}}    </textarea>
                                <span class="help-block" style="color:red;">{{$errors->first('description')}}  </span>
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
