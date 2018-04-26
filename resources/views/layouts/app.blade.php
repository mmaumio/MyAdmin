<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- vendor css -->
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('css/slim.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body data-gr-c-s-loaded="true">
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="{{ url('/') }}">slim<span>.</span></a></h2>

          <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
          </div><!-- search-box -->
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          <div class="dropdown dropdown-a">
            <a href="http://themepixels.me/slim/template/index.html" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bolt-outline"></i>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Activity Logs</h6>
                <div>
                  <a href="http://themepixels.me/slim/template/index.html">Filter List</a>
                  <a href="http://themepixels.me/slim/template/index.html">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-activity-list">
                <div class="activity-label">Today, December 13, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">10:15am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Purchased christmas sale cloud storage</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">9:48am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-danger"></span></div>
                    <div class="col-8">Login failure</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">7:29am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-warning"></span></div>
                    <div class="col-8">(D:) Storage almost full</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">3:21am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">1 item sold <strong>Christmas bundle</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-label">Yesterday, December 12, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">6:57am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Earn new badge <strong>Elite Author</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              </div><!-- dropdown-activity-list -->
              <div class="dropdown-list-footer">
                <a href="http://themepixels.me/slim/template/page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-b">
            <a href="http://themepixels.me/slim/template/index.html" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline"></i>
              <span class="indicator"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Notifications</h6>
                <div>
                  <a href="http://themepixels.me/slim/template/index.html">Mark All as Read</a>
                  <a href="http://themepixels.me/slim/template/index.html">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-list">
                <!-- loop starts here -->
                <a href="http://themepixels.me/slim/template/index.html" class="dropdown-link">
                  <div class="media">
                    <img src="./Slim Responsive Bootstrap 4 Admin Template_files/img8.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="http://themepixels.me/slim/template/index.html" class="dropdown-link">
                  <div class="media">
                    <img src="./Slim Responsive Bootstrap 4 Admin Template_files/img9.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="http://themepixels.me/slim/template/index.html" class="dropdown-link read">
                  <div class="media">
                    <img src="./Slim Responsive Bootstrap 4 Admin Template_files/img10.jpg" alt="">
                    <div class="media-body">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="http://themepixels.me/slim/template/index.html" class="dropdown-link read">
                  <div class="media">
                    <img src="./Slim Responsive Bootstrap 4 Admin Template_files/img2.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-list-footer">
                  <a href="http://themepixels.me/slim/template/page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-c">
            <a href="http://themepixels.me/slim/template/index.html#" class="logged-user" data-toggle="dropdown">
                <img src="./Slim Responsive Bootstrap 4 Admin Template_files/img1.jpg" alt="">
                @if (Auth::check())
                    <span>{{ Auth::user()->name }}</span>
                    <i class="fa fa-angle-down"></i>
                @endif    
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="http://themepixels.me/slim/template/page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="http://themepixels.me/slim/template/page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="http://themepixels.me/slim/template/page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                <a href="http://themepixels.me/slim/template/page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                <a href="http://themepixels.me/slim/template/page-signin.html" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item with-sub active">
            <a class="nav-link" href="http://themepixels.me/slim/template/index.html#">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="http://themepixels.me/slim/template/index.html">Dashboard 01</a></li>
                <li><a href="http://themepixels.me/slim/template/index2.html">Dashboard 02</a></li>
                <li><a href="http://themepixels.me/slim/template/index3.html">Dashboard 03</a></li>
                <li><a href="http://themepixels.me/slim/template/index4.html">Dashboard 04</a></li>
                <li><a href="http://themepixels.me/slim/template/index5.html">Dashboard 05</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>
          <li class="nav-item">
            @if (Auth::check())
                <a class="nav-link" href="{{ route('package.index') }}">
                    <i class="icon ion-ios-filing-outline"></i>
                    {{ __('Package') }}
                </a>
            @else 
                <a class="nav-link" href="{{ route('login') }}">
                    <i class="icon ion-ios-filing-outline"></i>
                    {{ __('Login') }}
                </a>
            @endif    
          </li>
          <li class="nav-item">
            @if (Auth::check())
                <a class="nav-link" href="{{ route('serviceuser.index') }}">
                    <i class="icon ion-ios-book-outline"></i>
                    {{ __('Users') }}
                </a>
            @else     
                <a class="nav-link" href="{{ route('register') }}">
                    <i class="icon ion-ios-book-outline"></i>
                    {{ __('Add Owner') }}
                </a>
            @endif    
          </li>

          @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('nass.index') }}">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Nas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('role.index') }}">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Role</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('location.index') }}">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Location</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.edit') }}">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Edit Profile</span>
              <span class="square-8"></span>
            </a>
          </li>
          <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
          @endif
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->

        <main class="py-4">
            @yield('content')
        </main>
    <div class="slim-footer">
      <div class="container">
        <p>Copyright 2018 © All Rights Reserved. Slim Dashboard Template</p>
        <p>Designed by: <a href="http://themepixels.me/slim/template/index.html">ThemePixels</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/chartlist.js') }}"></script>
    <script src="{{ asset('js/d3.js') }}"></script>
    <script src="{{ asset('js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/slim.js') }}"></script>
  
