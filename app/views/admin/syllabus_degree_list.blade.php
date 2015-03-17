<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')
    <script>
        $(document).ready(function(){
            $('#submit').click(function(){
                $val=$( "#myselect" ).val();
                if($val=='undefined'||$val=='')
                {
                    alert('Select Course');
                }
                else
                {
                    $('#submit').attr("href",'syllabus_degree_view/'+$val);
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
                    <h4 class="panel-title">Syllabus View</h4>
                </div>

                <div class="panel-body panel-body-nopadding">

                        <!--Trade--><br>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Course</label>
                            <div class="col-sm-6">
                                <select id="myselect" name="course" id="" class="form-control">
                                    <option value=""></option>
                                    @foreach($degree as $data)
                                    {
                                        <option value="{{$data->id}}">{{$data->course}}</option>
                                    }
                                    @endforeach
                                </select>
                                <span class="help-block" style="color:red;">{{$errors->first('course')}}  </span>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <a href="" id="submit" class="btn btn-primary">Submit</a>
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
