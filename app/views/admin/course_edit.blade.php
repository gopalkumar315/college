
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
            <h2><i class="fa fa-home"></i> Dashboard <span>Subtitle goes here...</span></h2>

            
        </div>


        <div class="contentpanel">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title">Course Fields</h4>

                </div>
                <div class="panel-body panel-body-nopadding">

                    <form class="form-horizontal form-bordered" method="post" action="{{URL::to('admin/course_update')}}">




                        <div class="form-group">
                            <label class="col-sm-3 control-label">Enter Course Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="course" value="{{$data->course}}" placeholder="Enter the Course name"/>
                                <input type="hidden" name="id" value="{{$data->id}}"/>
                                <span class="help-block" style="color:red;">{{$errors->first('course')}}  </span>
                            </div>
                        </div>





                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea id="redactor" name="description"> {{$data->description}}    </textarea>
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
<script type="text/javascript">
    $(document).ready(
        function()
        {
            $('#redactor').redactor({
                imageUpload: '{{URL::to('admin/redactorupload')}}'

            });
        }
    );
    </script>
</body>
</html>
