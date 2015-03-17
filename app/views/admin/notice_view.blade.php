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
            <h2><i class="fa fa-home"></i>Notice</h2>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Bracket</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>


        <div class="contentpanel">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="panel-btns">
                        <a href="#" class="panel-close">×</a>
                        <a href="#" class="minimize">−</a>
                    </div><!-- panel-btns -->
                    <h3 class="panel-title">{{$data->title;}}</h3>
                    <h5 style="color:#fff; font-size: 13px; italic small-caps bold 44px Georgia, sans-serif;">{{date('d-M-Y',strtotime($data->notice_date))}}</h5>
                </div>
                <div class="panel-body">
                    {{$data->description}}
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
