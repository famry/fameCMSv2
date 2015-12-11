
<div id="custom-setting-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header text-center">
				<h2 class="modal-title"><i class="fa fa-wrench"></i> Custom Setting</h2>
			</div>
			<!-- END Modal Header -->

			<!-- Modal Body -->
			<div class="modal-body" ng-controller="CustomSettingCtrl">
				<!-- Form Components Row -->
			<div class="row">
				<div class="col-md-9">
					<!-- Select Components Block -->
					<div class="block">
						<!-- Select Components Title -->
					   
						<!-- END Select Components Title -->

						<!-- Select Components Content -->
						 <form  name="CustomSettingForm" class="form-horizontal form-bordered" novalidate>
						 	<div class="form-group">
						 	<label class="col-md-4 control-label" for="custom-logo">Use Custom Logo??</label>
                            <div class="col-md-8">
                            <select name="custom_logo" class="form-control" ng-model="setting.custom_logo">
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
                            </div>
                            </div>
                            <div class="form-group" ng-if="setting.custom_logo == '1'">
						 	<label class="col-md-4 control-label" for="custom-logo">Custom Logo Url</label>
                            <div class="col-md-8">
                            <input type="text" name="custom_logo_url" class="form-control" ng-model="custom_logo_url">
                            </div>
                            </div>

                            <div class="form-group">
						 	<label class="col-md-4 control-label" for="custom-logo">Use Custom Favicon??</label>
                            <div class="col-md-8">
                            <select name="custom_favicon" class="form-control" ng-model="setting.custom_favicon">
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
                            </div>
                            </div>
                            <div class="form-group" ng-if="setting.custom_favicon == '1'">
						 	<label class="col-md-4 control-label" for="custom-favicon">Custom Favicon Url</label>
                            <div class="col-md-8">
                            <input type="text" name="custom_favicon_url" class="form-control" ng-model="custom_favicon_url">
                            </div>
                            </div>

                            <div class="form-group">
						 	<label class="col-md-4 control-label" for="admin-register">Admin Registration</label>
                            <div class="col-md-8">
                            <select name="register_admin" class="form-control" ng-model="setting.register_admin">
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
                            <span class="help-block">Show Register link in Login form??</span>
                            </div>
                            </div>
							
							<div class="form-group">
						 	<label class="col-md-4 control-label" for="forget-pass">Forget Password</label>
                            <div class="col-md-8">
                            <select name="forget_password" class="form-control" ng-model="setting.forget_password">
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
                            <span class="help-block">Show Forget Password link in Login form??</span>
                            </div>
                            </div>

                            <div class="form-group">
						 	<label class="col-md-4 control-label" for="maintenance-mode">Maintenance Mode??</label>
                            <div class="col-md-8">
                            <select name="maintenance_mode" class="form-control" ng-model="setting.maintenance_mode">
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
                            </div>
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
								<button type="submit" class="btn btn-sm btn-primary" ng-click="updateForm(setting)">
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