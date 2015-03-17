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
            <h2><i class="fa fa-home"></i> Assignment List</h2>


            <div class="clear"></div>

        </div>


        <div class="contentpanel">

            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="#" class="panel-close">×</a>
                    <a href="#" class="minimize">−</a>
                </div><!-- panel-btns -->
                @foreach(array_slice($assignment->toArray(), 0,1 ) as $data)
                    <h5>Course :- {{$data['course']}}</h5>
                    <h5>Year :- {{$data['year']}}</h5>
                    <h5>Subject :- {{$data['subject']}}</h5>
                    <h5>Semester :- {{$data['semester']}}</h5>

                @endforeach

            </div>

            <table class="table table-bordered mb30">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Assignment </th>

                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($assignment as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->assignment_no}}</td>
                    <td>
                        <div class="btn-group">

                            <a href="{{asset('assignment/'.$data->file)}}"class="btn btn-success">Download</a>

                            <a href="assignment_del/{{$data->id}}"class="btn btn-danger">Delete</a>

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
