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
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> Alumni Verification Request </h2>
        </div>


        <div class="contentpanel">

            @if(Session::get('message'))
                <div class="alert alert-info">{{Session::get('message')}}</div>
             @endif

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive">

                        <tr>
                            <th>Photo</th>
                            <th>Rollno</th>
                            <th>Univerty Roll no</th>
                            <th>Course</th>
                            <th>Trade</th>
                            <th>Session</th>
                            <th>Action</th>
                        </tr>
                        @foreach($content as $data)
                        <tr>
                            <td><img src="{{asset('user/profile_img/'.$data->photo)}}" alt="" width="100"/></td>
                            <td>{{$data->class_roll_no}}</td>
                            <td>{{$data->board_roll_no}}</td>
                            <td>{{$data->course}}</td>
                            <td>{{$data->branch}}</td>
                            <td>{{$data->session}}</td>
                            <td><a href="{{'alumni_verify_done/'.$data->u_id}}" class="btn btn-success">Verify</a> <a href="{{'alumni_del/'.$data->u_id}}" class="btn btn-danger">Delete</a> </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
</body>
</html>
