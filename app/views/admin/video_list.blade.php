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
            <h2><i class="fa fa-home"></i> Videos List</span></h2>
            <div style="float:left;"><span><?php echo $video->links();?></span></div>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Bracket</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>


        <div class="contentpanel">
            <?php $count=0;?>
            <table class="table table-bordered mb30">

                <tbody>
                <tr>
                @foreach($video as $data)
                    @if($count<3)
                        <td>
                            <h4 style="text-transform:capitalize;">{{$data->video_title}}</h4>
                            <embed width="320" height="315" src="http://www.youtube.com/v/{{$data->link}}">
                            <div class="btn-group" style="display:block;">
                                <a href="{{URL::to('admin/video_del/'.$data->id)}}"class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                        <?php $count++;?>
                    @else
                        </tr>
                               <tr>
                                <td>
                                    <h4>{{$data->video_title}}</h4>
                                        <embed width="320" height="315" src="http://www.youtube.com/v/{{$data->link}}">
                                </td>
                        <?php $count=1;?>
                    @endif
                @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>



</section>
</body>
</html>
