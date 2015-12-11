<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:29:59
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\frontend\views\partials\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:737855f4c3873e76e3-49223050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a42a30a69991626f2fd9c27a4d6aa37ebd0e1c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\frontend\\views\\partials\\header.tpl',
      1 => 1439153239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '737855f4c3873e76e3-49223050',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c3873f0ea1_94783053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c3873f0ea1_94783053')) {function content_55f4c3873f0ea1_94783053($_smarty_tpl) {?><div id="top-navigation" class="contain-to-grid sticky" ng-controller="HeaderController">
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">VokalPlus</a></h1>
      </li>
       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        
        
        <li class="has-or"><a ng-click="login_modal()">Login</a> <span class="or">Or</span></li>
        <li><a ng-click="register_modal()">Sign Up</a></li>

                    </ul>

      <ul class="search-wrap">
        <li>
            <a href="#" class="search-toggle" id="toggle-search-top-nav"><span class="search-toggle-icon">Search</span><span class="search-toggle-tail"></span></a>
        </li>
      </ul>

      <!-- Left Nav Section -->
      <ul class="left">
        <li class="active"><a href="#">Explore</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Directory</a></li>
        <li><a href="#">Store</a></li>
      </ul>
    </section>

    <div id="top-navigation-dropdown-overlay"></div>
  </nav>
</div>
<form action="" id="search-form">
  <div class="row">
    <div class="small-12 columns">
      <input type="text" class="input-text" placeholder="Type keywords and press enter...">
      <input type="submit" value="search" class="submit">          
    </div>
  </div>
</form><?php }} ?>
