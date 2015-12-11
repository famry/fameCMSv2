<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>{$title} - FameCMS</title>

        <meta name="description" content="FameCMS is a Indonesian Codeigniter CMS created by famry">
        <meta name="author" content="famry">
        <meta name="robots" content="noindex, nofollow">
		<link rel="canonical" href="famecms.com">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{base_url('themes/proui/img/favicon.ico')}">
        <link rel="apple-touch-icon" href="{base_url('themes/proui/img/icon57.png')}" sizes="57x57">
        <link rel="apple-touch-icon" href="{base_url('themes/proui/img/icon72.png')}" sizes="72x72">
        <link rel="apple-touch-icon" href="{base_url('themes/proui/img/icon76.png')}" sizes="76x76">
        <link rel="apple-touch-icon" href="{base_url('themes/proui/img/icon114.png')}" sizes="114x114">
        <link rel="apple-touch-icon" href="{base_url('themes/proui/img/icon120.png')}" sizes="120x120">
        <link rel="apple-touch-icon" href="{base_url('themes/proui/img/icon144.png')}" sizes="144x144">
        <link rel="apple-touch-icon" href="{base_url('themes/proui/img/icon152.png')}" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{base_url('themes/proui/css/bootstrap.min.css')}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{base_url('themes/proui/css/plugins.css')}">
        <link rel="stylesheet" href="{base_url('bower_components/ngImgCrop/compile/unminified/ng-img-crop.css')}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{base_url('themes/proui/css/main.css')}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{base_url('themes/proui/css/themes.css')}">
        <!-- END Stylesheets -->
        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="{base_url('themes/proui/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js')}"></script>
        
    </head>
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available body classes:

        'page-loading'      enables page preloader
    -->
    <body class="page-loading" ng-app="fameAdmin">
        <!-- Preloader -->
        <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
        <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in body element (HTML version) -->
        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Fame</strong>CMS</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
            </div>
        </div>
        <div ng-controller="defaultCtrl">
        <!-- END Preloader -->
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available #page-container classes:

            '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

            'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
            'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
            'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

            'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

            'style-alt'                                     for an alternative main style (without it: the default style)
            'footer-fixed'                                  for a fixed footer (without it: a static footer)

            'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

            'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
            'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar
        -->
        <div id="page-container" class="header-fixed-top sidebar-partial sidebar-visible-lg sidebar-no-animations">
            <!-- Alternative Sidebar -->
            {include file="partials/alt-sidebar.tpl"}
            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            {include file="partials/main-sidebar.tpl"}
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                    Available header.navbar classes:

                    'navbar-default'            for the default light header
                    'navbar-inverse'            for an alternative dark header

                    'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                        'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                    'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                        'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                -->
               {include file="partials/header.tpl"}
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                {include file="$content"}
                </div>
                <!-- END Page Content -->
				{include file="partials/footer.tpl"}
                <!-- Footer -->
               
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->
        </div>
        <!-- Remember to include excanvas for IE8 chart support -->
        <!--[if IE 8]><script src="{base_url('themes/proui/js/helpers/excanvas.min.js')}"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="{base_url('themes/proui/js/vendor/jquery-1.11.1.min.js')}"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="{base_url('themes/proui/js/vendor/jquery-1.11.1.min.js')}"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="{base_url('themes/proui/js/vendor/bootstrap.min.js')}"></script>
        <script src="{base_url('themes/proui/js/plugins.js')}"></script>
        <script src="{base_url('themes/proui/js/app.js')}"></script>
		
		<!-- Angular.js, Bower and Custom JS code -->
        <script src="{base_url('node_modules/angular/angular.min.js')}"></script>
        <script src="{base_url('node_modules/angular-base64-upload/src/angular-base64-upload.js')}"></script>
        
        <script src="{base_url('bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js')}"></script>
        <script src="{base_url('bower_components/ngImgCrop/compile/unminified/ng-img-crop.js')}"></script>
		
        <script src="{base_url('bower_components/moment/moment.js')}"></script>
        <script src="{base_url('bower_components/angular-moment/angular-moment.js')}"></script>

        <script src="{base_url('bower_components/tinymce/app/js/tinymce/tinymce.js')}"></script>
        <script src="{base_url('bower_components/tinymce/src/tinymce.js')}"></script>

        <script src="{base_url('public/js/admin/proui/general.js')}"></script>
        <script src="{base_url('public/js/admin/proui/sidebar.js')}"></script>
        <script src="{base_url('public/js/admin/proui/users.js')}"></script>
        <script src="{base_url('public/js/admin/proui/setting.js')}"></script>
	    
		<script src="{base_url('public/js/admin/proui/admin-directive.js')}"></script>

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->

        <!-- Load and execute javascript code used only in this page -->
		{foreach $loadJSFiles as $val}
		<script type="text/javascript" src="{$val}"></script>
		{/foreach}
        <script>$(function(){
		{foreach $initJSFiles as $val}
		{$val}
		{/foreach}
		});</script>
    </body>
</html>