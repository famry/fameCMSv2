
<div id="add-product-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header text-center">
				<h2 class="modal-title"><i class="fa fa-wrench"></i> Add New Product</h2>
			</div>
			<!-- END Modal Header -->

			<!-- Modal Body -->
			<div class="modal-body" ng-controller="AddProductCtrl">
				<!-- Form Components Row -->
			<div class="row">
				<div class="col-md-9">
					<!-- Select Components Block -->
					<div class="block">
						<!-- Select Components Title -->
					   
						<!-- END Select Components Title -->

						<!-- Select Components Content -->
						 <form  name="AddProductForm" class="form-bordered" novalidate>
						 	<div class="form-group" ng-class="{literal}
							{'has-error': AddProductForm.product_name.$invalid && !AddProductForm.product_name.$pristine,
							 'has-success': AddProductForm.product_name.$valid && !AddProductForm.product_name.$pristine}
							{/literal}">
						 	<label class="control-label" for="site-title">Product Name</label>
                            <input type="text" name="product_name" class="form-control" ng-model="dataForm.name" required>
							<span class="help-block" ng-show="AddProductForm.product_name.$error.required 
							&& !AddProductForm.product_name.$pristine" class="error">Product Name is required.</span> 
                            </div>
							
							<div class="form-group" ng-class="{literal}
							{'has-error': AddProductForm.product_content.$invalid && !AddProductForm.product_content.$pristine,
							 'has-success': AddProductForm.product_content.$valid && !AddProductForm.product_content.$pristine}
							{/literal}">
							<label for="content">Description</label>
							<textarea name="product_content" ui-tinymce="tinymceOptions" ng-model="dataForm.desc"></textarea>
							<span class="help-block" ng-show="AddProductForm.product_content.$error.required 
							&& !AddProductForm.product_content.$pristine" class="error">Description is required.</span> 
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
						<div class="form-group">
							<select name="publish" class="form-control" ng-model="dataForm.publish">
								<option value="active">Active</option>
								<option value="not active">Not Active</option>
							</select>
						</div>
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