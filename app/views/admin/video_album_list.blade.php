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

        @include('admin.links.nav');
    </div>

    <div class="mainpanel">
      @include('admin.links.logout')
        
        <!-- headerbar -->
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> Video Album List</span></h2>
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
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($content as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->album_title}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{URL::to('admin/video_list/'.$data->id)}}"class="btn btn-success">View</a>
                            <a href="{{URL::to('admin/video_album_del/'.$data->id)}}"class="btn btn-danger" id="delete">Delete</a>
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
