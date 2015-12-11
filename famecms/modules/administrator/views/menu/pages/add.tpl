
 <!-- Datatables Header -->
<div ng-controller="AddPageCtrl">
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
		<form name="addPagesForm" class="form-bordered" novalidate>
			<!-- Default Tabs -->
			<ul class="nav nav-tabs push" data-toggle="tabs">
				<li class="active"><a href="#main-tabs">Main</a></li>
				<li><a href="#seo-tabs">SEO</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="main-tabs">
				<!-- Main Form Content -->
				<div class="form-group" ng-class="{literal}
				{'has-error': addPagesForm.page_title.$error.required && !addPagesForm.page_title.$pristine,
				 'has-success': addPagesForm.page_title.$valid && !addPagesForm.page_title.$pristine}
				{/literal}">
					<label for="title">Page Title (*)</label>
					<input type="text" class="form-control" name="page_title" ng-model="dataForm.title" placeholder="Title Page" required>
					<span class="help-block" ng-show="addPagesForm.page_title.$error.required && !addPagesForm.page_title.$pristine">
						Page Title is required
					</span>
					<!-- <span class="help-block"><strong>Permalink : </strong> http://yoursite.com/
					<button type="submit" class="btn btn-sm btn-default"> View Page</button>
					</span> -->
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
				{'has-error': addPagesForm.seo_title.$invalid &&  !addPagesForm.seo_title.$pristine,
				 'has-success': addPagesForm.seo_title.$valid && !addPagesForm.seo_title.$pristine}
				{/literal}">
					<label for="seo-title">Seo Title (*)</label>
					<input name="seo_title" class="form-control" type="text" ng-model="dataForm.seo_title" ng-maxlength="50" required>
					<span class="help-block">Max 50 Char</span>
					<span class="help-block" ng-show="addPagesForm.seo_title.$error.required && !addPagesForm.seo_title.$pristine">
						Seo Title is required
					</span>
					<span class="help-block" ng-show="addPagesForm.seo_title.$error.maxlength && !addPagesForm.seo_title.$pristine">
						Seo Title must be less than 50 chars
					</span>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'" ng-class="{literal}
				{'has-error': addPagesForm.seo_keyword.$error.required  && !addPagesForm.seo_keyword.$pristine,
				 'has-success': addPagesForm.seo_keyword.$valid && !addPagesForm.seo_keyword.$pristine}
				{/literal}">
					<label for="seo-keyword">Seo Keywords (*)</label>
					<input name="seo_keyword" class="form-control" type="text" ng-model="dataForm.seo_keyword" required>
					<span class="help-block" ng-show="addPagesForm.seo_keyword.$error.required && !addPagesForm.seo_keyword.$pristine">
						Seo Keywords is required
					</span>
				</div>
				<div class="form-group" ng-if="dataForm.custom_seo == '1'" ng-class="{literal}
				{'has-error': addPagesForm.seo_desc.$invalid && !addPagesForm.seo_desc.$pristine,
				 'has-success': addPagesForm.seo_desc.$valid && !addPagesForm.seo_desc.$pristine}
				{/literal}">
					<label for="meta-desc">Meta Description (*)</label>
					<textarea name="seo_desc" rows="4" class="form-control" ng-model="dataForm.seo_desc" ng-maxlength="156" required></textarea>
					<span class="help-block">Max 156 char</span>
					<span class="help-block" ng-show="addPagesForm.seo_desc.$error.required && !addPagesForm.seo_desc.$pristine">
						Seo Description is required
					</span>
					<span class="help-block" ng-show="addPagesForm.seo_desc.$error.maxlength  && !addPagesForm.seo_desc.$pristine">
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
					<label for="custom-date">Date Published</label>
					<select name="custom_date" class="form-control" size="1" ng-model="dataForm.custom_date">
						<option value="now">Now</option>
						<option value="custom">Custom</option>
					</select>
				</div>
				<div class="form-group" ng-show="dataForm.custom_date =='custom'">
					<label for="date-choose">Choose Date</label>
					<input type="text" name="publish_date" ng-model="dataForm.publish_date" class="form-control input-datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" required>                           
				</div>
				<div class="form-group form-actions">
					<button type="submit" class="btn btn-sm btn-primary" ng-click="buttonAdd(dataForm)" ng-disabled="addPagesForm.$invalid"><i class="fa fa-plus"></i> Create</button>
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
                  