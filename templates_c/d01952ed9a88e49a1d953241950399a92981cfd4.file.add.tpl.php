<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 19:17:02
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\category\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1972455f80b6f34c071-05045743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd01952ed9a88e49a1d953241950399a92981cfd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\category\\add.tpl',
      1 => 1442319418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1972455f80b6f34c071-05045743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f80b6f45d381_76728815',
  'variables' => 
  array (
    'page_desc' => 0,
    'parentlist' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f80b6f45d381_76728815')) {function content_55f80b6f45d381_76728815($_smarty_tpl) {?>
 <!-- Datatables Header -->
<div ng-controller="AddCategoryCtrl">
	<div class="content-header">
		<div class="header-section">
			<h1>
				<i class="fa fa-pencil-square-o"></i><?php echo $_smarty_tpl->tpl_vars['page_desc']->value;?>

			</h1>
		</div>
	</div>
<div class="row">
	<div class="col-xs-9">
		<div class="block">
		<form name="addCategoryForm" class="form-bordered" novalidate>
			<!-- Default Tabs -->
			<ul class="nav nav-tabs push" data-toggle="tabs">
				<li class="active"><a href="#main-tabs">Main</a></li>
				<li><a href="#seo-tabs">SEO</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="main-tabs">
				<!-- Main Form Content -->
				<div class="form-group" ng-class="
				{'has-error': addCategoryForm.cat_name.$error.required && !addCategoryForm.cat_name.$pristine,
				 'has-success': addCategoryForm.cat_name.$valid && !addCategoryForm.cat_name.$pristine}
				">
					<label for="title">Category Name (*)</label>
					<input type="text" class="form-control" name="cat_name" ng-model="dataForm.cat_name" placeholder="Category Name" required>
					<span class="help-block" ng-show="addCategoryForm.cat_name.$error.required && !addCategoryForm.cat_name.$pristine">
						Category Name is required
					</span>
				</div>
				<div class="form-group">
					<label for="content">Description</label>
					 <textarea class="form-control" name="desc" ng-model="dataForm.desc" rows="4"></textarea>
				</div>
				<!-- END Main Form Content -->
				</div>
				
				<div class="tab-pane" id="seo-tabs">
				<!-- SEO Form Content -->
				
				<div class="form-group">
					<label for="custom-seo">Custom SEO</label>
					<select name="custom_seo" class="form-control" size="1" ng-model="dataForm.custom_seo">
						<option value="0">No</option>
						<option value="1">Yes</option>
					</select>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'">
					<label for="meta-index">Meta robot index</label>
					<select name="seo_index" class="form-control" size="1" ng-model="dataForm.seo_index">
						<option value="index">Index</option>
						<option value="noindex">No Index</option>
					</select>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'">
					<label for="meta-follow">Meta robot follow</label>
					<select name="seo_follow" class="form-control" size="1" ng-model="dataForm.seo_follow">
						<option value="follow">Follow</option>
						<option value="nofollow">No Follow</option>
					</select>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'" ng-class="
				{'has-error': addCategoryForm.seo_title.$invalid &&  !addCategoryForm.seo_title.$pristine,
				 'has-success':addCategoryForm.seo_title.$valid && !addCategoryForm.seo_title.$pristine}
				">
					<label for="seo-title">Seo Title (*)</label>
					<input name="seo_title" class="form-control" type="text" ng-model="dataForm.seo_title" ng-maxlength="50" required>
					<span class="help-block">Max 50 Char</span>
					<span class="help-block" ng-show="addCategoryForm.seo_title.$error.required && !addCategoryForm.seo_title.$pristine">
						Seo Title is required
					</span>
					<span class="help-block" ng-show="addCategoryForm.seo_title.$error.maxlength && !addCategoryForm.seo_title.$pristine">
						Seo Title must be less than 50 chars
					</span>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'" ng-class="
				{'has-error': addCategoryForm.seo_keyword.$error.required  && !addCategoryForm.seo_keyword.$pristine,
				 'has-success': addCategoryForm.seo_keyword.$valid && !addCategoryForm.seo_keyword.$pristine}
				">
					<label for="seo-keyword">Seo Keywords (*)</label>
					<input name="seo_keyword" class="form-control" type="text" ng-model="dataForm.seo_keyword" required>
					<span class="help-block" ng-show="addCategoryForm.seo_keyword.$error.required && !addCategoryForm.seo_keyword.$pristine">
						Seo Keywords is required
					</span>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'" ng-class="
				{'has-error': addCategoryForm.seo_desc.$invalid && !addCategoryForm.seo_desc.$pristine,
				 'has-success': addCategoryForm.seo_desc.$valid && !addCategoryForm.seo_desc.$pristine}
				">
					<label for="meta-desc">Meta Description (*)</label>
					<textarea name="seo_desc" rows="4" class="form-control" ng-model="dataForm.seo_desc" ng-maxlength="156" required></textarea>
					<span class="help-block">Max 156 char</span>
					<span class="help-block" ng-show="addCategoryForm.seo_desc.$error.required && !addCategoryForm.seo_desc.$pristine">
						Seo Description is required
					</span>
					<span class="help-block" ng-show="addCategoryForm.seo_desc.$error.maxlength  && !addCategoryForm.seo_desc.$pristine">
						Seo Description must be less than 156 chars
					</span>
				</div>
				<!-- END SEO Form Content -->
				</div>
			</div>
			<!-- END Default Tabs -->
			
		</div>
	</div>
	<div class="col-xs-3">
		<div class="block">
			<!-- Publish Form Title -->
			<div class="block-title">
				<h2><strong>Publish</strong></h2>
			</div>
			<!-- END Publish Form Title -->

			<!-- Publish Form Content -->
				
				<div class="form-group">
					<label for="status">Status</label>
					<select name="publish" class="form-control" size="1" ng-model="dataForm.publish">
						<option value="active">Active</option>
						<option value="not active">Not Active</option>
					</select>
				</div>
				<div class="form-group form-actions">
					<button type="submit" class="btn btn-sm btn-primary" ng-click="buttonAdd(dataForm)" ng-disabled="addCategoryForm.$invalid"><i class="fa fa-plus"></i> Create</button>
				</div>
				
			<!-- END Publish Form Content -->
		</div>
		<div class="block">
			<!-- Attribute Form Title -->
			<div class="block-title">
				<h2><strong>Category Attributes</strong></h2>
			</div>
			<!-- END Attribute Form Title -->

			<!-- Attribute Form Content -->
				<div class="form-group">
					<label for="type">Category Type</label>
					<select name="cat_type" class="form-control" size="1" ng-model="dataForm.type">
						<option value="post">Post</option>
					</select>
				</div>
				<div class="form-group">
					<label for="parent">Parent</label>
					<select name="parent" class="form-control" size="1" ng-model="dataForm.parent">
						<option value="0">No Parent</option>
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parentlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="ordernum">Order</label>
					<input name="ordernum" class="form-control" type="text" ng-model="dataForm.ordernum">                           
				</div>
			</form>
			<!-- END Attribute Form Content -->
		</div>
	</div>
</div>

</div>
                  <?php }} ?>
