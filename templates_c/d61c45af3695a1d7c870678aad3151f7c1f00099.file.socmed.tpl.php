<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:30:53
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\setting\socmed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2218155f4c3bd430366-92940215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd61c45af3695a1d7c870678aad3151f7c1f00099' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\setting\\socmed.tpl',
      1 => 1440402481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2218155f4c3bd430366-92940215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c3bd43c8f9_69049339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c3bd43c8f9_69049339')) {function content_55f4c3bd43c8f9_69049339($_smarty_tpl) {?>
<div id="socmed-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header text-center">
				<h2 class="modal-title"><i class="fa fa-wrench"></i> Socmed Setting</h2>
			</div>
			<!-- END Modal Header -->

			<!-- Modal Body -->
			<div class="modal-body">
				<!-- Form Components Row -->
			<div class="row">
				<div class="col-md-3">
				<a class="btn btn-md btn-primary" style="display:block;">
						<i class="fa fa-plus"></i> Create New
				</a>
				<a class="btn btn-md btn-primary" style="display:block;">
						<i class="fa fa-list"></i> List Socmed
				</a>
				</div>
				<div class="col-md-9">
					<!-- Select Components Block -->
					<div class="block">
						<div class="table-responsive">
                            <table id="example-datatable" class="table table-vcenter table-condensed">
                                <thead>
                                    <tr>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Icon</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">Facebook</td>
                                        <td class="text-center"><img src="http://placehold.it/64x64"></td>
                                        <td class="text-center">active</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a  title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
						</div>
					</div>
					<!-- END Select Components Block -->
				</div>
			</div>
			<!-- END Form Components Row -->
			</div>
			<!-- END Modal Body -->
		</div>
	</div>
</div><?php }} ?>
