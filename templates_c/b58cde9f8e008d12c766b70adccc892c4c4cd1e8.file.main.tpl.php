<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 16:54:31
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\layout\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2483655f4c3a6d96a15-56682689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58cde9f8e008d12c766b70adccc892c4c4cd1e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\layout\\main.tpl',
      1 => 1442310813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2483655f4c3a6d96a15-56682689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c3a705fd08_14292919',
  'variables' => 
  array (
    'title' => 0,
    'loadJSFiles' => 0,
    'val' => 0,
    'initJSFiles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c3a705fd08_14292919')) {function content_55f4c3a705fd08_14292919($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - FameCMS</title>

        <meta name="description" content="FameCMS is a Indonesian Codeigniter CMS created by famry">
        <meta name="author" content="famry">
        <meta name="robots" content="noindex, nofollow">
		<link rel="canonical" href="famecms.com">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url('themes/proui/img/favicon.ico');?>
">
        <link rel="apple-touch-icon" href="<?php echo base_url('themes/proui/img/icon57.png');?>
" sizes="57x57">
        <link rel="apple-touch-icon" href="<?php echo base_url('themes/proui/img/icon72.png');?>
" sizes="72x72">
        <link rel="apple-touch-icon" href="<?php echo base_url('themes/proui/img/icon76.png');?>
" sizes="76x76">
        <link rel="apple-touch-icon" href="<?php echo base_url('themes/proui/img/icon114.png');?>
" sizes="114x114">
        <link rel="apple-touch-icon" href="<?php echo base_url('themes/proui/img/icon120.png');?>
" sizes="120x120">
        <link rel="apple-touch-icon" href="<?php echo base_url('themes/proui/img/icon144.png');?>
" sizes="144x144">
        <link rel="apple-touch-icon" href="<?php echo base_url('themes/proui/img/icon152.png');?>
" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo base_url('themes/proui/css/bootstrap.min.css');?>
">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url('themes/proui/css/plugins.css');?>
">
        <link rel="stylesheet" href="<?php echo base_url('bower_components/ngImgCrop/compile/unminified/ng-img-crop.css');?>
">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url('themes/proui/css/main.css');?>
">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url('themes/proui/css/themes.css');?>
">
        <!-- END Stylesheets -->
        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <?php echo '<script'; ?>
 src="<?php echo base_url('themes/proui/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js');?>
"><?php echo '</script'; ?>
>
        
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
            <?php echo $_smarty_tpl->getSubTemplate ("partials/alt-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            <?php echo $_smarty_tpl->getSubTemplate ("partials/main-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
               <?php echo $_smarty_tpl->getSubTemplate ("partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                <!-- END Page Content -->
				<?php echo $_smarty_tpl->getSubTemplate ("partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
        <!--[if IE 8]><?php echo '<script'; ?>
 src="<?php echo base_url('themes/proui/js/helpers/excanvas.min.js');?>
"><?php echo '</script'; ?>
><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <?php echo '<script'; ?>
 src="<?php echo base_url('themes/proui/js/vendor/jquery-1.11.1.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>!window.jQuery && document.write(decodeURI('%3Cscript src="<?php echo base_url('themes/proui/js/vendor/jquery-1.11.1.min.js');?>
"%3E%3C/script%3E'));<?php echo '</script'; ?>
>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <?php echo '<script'; ?>
 src="<?php echo base_url('themes/proui/js/vendor/bootstrap.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('themes/proui/js/plugins.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('themes/proui/js/app.js');?>
"><?php echo '</script'; ?>
>
		
		<!-- Angular.js, Bower and Custom JS code -->
        <?php echo '<script'; ?>
 src="<?php echo base_url('node_modules/angular/angular.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('node_modules/angular-base64-upload/src/angular-base64-upload.js');?>
"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/ngImgCrop/compile/unminified/ng-img-crop.js');?>
"><?php echo '</script'; ?>
>
		
        <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/moment/moment.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/angular-moment/angular-moment.js');?>
"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/tinymce/app/js/tinymce/tinymce.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/tinymce/src/tinymce.js');?>
"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo base_url('public/js/admin/proui/general.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('public/js/admin/proui/sidebar.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('public/js/admin/proui/users.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('public/js/admin/proui/setting.js');?>
"><?php echo '</script'; ?>
>
	    
		<?php echo '<script'; ?>
 src="<?php echo base_url('public/js/admin/proui/admin-directive.js');?>
"><?php echo '</script'; ?>
>

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->

        <!-- Load and execute javascript code used only in this page -->
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loadJSFiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"><?php echo '</script'; ?>
>
		<?php } ?>
        <?php echo '<script'; ?>
>$(function(){
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['initJSFiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['val']->value;?>

		<?php } ?>
		});<?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
