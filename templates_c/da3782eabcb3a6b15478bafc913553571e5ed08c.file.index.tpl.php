<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:30:31
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241655f4c3a74810e4-40653147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da3782eabcb3a6b15478bafc913553571e5ed08c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\index.tpl',
      1 => 1439098099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241655f4c3a74810e4-40653147',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c3a74a7578_11148222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c3a74a7578_11148222')) {function content_55f4c3a74a7578_11148222($_smarty_tpl) {?>					<!-- Dashboard Header -->
					<!-- For an image header add the class 'content-header-media' and an image as in the following example -->
					<div class="content-header content-header-media">
						<div class="header-section">
							<div class="row">
								<!-- Main Title (hidden on small devices for the statistics to fit) -->
								<div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
									<h1>Welcome <strong>{{dataadmin.first_name}}</strong></h1>
								</div>
								<!-- END Main Title -->
							</div>
						</div>
						<!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) 
						<img src="img/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">-->
					</div>
					<!-- END Dashboard Header -->

                    <!-- Mini Top Stats Row -->
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="page_ready_article.html" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                                        <i class="fa fa-file-text"></i>
                                    </div>
                                    <h3 class="widget-content text-right animation-pullDown">
                                        New <strong>Article</strong><br>
                                        <small>Mountain Trip</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                        <i class="gi gi-usd"></i>
                                    </div>
                                    <h3 class="widget-content text-right animation-pullDown">
                                        + <strong>250%</strong><br>
                                        <small>Sales Today</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="page_ready_inbox.html" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                                        <i class="gi gi-envelope"></i>
                                    </div>
                                    <h3 class="widget-content text-right animation-pullDown">
                                        5 <strong>Messages</strong>
                                        <small>Support Center</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="page_comp_gallery.html" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                                        <i class="gi gi-picture"></i>
                                    </div>
                                    <h3 class="widget-content text-right animation-pullDown">
                                        +30 <strong>Photos</strong>
                                        <small>Gallery</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        
                    </div>
                    <!-- END Mini Top Stats Row -->

                    <!-- Widgets Row -->
                    <div class="row">
					<div class="col-md-6">
                            <!-- Your Plan Widget -->
                            <div class="widget">
                                <div class="widget-extra themed-background-dark">
                                    <div class="widget-options">
                                        <div class="btn-group btn-group-xs">
                                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Edit Widget"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Quick Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="widget-content-light">
                                        Your <strong>VIP Plan</strong>
                                        <small><a href="page_ready_pricing_tables.html"><strong>Upgrade</strong></a></small>
                                    </h3>
                                </div>
                                <div class="widget-extra-full">
                                    <div class="row text-center">
                                        <div class="col-xs-6 col-lg-3">
                                            <h3>
                                                <strong>35</strong> <small>/50</small><br>
                                                <small><i class="fa fa-folder-open-o"></i> Projects</small>
                                            </h3>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <h3>
                                                <strong>25</strong> <small>/100GB</small><br>
                                                <small><i class="fa fa-hdd-o"></i> Storage</small>
                                            </h3>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <h3>
                                                <strong>65</strong> <small>/1k</small><br>
                                                <small><i class="fa fa-building-o"></i> Clients</small>
                                            </h3>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <h3>
                                                <strong>10</strong> <small>k</small><br>
                                                <small><i class="fa fa-envelope-o"></i> Emails</small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Your Plan Widget -->
                        </div>
                        <div class="col-md-6">
                            <!-- Charts Widget -->
                            <div class="widget">
                                <div class="widget-advanced widget-advanced-alt">
                                    <!-- Widget Header -->
                                    <div class="widget-header text-center themed-background">
                                        <h3 class="widget-content-light text-left pull-left animation-pullDown">
                                            <strong>Sales</strong> &amp; <strong>Earnings</strong><br>
                                            <small>Last Year</small>
                                        </h3>
                                        <!-- Flot Charts (initialized in js/pages/index.js), for more examples you can check out http://www.flotcharts.org/ -->
                                        <div id="dash-widget-chart" class="chart"></div>
                                    </div>
                                    <!-- END Widget Header -->

                                    <!-- Widget Main -->
                                    <div class="widget-main">
                                        <div class="row text-center">
                                            <div class="col-xs-4">
                                                <h3 class="animation-hatch"><strong>7.500</strong><br><small>Clients</small></h3>
                                            </div>
                                            <div class="col-xs-4">
                                                <h3 class="animation-hatch"><strong>10.970</strong><br><small>Sales</small></h3>
                                            </div>
                                            <div class="col-xs-4">
                                                <h3 class="animation-hatch">$<strong>31.230</strong><br><small>Earnings</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Widget Main -->
                                </div>
                            </div>
                            <!-- END Charts Widget -->
                        </div>
                    </div>
                    <!-- END Widgets Row --><?php }} ?>
