<script type="text/ng-template" id="widget-modal-add.tpl">
<!-- Modal Header -->
<div class="modal-header text-center">
	<h2 class="modal-title"><i class="fa fa-pencil-square-o"></i> Add New Widget</h2>
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
			 <form name="addWidgetForm"  class="form-bordered" novalidate>
			 
				<div class="form-group" ng-class="{literal}
				{'has-error': addWidgetForm.widget_name.$error.required,
				 'has-success': addWidgetForm.widget_name.$valid}
				{/literal}">
					<label for="title">Widget Name(*)</label>   
					<input type="text" name="widget_name" ng-model="newdataWidget.name" class="form-control" placeholder="Enter Widget Name" required>
					<small ng-show="addWidgetForm.widget_name.$error.required" class="error">Widget Name is required.</small> 
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					 <textarea ui-tinymce="tinymceOptions" ng-model="newdataWidget.content" rows="8"></textarea>
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
			 <div class="form-group form-actions">
					<button type="submit" ng-hide="inProgress" ng-click="addnewwidget(newdataWidget)" class="btn btn-sm btn-primary" ng-disabled="addWidgetForm.$invalid"><i class="fa fa-plus"></i> Create</button>
					<button disabled type="submit" ng-show="inProgress" class="btn btn-sm btn-primary"><i class="fa fa-spinner fa-2x fa-spin"></i> Please wait...</button>
					<button type="button" class="btn btn-sm btn-danger" ng-click="cancel()"><i class="fa fa-times"></i> Close</button>
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
		