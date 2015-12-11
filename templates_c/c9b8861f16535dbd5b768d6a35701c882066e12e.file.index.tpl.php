<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 16:02:33
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2419455f4c44ad6f075-41323376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9b8861f16535dbd5b768d6a35701c882066e12e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\pages\\index.tpl',
      1 => 1442307749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2419455f4c44ad6f075-41323376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c44b007db3_53271203',
  'variables' => 
  array (
    'page_desc' => 0,
    'items' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c44b007db3_53271203')) {function content_55f4c44b007db3_53271203($_smarty_tpl) {?>
 <!-- Datatables Header -->
<div ng-controller="ManagePageCtrl">
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
                    <a href="<?php echo base_url('administrator/page/add');?>
" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    <a href="<?php echo base_url('administrator/page');?>
" class="btn btn-primary"><i class="fa fa-globe"></i> Active List</a>
                    <a href="<?php echo base_url('administrator/page/trash');?>
" class="btn btn-danger"><i class="fa fa-trash-o"></i> Trash List</a>
 </div>
</div>
    <div class="table-responsive">
       <table id="example-datatable" class="table table-vcenter table-condensed">
            <thead>
                <tr>
                    <th width="10%" class="text-center">ID</th>
                    <th width="25%" class="text-center">Title</th>
                    <th width="15%" class="text-center">Author</th>
                    <th width="15%" class="text-center">Date</th>
                    <th width="15%" class="text-center">Modified</th>
                    <th width="15%" class="text-center">Status</th>
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
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['id_post'];?>
</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['author'];?>
</td>
                <td class="text-center"><?php echo date('d M Y',strtotime($_smarty_tpl->tpl_vars['i']->value['date']));?>
</td>
                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['i']->value['modified']=='0000-00-00 00:00:00') {?>-<?php } else {
echo date('d M Y H:i:s',strtotime($_smarty_tpl->tpl_vars['i']->value['modified']));
}?></td>
                <td class="text-center">
                 <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=='publish') {?><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</span><?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=='draft') {?><span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</span><?php }?>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="<?php echo base_url('administrator/page/edit');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['id_post'];?>
" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                        <a ng-click="deleteAction(<?php echo $_smarty_tpl->tpl_vars['i']->value['id_post'];?>
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
