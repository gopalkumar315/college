<!--//menu-->
<div class="row-fluid">
    <div class="col-xl-12">
        <nav class="navbar-default" role="navigation">
            <div class="navbar-header nav_res ">
                <button type="button" class="navbar-toggle" data-toggle="collapse"  data-target="#example-navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse  menu" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{URL::to('user/profile')}}">PROFILE</a></li>
                    <li><a href="{{URL::to('user/alumni')}}">ALUMNI</a></li>                    
                    <li><a href="{{URL::to('user/user_logout')}}">LOGOUT</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--menu end-->
