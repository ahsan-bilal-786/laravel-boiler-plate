<div class="navbar-default sidebar" role="navigation" id="main-sidebar">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-truck fa-fw"></i> Posts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{  route('posts.index') }}">All Posts</a>
                    </li>
                    <li>
                        <a href="{{  route('posts.create') }}">Add New</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> System Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>    
                        <a href="{{ route('generalSettings') }}">General</a>
                    </li>
                </ul>
            </li>
            
			<li>
                <a href="{{ route('staffAccountSettings') }}"><i class="fa fa-gears fa-fw"></i> Settings</a>
            </li>
            <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out fa-fw"></i> Logout
            </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
    <!-- /.navbar-static-side -->