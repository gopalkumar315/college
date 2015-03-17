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
            <h2><i class="fa fa-home"></i> Event List</h2>
            <div style="float:left;"><span><?php echo $content->links();?></span></div>


            <div class="clear"></div>

        </div>


        <div class="contentpanel">

            <table class="table table-bordered mb30">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>updation</th>
                </tr>
                </thead>
                <tbody>

                @foreach($content as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{strip_tags(substr($data->description,0,25))}}</td>
                    <td>{{date('d-M-Y',strtotime($data->event_date))}}</td>
                    <td>
                        <div class="btn-group">

                            <a href="event_show/{{$data->id}}"class="btn btn-success">View</a>
                            <a href="event_del/{{$data->id}}"class="btn btn-danger">Delete</a>

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
