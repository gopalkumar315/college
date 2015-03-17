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
            <h2><i class="fa fa-home"></i>Course Syllabus List</span></h2>
            <div style="float:left;"><span><?php echo $content->links();?></span></div>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Bracket</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>


        <div class="contentpanel">
            <table class="table table-bordered mb30">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Course</th>
                    <th>year</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($content as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->course}}</td>
                    <td>{{$data->year}}</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{asset('syllabus/'.$data->file)}}"class="btn btn-success">Download</a>
                            <a href="{{URL::to('admin/syllabus_del/'.$data->id)}}"class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>






        </div>
    </div>



</section>
</body>
</html>
