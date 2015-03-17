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

                    <h4 class="panel-title">Album Creation Field</h4>
                    <h5>
                        @if(Session::has('success'))
                          <div class="alert alert-success">
                            {{ Session::get('success')}}
                          </div>
                        @endif
                    </h5>

                </div>
                <div class="panel-body panel-body-nopadding">

                    <form class="form-horizontal form-bordered" method="post" action="video_content">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Video Album</label>
                            <div class="col-sm-6">
                                <select name="album" id="" class="form-control">
                                    <option value=""></option>
                                    @foreach($album as $data)
                                    {
                                        <option value="{{$data->id}}">{{$data->album_title}}</option>
                                    }
                                    @endforeach
                                </select>
                                <span class="help-block" style="color:red;">{{$errors->first('album')}}  </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Enter Video Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" placeholder="Enter Video Title"  value="{{Input::old('title')}}" class="form-control">
                                <span class="help-block" style="color:red;">{{$errors->first('title')}}  </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Enter Video Url</label>
                            <div class="col-sm-6">
                                <input type="text" name="link" placeholder="Enter Video Link "  value="{{Input::old('link')}}" class="form-control">
                                     <span class="help-block" style="color:red;">{{$errors->first('link')}}  </span>
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
