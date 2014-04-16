<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>Admin :: @yield('title')</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fonts/style.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/main-responsive.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/iCheck/skins/all.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/theme_light.css" type="text/css" id="skin_color">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/print.css" type="text/css" media="print"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    @yield('pageCSS')
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body>
<!-- start: HEADER -->
@include('layouts.header')
<!-- end: HEADER -->
<!-- start: MAIN CONTAINER -->
<div class="main-container">
<div class="navbar-content">
<!-- start: SIDEBAR -->
<div class="main-navigation navbar-collapse collapse">
<!-- start: MAIN MENU TOGGLER BUTTON -->
<div class="navigation-toggler">
    <i class="clip-chevron-left"></i>
    <i class="clip-chevron-right"></i>
</div>
<!-- end: MAIN MENU TOGGLER BUTTON -->
<!-- start: MAIN NAVIGATION MENU -->
    @include('layouts.main-navigation-menu')
<!-- end: MAIN NAVIGATION MENU -->
</div>
<!-- end: SIDEBAR -->
</div>
<!-- start: PAGE -->
<div class="main-content">
<!-- start: PANEL CONFIGURATION MODAL FORM -->
<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">Panel Configuration</h4>
            </div>
            <div class="modal-body">
                Here will be a configuration form
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- end: SPANEL CONFIGURATION MODAL FORM -->
<div class="container">
<!-- start: PAGE HEADER -->
    @yield('pageHeader')
<!-- end: PAGE HEADER -->
<!-- start: PAGE CONTENT -->
@yield('content')
<!-- end: PAGE CONTENT-->
</div>
</div>
<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
<!-- start: FOOTER -->
@include('layouts.footer')
<!-- end: FOOTER -->
<div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">Event Management</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                    Close
                </button>
                <button type="button" class="btn btn-danger remove-event no-display">
                    <i class='fa fa-trash-o'></i> Delete Event
                </button>
                <button type='submit' class='btn btn-success save-event'>
                    <i class='fa fa-check'></i> Save
                </button>
            </div>
        </div>
    </div>
</div>
<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="{{ URL::to('/') }}/assets/plugins/respond.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/excanvas.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--<![endif]-->
<script src="{{ URL::to('/') }}/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/blockUI/jquery.blockUI.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/iCheck/jquery.icheck.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/less/less-1.5.0.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
<script src="{{ URL::to('/') }}/assets/js/main.js"></script>
<!-- end: MAIN JAVASCRIPTS -->

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    @yield('pageJS')
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

</body>
<!-- end: BODY -->
</html>