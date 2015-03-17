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
            <h2><i class="fa fa-home"></i> Search Alumni </h2>
        </div>


        <div class="contentpanel">

            <div class="row">
                <div class="col-md-12">
                    <form action="alumni_search_content" method="post">
                    <table class="table">
                        <tr>
                            <th>Enter Input</th>
                            <th>Search By</th>
                            <th>Action</th>
                            <th>Total Found</th>
                        </tr>

                        <tr>
                            <td>
                                <input type="search" name="search" class="form-control" value="{{Input::old('search')}}" placeholder="Enter Input"/>
                                <span>{{$errors->first('search')}}</span>
                            </td>

                            <td>

                                <select name="search_by" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="board_roll_no">University Rollno</option>
                                    <option value="city">City</option>
                                    <option value="class_roll_no">Class Roll no</option>

                                </select>
                                <span>{{$errors->first('search_by')}}</span>
                            </td>

                            <td>
                                <input type="submit" value="Search" class="btn btn-primary"/>


                            </td>
                            <td>
                             {{$content['count']}}
                            </td>
                        </tr>

                        </form>
                    </table>
                </div>

            </div>

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

                        @foreach($content['profile'] as $data)
                        <tr>
                            <td><img src="{{asset('user/profile_img/'.$data->photo)}}" alt="" width="100"/></td>
                            <td>{{$data->class_roll_no}}</td>
                            <td>{{$data->board_roll_no}}</td>
                            <td>{{$data->course}}</td>
                            <td>{{$data->branch}}</td>
                            <td>{{$data->session}}</td>
                            <td><a href="{{URL::to('admin/profile_view/'.$data->u_id)}}" class="btn btn-success">View Profile</a> <a href="{{URL::to('admin/alumni_del/'.$data->u_id)}}" class="btn btn-danger">Delete</a> </td>
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
