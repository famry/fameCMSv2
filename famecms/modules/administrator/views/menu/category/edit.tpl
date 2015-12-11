
 <!-- Datatables Header -->
<div ng-controller="EditPageCtrl" ng-init="id_page ={$page_id};change_date = 'no';change_url = 'no'">
	<div class="content-header">
		<div class="header-section">
			<h1>
				<i class="fa fa-pencil-square-o"></i>{$page_desc}
			</h1>
		</div>
	</div>
<div class="row">
	<div class="col-xs-9">
		<div class="block">
		<form name="editPagesForm" class="form-bordered" novalidate>
			<!-- Default Tabs -->
			<ul class="nav nav-tabs push" data-toggle="tabs">
				<li class="active"><a href="#main-tabs">Main</a></li>
				<li><a href="#seo-tabs">SEO</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="main-tabs">
				<!-- Main Form Content -->
				<div class="form-group" ng-class="{literal}
				{'has-error': editPagesForm.page_title.$error.required && !editPagesForm.page_title.$pristine,
				 'has-success': editPagesForm.page_title.$valid && !editPagesForm.page_title.$pristine}
				{/literal}">
					<label for="title">Page Title (*)</label>
					<input type="text" class="form-control" name="page_title" ng-model="dataForm.title" placeholder="Title Page" required>
					<span class="help-block" ng-show="editPagesForm.page_title.$error.required && !editPagesForm.page_title.$pristine">
						Page Title is required
					</span>
					<div class="input-group">
						<span class="input-group-addon">Permalink : </strong>{base_url('page')}/</span>
						<input ng-if="change_url =='yes'" name="slug" class="form-control" type="text" ng-model="dataForm.slug" style="width:120px;" >
						<input ng-if="change_url =='no'" name="slug" class="form-control" type="text" ng-model="dataForm.slug" style="width:120px;" disabled>
						<a href="javascript:void(0);" ng-hide="change_url =='yes'" ng-click="change_url ='yes'" class="btn btn-md btn-primary"> Change Url</a>
						<a href="javascript:void(0);" ng-show="change_url =='yes'" ng-click="change_url ='no'" class="btn btn-md btn-danger"> Save</a>
						<a ng-hide="change_url =='yes'" href="{base_url('page')}/{literal}{{dataForm.slug}}{/literal}" target="_blank" class="btn btn-md btn-default"> View Page</a>
					</div>
					
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					 <textarea ui-tinymce="tinymceOptions" ng-model="dataForm.content" rows="8"></textarea>
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
				<div class="form-group" ng-if="dataForm.custom_seo == '1'" ng-class="{literal}
				{'has-error': editPagesForm.seo_title.$invalid &&  !editPagesForm.seo_title.$pristine,
				 'has-success': editPagesForm.seo_title.$valid && !editPagesForm.seo_title.$pristine}
				{/literal}">
					<label for="seo-title">Seo Title (*)</label>
					<input name="seo_title" class="form-control" type="text" ng-model="dataForm.seo_title" ng-maxlength="50" required>
					<span class="help-block">Max 50 Char</span>
					<span class="help-block" ng-show="editPagesForm.seo_title.$error.required && !editPagesForm.seo_title.$pristine">
						Seo Title is required
					</span>
					<span class="help-block" ng-show="editPagesForm.seo_title.$error.maxlength && !editPagesForm.seo_title.$pristine">
						Seo Title must be less than 50 chars
					</span>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'" ng-class="{literal}
				{'has-error': editPagesForm.seo_keyword.$error.required  && !editPagesForm.seo_keyword.$pristine,
				 'has-success': editPagesForm.seo_keyword.$valid && !editPagesForm.seo_keyword.$pristine}
				{/literal}">
					<label for="seo-keyword">Seo Keywords (*)</label>
					<input name="seo_keyword" class="form-control" type="text" ng-model="dataForm.seo_keyword" required>
					<span class="help-block" ng-show="editPagesForm.seo_keyword.$error.required && !editPagesForm.seo_keyword.$pristine">
						Seo Keywords is required
					</span>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'" ng-class="{literal}
				{'has-error': editPagesForm.seo_desc.$invalid && !editPagesForm.seo_desc.$pristine,
				 'has-success': editPagesForm.seo_desc.$valid && !editPagesForm.seo_desc.$pristine}
				{/literal}">
					<label for="meta-desc">Meta Description (*)</label>
					<textarea name="seo_desc" rows="4" class="form-control" ng-model="dataForm.seo_desc" ng-maxlength="156" required></textarea>
					<span class="help-block">Max 156 char</span>
					<span class="help-block" ng-show="editPagesForm.seo_desc.$error.required && !editPagesForm.seo_desc.$pristine">
						Seo Description is required
					</span>
					<span class="help-block" ng-show="editPagesForm.seo_desc.$error.maxlength  && !editPagesForm.seo_desc.$pristine">
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
						<option value="publish">Publish</option>
						<option value="draft">Draft</option>
					</select>
				</div>
				<div class="form-group">
					<label for="date-choose">Date Published</label>
					
					<div ng-hide="change_date =='yes'">{literal}{{dataForm.publish_date}}{/literal}</div><a href="javascript:void(0);" ng-click="change_date ='yes'" ng-hide="change_date =='yes'">Change Date</a>
					<input ng-hide="change_date =='no'" type="text" name="publish_date" ng-model="dataForm.new_date" class="form-control input-datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy"><a href="javascript:void(0);" ng-click="change_date ='no'" ng-show="change_date =='yes'">Cancel</a> 
				</div>
				<div class="form-group form-actions">
					<button type="submit" class="btn btn-sm btn-primary" ng-click="buttonUpdate(dataForm)" ng-disabled="editPagesForm.$invalid"><i class="fa fa-refresh"></i> Update</button>
				</div>
				
			<!-- END Publish Form Content -->
		</div>
		<div class="block">
			<!-- Attribute Form Title -->
			<div class="block-title">
				<h2><strong>Page Attributes</strong></h2>
			</div>
			<!-- END Attribute Form Title -->

			<!-- Attribute Form Content -->
			
				<div class="form-group">
					<label for="parent">Parent</label>
					<select name="parent" class="form-control" size="1" ng-model="dataForm.parent">
						<option value="0">No Parent</option>
						{foreach from=$parentlist key=myId item=i}
						<option value="{$i.value}">{$i.name}</option>
						{/foreach}
					</select>
				</div>
				<div class="form-group">
					<label for="sidebar">Sidebar</label>
					<select name="sidebar" class="form-control" size="1" ng-model="dataForm.sidebar">
						<option value="no-sidebar">No Sidebar</option>
						<option value="sidebar-right">Sidebar Right</option>
						<option value="sidebar-left">Sidebar Left</option>
					</select>
				</div>
				<div class="form-group" ng-if="dataForm.sidebar != 'no-sidebar'">
					<label for="sidebar-name">Sidebar Name</label>
					<select name="sidebar_name" class="form-control" size="1" ng-model="dataForm.sidebar_name">
						<option value="">Please select</option>
						{foreach from=$sidebarlist key=myId item=i}
						<option value="{$i.value}">{$i.name}</option>
						{/foreach}
					</select>
				</div>
				<div class="form-group">
					<label for="comment">Comment</label>
					<select name="comment" class="form-control" size="1" ng-model="dataForm.comment">
						<option value="open">Open</option>
						<option value="close">Close</option>
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
                  