<div class="template-options-wrapper">
  <a href="http://themepixels.me/slim/template/index.html" class="template-options-btn">
    <i class="icon ion-ios-gear"></i>
  </a>

  <h1 class="template-option-logo">slim.</h1>

  <h6 class="template-options-title">Template Settings</h6>

  <div class="option-row-wrapper">
    <label class="slim-options-label">Skin Mode:</label>
    <div>
      <div class="skin-mode-item">
        <a href="http://themepixels.me/slim/template/index.html" class="skin-light-mode"></a>
      </div>
      <div class="skin-mode-item">
        <a href="http://themepixels.me/slim/template/index.html" class="skin-dark-mode"></a>
      </div><!-- skin-mode-item -->
    </div>
  </div><!-- option-row-wrapper -->
  <div class="option-row-wrapper">
    <label class="slim-options-label">Direction:</label>
    <div>
      <label class="rdiobox">
        <input name="slim-direction" class="slim-direction" type="radio" value="ltr">
        <span>LTR</span>
      </label>
      <label class="rdiobox">
        <input name="slim-direction" class="slim-direction" type="radio" value="rtl">
        <span>RTL</span>
      </label>
    </div>
  </div><!-- option-row-wrapper -->
  <div class="option-row-wrapper">
    <label class="slim-options-label">Sticky Header:</label>
    <div>
      <label class="rdiobox">
        <input name="sticky-header" class="sticky-header" type="radio" value="yes">
        <span>Yes</span>
      </label>
      <label class="rdiobox">
        <input name="sticky-header" class="sticky-header" type="radio" value="no">
        <span>No</span>
      </label>
    </div>
  </div><!-- option-row-wrapper -->
  <div class="option-row-wrapper">
    <label class="slim-options-label">Page Wide:</label>
    <div>
      <label class="rdiobox">
        <input name="full-width" class="full-width" type="radio" value="yes">
        <span>Yes</span>
      </label>
      <label class="rdiobox">
        <input name="full-width" class="full-width" type="radio" value="no">
        <span>No</span>
      </label>
    </div>
  </div><!-- option-row-wrapper -->

  <h6 class="template-options-title mg-t-50">Header Skin Variant</h6>
  <div class="header-skin-group">
    <div class="header-skin-item header-skin-default">
      <label class="rdiobox">
        <input name="header-skin" class="header-skin" type="radio" value="default">
        <span></span>
      </label>
      <div class="header-skin-body">
        <div class="row no-gutters">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
        </div><!-- row -->
      </div><!-- header-skin-body -->
    </div><!-- header-skin-item -->
    <div class="header-skin-item header-skin-one">
      <label class="rdiobox">
        <input name="header-skin" class="header-skin" type="radio" value="header-one">
        <span></span>
      </label>
      <div class="header-skin-body">
        <div class="row no-gutters">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
        </div><!-- row -->
      </div><!-- header-skin-body -->
    </div><!-- header-skin-item -->
    <div class="header-skin-item header-skin-two">
      <label class="rdiobox">
        <input name="header-skin" class="header-skin" type="radio" value="header-two">
        <span></span>
      </label>
      <div class="header-skin-body">
        <div class="row no-gutters">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
        </div><!-- row -->
      </div><!-- header-skin-body -->
    </div><!-- header-skin-item -->
  </div><!-- header-skin-group -->
</div><!-- template-options-wrapper -->
</body>
</html>