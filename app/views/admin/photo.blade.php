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
        @include('admin.links.nav');
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')
        
        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> Upload Photo </h2>

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

                    <h4 class="panel-title">Photo Fields</h4>

                </div>
                <div class="panel-body panel-body-nopadding">

                    <form class="form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="upload_photo">
                        <div class="form-group">
                            <label class="col-sm-3  control-label" style="text-align:right;">Select Album</label>
                            <div class="col-sm-6">
                                <select name="album" id="album" class="form-control">
                                    <option></option>
                                   @foreach($content as $data)
                                    {
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    }
                                    @endforeach
                                </select>
                                <span class="help-block" style="color:red;">{{$errors->first('album')}} </span>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Upload Photos</label>
                            <div class="col-sm-6">
                                <input  name="file[]" type="file" multiple  placeholder="Enter album name"   class="form-control">
                                <span class="help-block" style="color:red;">{{$errors->first('file')}}  </span>
                            </div>
                        </div>




                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
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
