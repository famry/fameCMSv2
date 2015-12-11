<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 21:28:57
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\partials\main-sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1872255f4c3a72f3ef7-09234440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '132218f686202533bf16b747076847ff4af61b49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\partials\\main-sidebar.tpl',
      1 => 1442327333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872255f4c3a72f3ef7-09234440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c3a735e7c4_74785310',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c3a735e7c4_74785310')) {function content_55f4c3a735e7c4_74785310($_smarty_tpl) {?><div id="sidebar" ng-controller="sidebarCtrl">
	<!-- Wrapper for scrolling functionality -->
	<div class="sidebar-scroll">
		<!-- Sidebar Content -->
		<div class="sidebar-content">
			<!-- Brand -->
			<a href="index.html" class="sidebar-brand">
				<i class="gi gi-flash"></i><strong>Fame</strong>CMS
			</a>
			<!-- END Brand -->

			<!-- User Info -->
			<div class="sidebar-section sidebar-user clearfix">
				<div class="sidebar-user-avatar">
					<a href="">
					<img ng-if="dataadmin.display_picture == ''" style="-webkit-border-radius: 32px;-moz-border-radius: 32px;border-radius: 32px;height:64px;width:64px;" src="<?php echo base_url('themes/proui/img/placeholders/avatars/avatar2.jpg');?>
">
            		<img ng-if="dataadmin.display_picture !=''" style="-webkit-border-radius: 32px;-moz-border-radius: 32px;border-radius: 32px;height:64px;width:64px;" src="<?php echo base_url();?>
{{dataadmin.display_picture}}">
					</a>
				</div>
				<div class="sidebar-user-name">{{dataadmin.first_name}} {{dataadmin.last_name}}</div>
				<div class="sidebar-user-links">
					<a href="<?php echo base_url('administrator/setting/profile');?>
" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
					<a href="<?php echo base_url('administrator/message/');?>
" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
					<!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
					<a href="#modal-user-settings" data-toggle="modal" class="enable-tooltip" data-placement="bottom" title="Settings"><i class="gi gi-cogwheel"></i></a>
					<a href="<?php echo base_url('administrator/logout/');?>
" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
				</div>
			</div>
			<!-- END User Info -->
			<!-- Sidebar Navigation -->
			<ul class="sidebar-nav">
				<li class="sidebar-header">
					<span class="sidebar-header-title">Site</span>
				</li>
				<li>
					<a href="<?php echo base_url('administrator/');?>
"><i class="gi gi-home sidebar-nav-icon"></i>Dashboard</a>
				</li>
				<li>
					<a href="<?php echo base_url('administrator/page/');?>
"><i class="fa fa-pencil-square-o sidebar-nav-icon"></i>Page</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-thumb-tack sidebar-nav-icon"></i>Post</a>
				</li>
				<li>
					<a href="<?php echo base_url('administrator/category/');?>
"><i class="fa fa-bars sidebar-nav-icon"></i>Category</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-comments sidebar-nav-icon"></i>Comment</a>
				</li>
				<li>
					<a href="<?php echo base_url('administrator/gallery/');?>
"><i class="fa fa-image sidebar-nav-icon"></i>Gallery</a>
				</li>
				<!--<li>
					<a href="#" class="sidebar-nav-menu"><i class="fa fa-thumb-tack sidebar-nav-icon"></i>Post</a>
				</li>
				<li>
					<a href="#" class="sidebar-nav-menu"><i class="fa fa-bars sidebar-nav-icon"></i>Category</a>
				</li>
				<li>
					<a href="#" class="sidebar-nav-menu"><i class="fa fa-comments sidebar-nav-icon"></i>Comment</a>
				</li>
				-->
				<li>
					<a href="<?php echo base_url('administrator/message/');?>
"><i class="fa fa-envelope sidebar-nav-icon"></i>Message</a>
				</li>
				<li>
					<a href="<?php echo base_url('administrator/widget/');?>
"><i class="fa fa-th sidebar-nav-icon"></i>Widget</a>
				</li>
				
				 <li class="sidebar-header">
					<span class="sidebar-header-title">User</span>
				</li>
				<li>
				<a href="<?php echo base_url('administrator/users/');?>
" ><i class="fa fa-user sidebar-nav-icon"></i>User</a>
				</li>
				<li class="sidebar-header">
					<span class="sidebar-header-title">Setting</span>
				</li>
				<li>
					<a href="<?php echo base_url('administrator/setting/');?>
"><i class="fa fa-globe sidebar-nav-icon"></i>Website Setting</a>
				</li>
				<li>
					<a href="<?php echo base_url('administrator/location/');?>
"><i class="fa fa-map-marker sidebar-nav-icon"></i>Location</a>
				</li>
			</ul>
			<!-- END Sidebar Navigation -->

			
		</div>
		<!-- END Sidebar Content -->
	</div>
	<!-- END Wrapper for scrolling functionality -->
</div><?php }} ?>
