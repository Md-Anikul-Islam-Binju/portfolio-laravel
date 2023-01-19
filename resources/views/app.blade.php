<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Portfolio">
    <meta name="keyword" content="Admin, Template, Theme, Responsive">
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"><span>Portfolio</span></a>
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">

                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> Md Anikul Islam
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li>
                               <a href="{{route('admin.logout')}}"><i class="halflings-icon off"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid-full">
    <div class="row-fluid">
        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{route('admin.dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>

                    <li><a href="{{route('admin.skill')}}"><i class="icon-tasks"></i><span class="hidden-tablet">Skills</span></a></li>
                    <li><a href="{{route('admin.experience')}}"><i class="icon-tasks"></i><span class="hidden-tablet">Experience</span></a></li>
                    <li><a href="{{route('admin.project')}}"><i class="icon-tasks"></i><span class="hidden-tablet">Project</span></a></li>
                    <li><a href="{{route('admin.education')}}"><i class="icon-tasks"></i><span class="hidden-tablet">Education</span></a></li>
                    <li><a href="{{route('admin.tools')}}"><i class="icon-tasks"></i><span class="hidden-tablet">Tools</span></a></li>
                    <li><a href="{{route('admin.certificate')}}"><i class="icon-tasks"></i><span class="hidden-tablet">Certificate</span></a></li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Setting</span></a>
                        <ul>
                            <li><a class="submenu" href="{{route('admin.user.details')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">User Details</span></a></li>
                            <li><a class="submenu" href="{{route('admin.social.link')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Social Link</span></a></li>
                            <li><a class="submenu" href="{{route('admin.personal.information')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Personal Information</span></a></li>
                            <li><a class="submenu" href="{{route('admin.languages')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Language</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->

        <!-- start: Content -->
        <div id="content" class="span10">
            @yield('content')
        </div>
    </div>
</div>

<div class="clearfix"></div>
<footer>
    <p>
        <span style="text-align:left;float:left">&copy; 2023 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">Portfolio</a></span>
        <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Md Anikul Islam</a></span>
    </p>
</footer>

<!-- start: JavaScript-->
<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
<script src="{{asset('backend/js/modernizr.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/excanvas.js')}}"></script>
<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.noty.js')}}"></script>
<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>
<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>
<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>
<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('backend/js/counter.js')}}"></script>
<script src="{{asset('backend/js/retina.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>
</body>
</html>
