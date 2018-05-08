<ul class="nav navbar-top-links navbar-right">
  <li class="user-tag">
      <a href="{{ route('dashboard') }}" class=" user-photo">
            @if(isset(\Auth::user()->photo->path))
            <img src="{!!url('app_files/'.\Auth::user()->photo->path) !!}" class="img-circle" width="30" height="30"/>
            @endif
            
           {{ \Auth::user()->name }}
           <small>({{ ucfirst(\Auth::user()->roles[0]->name) }})</small>
      </a>
  </li>

  
  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-notification="link" href="#" data-notificationcounthref="#"/>
            <i class="fa fa-bell fa-fw"></i>
            <sup class="notification-counter" data-notification="counter" style="display:none;"></sup>
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages notification-panel" data-notification="panel">
            <li>
                <a href="#">
                    <div>
                        <strong>John Smith</strong>
                        <span class="pull-right text-muted">
                            <em>Yesterday</em>
                        </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <strong>John Smith</strong>
                        <span class="pull-right text-muted">
                            <em>Yesterday</em>
                        </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
            </li>
        </ul>
        <!-- /.dropdown-messages -->
    </li>
    <!-- /.dropdown -->
  

  <li>
    <a class="dropdown-toggle bs-tooltip" data-toggle="dropdown" href="#" title="Settings" data-placement="bottom">
          <i class="fa fa-gears fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-messages">
          <li>
              <a href="{{ route('staffAccountSettings') }}">
                  <div>
                      Account Settings
                  </div>
              </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
              
          </li>
      </ul>
  </li>
  
</ul>