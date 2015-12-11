<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:30:53
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\setting\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2187055f4c3bd11bbc7-38099821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebaf203b8f153ce96322d8bbf32bd0bac09a3756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\setting\\index.tpl',
      1 => 1441189186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2187055f4c3bd11bbc7-38099821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c3bd1face5_44841306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c3bd1face5_44841306')) {function content_55f4c3bd1face5_44841306($_smarty_tpl) {?> <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-table"></i><?php echo $_smarty_tpl->tpl_vars['page_desc']->value;?>

                            </h1>
                        </div>
 </div>
  <!-- Mini Top Stats Row -->
                    <div ng-controller="SettingCtrl">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a ng-click="GeneralSettingModal()"  href="javascript:void(0)" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <h3 class="widget-content text-right animation-pullDown">
                                        General <strong>Setting</strong><br>
                                        <small>Manage your basic web setting here</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a ng-click="CustomSettingModal()" href="javascript:void(0)" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <h3 class="widget-content text-right animation-pullDown">
                                        Custom <strong>Setting</strong>
                                        <small>Manage your custom setting here</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                         <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a data-toggle="modal" data-target="#socmed-modal"  href="javascript:void(0)" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <h3 class="widget-content text-right animation-pullDown">
                                        Social <strong>Media</strong>
                                        <small>Manage your social media here</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
						<div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="page_comp_gallery.html" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <h3 class="widget-content text-right animation-pullDown">
                                        SEO <strong>Tools</strong>
                                        <small>Manage your social media here</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                    </div>
                    <!-- END Mini Top Stats Row -->
					<?php echo $_smarty_tpl->getSubTemplate ("menu/setting/general.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ("menu/setting/custom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ("menu/setting/socmed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div><?php }} ?>
