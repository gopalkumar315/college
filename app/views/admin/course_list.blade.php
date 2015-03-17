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
            <h2><i class="fa fa-home"></i>
            {{$message}} Courses


            </h2>

            <div class="clear"></div>
            
        </div>


        <div class="contentpanel">

            <table class="table table-bordered mb30">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>

                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data['course'] as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->course}}</td>
                    <td>{{strip_tags(substr($data->description,0,25))}}.....</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{URL::to('admin/course_show/'.$data->id)}}"class="btn btn-success">View</a>
                            <a href="{{URL::to('admin/course_edit/'.$data->id)}}"class="btn btn-default">Edit</a>
                            <a href="{{URL::to('admin/course_del/'.$data->id)}}"class="btn btn-danger">Delete</a>
                        </div></td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</section>
</body>
</html>
