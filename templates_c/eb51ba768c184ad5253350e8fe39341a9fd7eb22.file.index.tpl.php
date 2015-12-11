<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 18:41:15
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\category\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:415955f803db07bd45-53261483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb51ba768c184ad5253350e8fe39341a9fd7eb22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\category\\index.tpl',
      1 => 1442317237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '415955f803db07bd45-53261483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_desc' => 0,
    'items' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f803db116e50_12946472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f803db116e50_12946472')) {function content_55f803db116e50_12946472($_smarty_tpl) {?>
 <!-- Datatables Header -->
<div ng-controller="ManageCategoryCtrl">
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i><?php echo $_smarty_tpl->tpl_vars['page_desc']->value;?>

        </h1>
    </div>
</div>
<!--<ul class="breadcrumb breadcrumb-top">
    <li>Tables</li>
    <li><a href="">Datatables</a></li>
</ul>-->
<!-- END Datatables Header -->

<!-- Datatables Content -->
 
<div class="block full">
<div align="right"  class="block-title">
<div class="btn-group">
                    <a href="<?php echo base_url('administrator/category/add');?>
" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    <a href="<?php echo base_url('administrator/category');?>
" class="btn btn-primary"><i class="fa fa-globe"></i> Active List</a>
                    <a href="<?php echo base_url('administrator/category/trash');?>
" class="btn btn-danger"><i class="fa fa-trash-o"></i> Trash List</a>
 </div>
</div>
    <div class="table-responsive">
       <table id="example-datatable" class="table table-vcenter table-condensed">
            <thead>
                <tr>
                    <th width="10%" class="text-center">ID</th>
                    <th width="30%" class="text-center">Category Name</th>
                    <th width="20%" class="text-center">Category Type</th>
                    <th width="20%" class="text-center">Status</th>
                    <th width="20%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
            <tr>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['id_cat'];?>
</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
</td>
                <td class="text-center">
                 <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=='active') {?><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</span><?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=='not active') {?><span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</span><?php }?>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="<?php echo base_url('administrator/category/edit');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['id_cat'];?>
" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                        <a ng-click="deleteAction(<?php echo $_smarty_tpl->tpl_vars['i']->value['id_cat'];?>
)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
		
    </div>
</div>
<!-- END Datatables Content -->
</div>

                   <?php }} ?>
