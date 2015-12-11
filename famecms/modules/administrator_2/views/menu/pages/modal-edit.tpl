<script type="text/ng-template" id="modal-edit.tpl">
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
			 
				<div class="form-group" ng-class="{literal}
				{'has-error': editPagesForm.title.$error.required && !editPagesForm.title.$pristine,
				 'has-success': editPagesForm.title.$valid}
				{/literal}">
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
</script>