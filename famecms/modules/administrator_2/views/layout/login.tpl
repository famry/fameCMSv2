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
    <body ng-app="fameAdmin">
      

       <!-- Login Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <img src="{base_url('themes/proui/img/placeholders/backgrounds/login_full_bg.jpg')}" alt="Login Full Background" class="full-bg animation-pulseSlow">
        <!-- END Login Full Background -->

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn" ng-controller="LoginCtrl">
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1><i class="gi gi-flash"></i> <strong>FameCMS</strong><br><small>Please <strong>Login</strong> to <strong>Manage Your Website</strong></small></h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <div ng-show="action =='login'">
                    {include file="login-form.tpl"}
                </div>
                <!-- END Login Form -->

                <!-- Reminder Form -->
                <div ng-show="action =='reminder'">
                    {include file="reminder-form.tpl"}
                </div>
                <!-- END Reminder Form -->

                <!-- Register Form -->
                <div ng-show="action =='register'">
                    {include file="register-form.tpl"}
                <!-- END Register Form -->
                </div>
            <!-- END Login Block -->
        </div>
        </div>
        <!-- END Login Container -->

        <!-- Modal Terms -->
        <div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Terms &amp; Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Title</h4>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <h4>Title</h4>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <h4>Title</h4>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Modal Terms -->

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

        <script src="{base_url('bower_components/tinymce/app/js/tinymce/tinymce.js')}"></script>
        <script src="{base_url('bower_components/tinymce/src/tinymce.js')}"></script>

        <script src="{base_url('public/js/admin/proui/general.js')}"></script>
        <script src="{base_url('public/js/admin/proui/login.js')}"></script>

        <script src="{base_url('public/js/admin/proui/admin-directive.js')}"></script>
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