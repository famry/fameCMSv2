<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 10:24:54
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\layout\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1349155f4c396749227-92753294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eff192ceceaf7c1c5016d7832a02f1f73085021a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\layout\\login.tpl',
      1 => 1442292101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1349155f4c396749227-92753294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c3969299a1_79394072',
  'variables' => 
  array (
    'title' => 0,
    'loadJSFiles' => 0,
    'val' => 0,
    'initJSFiles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c3969299a1_79394072')) {function content_55f4c3969299a1_79394072($_smarty_tpl) {?><!DOCTYPE html>
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
    <body ng-app="fameAdmin">
      

       <!-- Login Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <img src="<?php echo base_url('themes/proui/img/placeholders/backgrounds/login_full_bg.jpg');?>
" alt="Login Full Background" class="full-bg animation-pulseSlow">
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
                    <?php echo $_smarty_tpl->getSubTemplate ("login-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                <!-- END Login Form -->

                <!-- Reminder Form -->
                <div ng-show="action =='reminder'">
                    <?php echo $_smarty_tpl->getSubTemplate ("reminder-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                <!-- END Reminder Form -->

                <!-- Register Form -->
                <div ng-show="action =='register'">
                    <?php echo $_smarty_tpl->getSubTemplate ("register-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
 src="<?php echo base_url('public/js/admin/proui/login.js');?>
"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo base_url('public/js/admin/proui/admin-directive.js');?>
"><?php echo '</script'; ?>
>
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
