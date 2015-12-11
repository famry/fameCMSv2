<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 16:18:43
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\pages\trash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13055f7e25f1c5dd6-14275796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb00e984386996cd2e47b57e569c78a434ca8e52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\pages\\trash.tpl',
      1 => 1442308719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13055f7e25f1c5dd6-14275796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f7e25f35aee2_65490777',
  'variables' => 
  array (
    'page_desc' => 0,
    'items' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7e25f35aee2_65490777')) {function content_55f7e25f35aee2_65490777($_smarty_tpl) {?>
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
                <td class="text-center">
					<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a ng-click="restoreAction(<?php echo $_smarty_tpl->tpl_vars['i']->value['id_post'];?>
)" data-toggle="tooltip" title="Restore" class="btn btn-xs btn-default"><i class="fa fa-recycle"></i> </a>
						<a ng-click="deletePermanentAction(<?php echo $_smarty_tpl->tpl_vars['i']->value['id_post'];?>
)" data-toggle="tooltip" title="Delete Permanent" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> </a>
					</div>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
		
    </div>
</div>
<!-- END Datatables Content -->
</div><?php }} ?>
