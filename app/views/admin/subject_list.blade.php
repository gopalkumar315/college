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
            <h2><i class="fa fa-home"></i> Subject List</span></h2>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Bracket</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>


        <div class="contentpanel">

            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="#" class="panel-close">×</a>
                    <a href="#" class="minimize">−</a>
                </div><!-- panel-btns -->
                <h5 >Course :-{{$input['course']}}</h5>
                <h5>Year:-{{$input['year']}}</h5>
                <h5 >Semester:-{{$input['semester']}}</h5>
            </div>
            <table class="table table-bordered mb30">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($content as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->subject}}</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{URL::to('admin/subject_del/'.$data->id)}}"class="btn btn-danger">Delete</a>
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
