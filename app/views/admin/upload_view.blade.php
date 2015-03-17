<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.links.header_link')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $('#delete').click(function()
            {
                return confirm('All video under the album will be deleted....');
            });
        });
    </script>
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

    <div class="mainpanel">@include('admin.links.logout')
        
        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i>Upload List</span></h2>
            <div style="float:left;"><span><?php echo $content->links();?></span></div>
        </div>


        <div class="contentpanel">
            <table class="table table-bordered mb30">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>link</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($content as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{public_path().'\upload\\'.$data->file}}</td>
                    <td>{{date('d-M-Y',strtotime($data->uploaded_date))}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{URL::to('admin/upload_del/'.$data->id)}}"class="btn btn-danger">Delete</a>
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
