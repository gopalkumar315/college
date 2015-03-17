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
        <!--navigation menu-->
        @include('admin.links.nav')



    </div>

    <div class="mainpanel">
      @include('admin.links.logout')

        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> Album </h2>

        </div>


        <div class="contentpanel">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h4 class="panel-title">Album Creation Field</h4>

                </div>
                <div class="panel-body panel-body-nopadding">

                    <form class="form-horizontal form-bordered" method="post" action="upload-album">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Album Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" placeholder="Enter album name"  value="{{Input::old('name')}}" class="form-control">
                                     <span class="help-block" style="color:red;">{{$errors->first('name')}}  </span>
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
