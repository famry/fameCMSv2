<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:33:15
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\pages\modal-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:353655f4c44b2b03a7-91639338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aff9cb87e0e41a9300c40c38f4a96feaed78fef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\pages\\modal-edit.tpl',
      1 => 1441706854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353655f4c44b2b03a7-91639338',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c44b2c77b3_45692950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c44b2c77b3_45692950')) {function content_55f4c44b2c77b3_45692950($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/ng-template" id="modal-edit.tpl">
<!-- Modal Header -->
<div class="modal-header text-center">
	<h2 class="modal-title"><i class="fa fa-pencil-square-o"></i> Edit Page</h2>
</div>
<!-- END Modal Header -->

<!-- Modal Body -->
<div class="modal-body">
	<!-- Form Components Row -->
<div class="row">
	<div class="col-md-9">
		<!-- Select Components Block -->
		<div class="block">
			<!-- Select Components Title -->
		   
			<!-- END Select Components Title -->

			<!-- Select Components Content -->
			 <form  name="editPagesForm" class="form-bordered" novalidate>
			 
				<div class="form-group" ng-class="
				{'has-error': editPagesForm.title.$error.required && !editPagesForm.title.$pristine,
				 'has-success': editPagesForm.title.$valid}
				">
					<label for="title">Page Title (*)</label>   
					<input type="text" id="title" name="title" ng-model="editdataPage.title" class="form-control" placeholder="Enter Title" required>
					<small ng-show="editPagesForm.title.$error.required && !editPagesForm.title.$pristine" class="error">Page Title is required.</small> 
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea ui-tinymce="tinymceOptions" ng-model="editdataPage.content" rows="8"></textarea>
				</div>

				
			  
			<!-- END Select Components Content -->
		</div>
		<!-- END Select Components Block -->

	   
	</div>
	 <div class="col-md-3">
		<!-- Select Components Block -->
		<div class="block">
			<!-- Select Components Title -->
		   <div class="block-title">
				<h2><strong>Publish</strong> </h2>
			</div>
			<!-- END Select Components Title -->

			<!-- Select Components Content -->
			<div class="form-group">
				<label for="status">Status</label>
				<select name="publish" class="form-control" ng-model="editdataPage.publish" ng-options="publish.value as publish.name for publish in options_publish">
				</select>
				
			</div>
			 <div class="form-group form-actions">
					<button type="submit" ng-hide="inProgress2" ng-click="updatepage(editdataPage)" class="btn btn-sm btn-primary" ng-disabled="editPagesForm.$invalid"><i class="fa fa-plus"></i> Update</button>
					<button disabled type="submit" ng-show="inProgress2" class="btn btn-sm btn-primary"><i class="fa fa-spinner fa-2x fa-spin"></i> Please wait...</button>
					<button type="button" class="btn btn-sm btn-danger" ng-click="cancel()"><i class="fa fa-times"></i> Close</button>
			</div>
		   
			<!-- END Select Components Content -->
		</div>
		<!-- END Select Components Block -->
		  <!-- Select Components Block -->
		<div class="block">
			<!-- Select Components Title -->
		   <div class="block-title">
				<h2><strong>Page Attribute</strong> </h2>
			</div>
			<!-- END Select Components Title -->

			<!-- Select Components Content -->
			<div class="form-group">
				<label for="parent">Parent</label>
				<select name="parent" class="form-control" ng-model="editdataPage.parent" ng-options="parent.value as parent.name for parent in options_parent">
				</select>
			</div>
			 <div class="form-group">
				<label for="sidebar">Sidebar</label>
			   	<select name="sidebar" class="form-control" ng-model="editdataPage.sidebar" ng-options="sidebar.value as sidebar.name for sidebar in options_sidebar">
				</select>
			</div>
			<div class="form-group" ng-show="editdataPage.sidebar != 'no-sidebar'">
				<label for="sidebar-name">Sidebar Name</label>
				<select name="sidebar_name" class="form-control" ng-model="editdataPage.sidebar_name" ng-options="sidebar_name.value as sidebar_name.name for sidebar_name in options_widget">
				</select>
			</div>
			 <div class="form-group">
					<label for="order">Order</label>
					<input type="text" name="ordernum" ng-model="editdataPage.ordernum" class="form-control">
			</div>
		   
			<!-- END Select Components Content -->
		</div>
		<!-- END Select Components Block -->

	   
	</div>

  
	 </form>
</div>
<!-- END Form Components Row -->
</div>
<!-- END Modal Body -->
<?php echo '</script'; ?>
><?php }} ?>
