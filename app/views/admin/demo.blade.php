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
        @include('admin.links.nav')
    </div>

    <div class="mainpanel">
        @include('admin.links.logout')
        <!-- headerbar -->
        <div class="contentpanel">


        </div>
    </div>
</section>
</body>
</html>
