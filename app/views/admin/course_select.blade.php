<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')

    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#btn1').click(function() {
                $val=$('#degree').val();
                if($val.length==0)
                {
                    alert('select the Course Degree');
                }
                else
                {
                    $('#btn1').attr("href",'course_selected_view/'+$val);
                }
            });
        });
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
            @if(Session::has('status'))
            <h3 style="color:red;">{{Session::get('status')}}</h3>
            @endif

          
        </div>



        <div class="contentpanel">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title">Course View</h4>

                </div>
                <div class="panel-body panel-body-nopadding">


                        <br>
                        <div class="form-group">
                            <label class="col-sm-3  control-label" style="text-align:right;">Select Degree</label>
                            <div class="col-sm-6">
                                <select name="degree" id="degree" class="form-control">
                                    <option value=""></option>
                                    <option value="1">Under Graduate</option>
                                    <option value="2">Under Post Graduate</option>
                                </select>
                                <span class="help-block" style="color:red;">{{$errors->first('degree')}}  </span>

                            </div>
                        </div>


                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <a href="" id="btn1" class="btn btn-success"> View Course </a>&nbsp;
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div><!-- panel-footer -->






                </div><!-- panel-body -->



            </div>
        </div>
    </div>
</section>
</body>
</html>
