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
            <h2><i class="fa fa-home"></i>RIET Staff</h2>

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

                    <h3 class="panel-title">
                        {{$content['course']->course}} Staff
                    </h3>
                </div>
                <div class="panel-body">
                        @foreach($content['staff'] as $db)
                            {{$db->description}}
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
