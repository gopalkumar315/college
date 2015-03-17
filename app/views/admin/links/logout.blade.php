
<div class="headerbar">
  <a class="menutoggle"><i class="fa fa-bars"></i></a>
  <div class="header-right">
    <ul class="headermenu">
      <li>
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <img src="images/photos/loggeduser.png" alt="">
            Admin
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
              <li><a href="{{URL::to('admin/logout')}}"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div><!-- header-right -->
</div>
