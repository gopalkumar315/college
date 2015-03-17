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
            <h2><i class="fa fa-home"></i> About RIET</h2>

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

                    <h4 class="panel-title">RIET Staff</h4>

                </div>
                <div class="panel-body panel-body-nopadding">
                    <form class="form-horizontal form-bordered" method="post" action="staff_content">
                        @if(Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select Staff</label>
                            <div class="col-sm-6">
                                <select name="course" class="form-control">
                                    <option value=""></option>
                                    @foreach($i=0;$i<$count;$++)
                                        <option value="{{$db->id}}">{{$db->course}}</option>
                                    @endforeach
                                </select>
                                <span class="help-block" style="color:red;">{{$errors->first('course')}}  </span>
                            </div>
                        </div>



                        <div class="form-group">

                            <label class="col-sm-2 control-label">About Staff</label>
                            <div class="col-sm-10">
                                <textarea id="redactor" cols="30" rows="30" style="min-height: 200px;"  name="description"></textarea>
                                <span class="help-block" style="color:red;">{{$errors->first('description')}}  </span>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6">
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
                imageUpload: 'redactorupload'

            });
        }
    );
</script>
</body>
</html>
