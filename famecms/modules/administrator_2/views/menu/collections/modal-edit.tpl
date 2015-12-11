
<div id="edit-collection-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header text-center">
				<h2 class="modal-title"><i class="fa fa-wrench"></i> Edit Collections</h2>
			</div>
			<!-- END Modal Header -->

			<!-- Modal Body -->
			<div class="modal-body" ng-controller="EditCollectionsCtrl">
				<!-- Form Components Row -->
			<div class="row">
				<div class="col-md-9">
					<!-- Select Components Block -->
					<div class="block">
						<!-- Select Components Title -->
					   
						<!-- END Select Components Title -->

						<!-- Select Components Content -->
						 <form  name="EditCollectionForm" class="form-bordered" novalidate>
						 	<div class="form-group" ng-class="{literal}
							{'has-error': EditCollectionForm.collection_name.$invalid && !EditCollectionForm.collection_name.$pristine,
							 'has-success': EditCollectionForm.collection_name.$valid && !EditCollectionForm.collection_name.$pristine}
							{/literal}">
						 	<label class="control-label" for="site-title">Collection Name</label>
                            <input type="text" name="collection_name" class="form-control" ng-model="dataForm.name" required>
							<span class="help-block" ng-show="EditCollectionForm.collection_name.$error.required 
							&& !EditCollectionForm.collection_name.$pristine" class="error">Collection Name is required.</span> 
                            </div>
							
							<div class="form-group" ng-class="{literal}
							{'has-error': EditCollectionForm.collection_content.$invalid && !EditCollectionForm.collection_content.$pristine,
							 'has-success': EditCollectionForm.collection_content.$valid && !EditCollectionForm.collection_content.$pristine}
							{/literal}">
							<label for="content">Content</label>
							<textarea name="collection_content" ui-tinymce="tinymceOptions" ng-model="dataForm.desc"></textarea>
							<span class="help-block" ng-show="EditCollectionForm.collection_content.$error.required 
							&& !EditCollectionForm.collection_content.$pristine" class="error">Content is required.</span> 
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
							<h2><strong>Manage</strong> </h2>
						</div>
						<!-- END Select Components Title -->

						<!-- Select Components Content -->
						 <div class="form-group form-actions">
								<button type="submit" class="btn btn-sm btn-primary" ng-click="updateForm(dataForm)">
								<i class="fa fa-refresh"></i> Update</button>
								<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
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
		</div>
	</div>
</div>