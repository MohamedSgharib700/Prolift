<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title> RunGlob| Admin Panel </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{asset('ui-templateadmin/assets/plugins/materialize/css/materialize.min.css')}}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
        <link href="{{asset('ui-templateadmin/assets/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet">
        <link href="{{asset('ui-templateadmin/assets/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>
        <!-- Theme Styles -->
        <link href="{{asset('ui-templateadmin/assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('ui-templateadmin/assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">      
                            <span class="chapter-title"> Welcome Admin </span>
                        </div>
                         
                        <ul class="right col s9 m3 nav-right-menu">
                            <li class="hide-on-small-and-down"><a href="{{url('messages_shows')}}" data-activates="dropdown2" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">mail</i></a></li>
                         </ul>
                        <ul id="dropdown2" class="dropdown-content notifications-dropdown">
                            <li class="notificatoins-dropdown-container">
                                <ul>
                                    <li  class="notification-drop-title">  New Message </li>

                                    
                                </ul>
                            </li>
                        </ul>
                        
                        
                    </div>
                </nav>
            </header>
            <aside id="chat-sidebar" class="side-nav white">
                <div class="side-nav-wrapper">
                    <div class="col s12">
                        <ul class="tabs tab-demo" style="width: 100%;">
                            <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li>
                            <li class="tab col s3"><a href="#sidebar-more-tab">settings</a></li>
                        </ul>
                    </div>
                    <div id="sidebar-chat-tab" class="col s12 sidebar-messages right-sidebar-panel">
                        <p class="right-sidebar-heading">CHAT LIST</p>
                        <div class="chat-list">
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="{{asset('ui-templateadmin/assets/images/profile-image.png')}}" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">John Doe</p>
                                        <span class="chat-message">Hello</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="{{asset('ui-templateadmin/assets/images/profile-image-1.png')}}" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Tom Simpson</p>
                                        <span class="chat-message">How are you?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="{{asset('ui-templateadmin/assets/images/profile-image-3.jpg')}}" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Alan Grey</p>
                                        <span class="chat-message">Call me later</span></div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="{{asset('ui-templateadmin/assets/images/profile-image.png')}}" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Michael Fisher</p>
                                        <span class="chat-message">How's it going?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="{{asset('ui-templateadmin/assets/images/profile-image-1.png')}}" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Amily Lee</p>
                                        <span class="chat-message">We're good</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="{{asset('ui-templateadmin/assets/images/profile-image.png')}}" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Sandra Smith</p>
                                        <span class="chat-message">See you later!</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="{{asset('ui-templateadmin/assets/images/profile-image-3.jpg')}}" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Sandra Smith</p>
                                        <span class="chat-message">Can we meet?</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="chat-sidebar-options">
                            <a href="#" class="left"><i class="material-icons">edit</i></a>
                            <a href="#" class="right"><i class="material-icons">settings</i></a>
                        </div>
                    </div>
                    <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
                        <p class="right-sidebar-heading">SYSTEM</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Notifications</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Quick Results</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Auto Updates</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="right-sidebar-heading">ACCOUNT</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Offline Mode</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Location</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Show Offline Users</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Save History</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="chat-messages" class="side-nav white">
                <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
                <div class="messages-container">
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="{{asset('ui-templateadmin/assets/images/profile-image-1.png')}}" class="circle" alt=""></div>
                        <div class="text-wrapper">Lorem Ipsum</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="{{asset('ui-templateadmin/assets/images/profile-image-3.jpg')}}" class="circle" alt=""></div>
                        <div class="text-wrapper">Integer in faucibus diam?</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="{{asset('ui-templateadmin/assets/images/profile-image-1.png')}}" class="circle" alt=""></div>
                        <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="{{asset('ui-templateadmin/assets/images/profile-image-3.jpg')}}" class="circle" alt=""></div>
                        <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="{{asset('ui-templateadmin/assets/images/profile-image-1.png')}}" class="circle" alt=""></div>
                        <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="{{asset('ui-templateadmin/assets/images/profile-image-3.jpg')}}" class="circle" alt=""></div>
                        <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                    </div>
                </div>
                <div class="message-compose-box">
                    <div class="input-field">
                        <input placeholder="Write message" id="message_compose" type="text">
                    </div>
                </div>
            </aside>
            <aside id="slide-out" class="side-nav white fixed" >
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{asset('ui-templateadmin/assets/images/profile-image.png')}}" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>{{Auth::user()->name}}</p>
                                <span>{{Auth::user()->email}}<i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            
                            <li class="no-padding">
                                <a href="{{url('messages_shows')}}" class="waves-effect waves-grey"><i class="material-icons">drafts</i>New Message</a>
                            </li>
                            
                            
                            <li class="divider"></li>
                            <li class="no-padding">
                                
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="material-icons">exit_to_app</i>Sign Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field()}}
                                        </form>
                   

                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding active"><a class="waves-effect waves-grey active" href="{{url('adminpanel')}}"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
                  <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">supervisor_account</i>Users<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                 <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('users_show')}}">Manage Users</a></li>
                                 <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('register')}}">Add Users</a></li>
                               

                            </ul>
                        </div>
                    </li>
                     <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">monetization_on</i>Home Page<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                 <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('header_footer')}}">Header and Footer</a></li>

                                 <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('slides_show')}}">Slides</a></li>

                                 <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('services_show')}}">Services</a></li>
                                 
                                 
                                 <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('products_show')}}">Products</a></li>


                                 <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('abouts_show')}}">About</a></li>

                    
                                <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('info_report_show')}}">latest news</a></li>
                                
                            </ul>
                        </div>
                    </li>
                      <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('plants_show')}}"><i class="material-icons">airplanemode_active</i> Plants Page</a></li>

                      <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('blog_shows')}}"><i class="material-icons">airplanemode_active</i>  Academy Page</a></li>

                      <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('aboutus_show')}}"><i class="material-icons">airplanemode_active</i> About US Page</a></li>

                      <li class="no-padding "><a class="waves-effect waves-grey active" href="{{url('contactus_shows')}}"><i class="material-icons">airplanemode_active</i> Contact US Page</a></li>
                      
                                   
                    
                </ul>
                <div class="footer">
                    <p class="copyright">Steelcoders ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>

            @yield('content')


<div class="footer">
                    <p class="copyright">Steelcoders ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>
           
             
        </div>
        
        
        <!-- Javascripts -->
       
        <script src="{{asset('ui-templateadmin/assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/counter-up-master/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/chart.js/chart.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/plugins/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/js/alpha.min.js')}}"></script>
        <script src="{{asset('ui-templateadmin/assets/js/pages/dashboard.js')}}"></script>

    
    </body>
</html>