<div id="general-setting-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header text-center">
				<h2 class="modal-title"><i class="fa fa-wrench"></i> General Setting</h2>
			</div>
			<!-- END Modal Header -->

			<!-- Modal Body -->
			<div class="modal-body" ng-controller="GeneralSettingCtrl">
				<!-- Form Components Row -->
			<div class="row">
				<div class="col-md-9">
					<!-- Select Components Block -->
					<div class="block">
						<!-- Select Components Title -->
					   
						<!-- END Select Components Title -->

						<!-- Select Components Content -->
						 <form  name="GeneralSettingForm" class="form-horizontal form-bordered" novalidate>
						 	<div class="form-group" ng-class="{literal}
							{'has-error': GeneralSettingForm.site_title.$invalid && !GeneralSettingForm.site_title.$pristine,
							 'has-success': GeneralSettingForm.site_title.$valid && !GeneralSettingForm.site_title.$pristine}
							{/literal}">
						 	<label class="col-md-4 control-label" for="site-title">Site Title</label>
                            <div class="col-md-8">
                            <input type="text" name="site_title" class="form-control" ng-model="setting.sitename"
                            ng-maxlength="50">
							<span class="help-block">Your Site Title (max:50 chars)</span>
							<span class="help-block" ng-show="GeneralSettingForm.site_title.$error.maxlength 
							&& !GeneralSettingForm.site_title.$pristine" class="error">Site Title is too long.</span> 
                            </div>
                            </div>

                            <div class="form-group" ng-class="{literal}
							{'has-error': GeneralSettingForm.site_tagline.$invalid && !GeneralSettingForm.site_tagline.$pristine,
							 'has-success': GeneralSettingForm.site_tagline.$valid && !GeneralSettingForm.site_tagline.$pristine}
							{/literal}">
						 	<label class="col-md-4 control-label" for="site-tagline">Site Tagline</label>
                            <div class="col-md-8">
                            <input type="text" name="site_tagline" class="form-control" ng-model="setting.tagline"
                            ng-maxlength="100">
							<span class="help-block">Your Site Tagline (max:100 chars)</span>
							<span class="help-block" ng-show="GeneralSettingForm.site_tagline.$error.maxlength 
							&& !GeneralSettingForm.site_tagline.$pristine" class="error">Site Tagline is too long.</span> 
                            </div>
                            </div>

                            <div class="form-group" ng-class="{literal}
							{'has-error': GeneralSettingForm.email_address.$invalid && !GeneralSettingForm.email_address.$pristine,
							 'has-success': GeneralSettingForm.email_address.$valid && !GeneralSettingForm.email_address.$pristine}
							{/literal}">
						 	<label class="col-md-4 control-label" for="email-address">Email Address</label>
                            <div class="col-md-8">
                            <input type="email" name="email_address" class="form-control" ng-model="setting.email"
                            ng-maxlength="100" ng-required="true">
							<span class="help-block">Site Email Address (max:100 chars)</span>
							<span class="help-block" ng-show="GeneralSettingForm.email_address.$error.maxlength 
							&& !GeneralSettingForm.email_address.$pristine" class="error">Email Address is too long.</span>
							<span class="help-block" ng-show="GeneralSettingForm.email_address.$invalid 
							&& !GeneralSettingForm.email_address.$pristine" class="error">Email Address not valid.</span>
							<span class="help-block" ng-show="GeneralSettingForm.email_address.$error.required 
							&& !GeneralSettingForm.email_address.$pristine" class="error">Email Address cannot be blank.</span>
                            </div>
                            </div>

                            <div class="form-group" ng-class="{literal}
							{'has-error': GeneralSettingForm.phone.$invalid && !GeneralSettingForm.phone.$pristine,
							 'has-success': GeneralSettingForm.phone.$valid && !GeneralSettingForm.phone.$pristine}
							{/literal}">
						 	<label class="col-md-4 control-label" for="phone">Phone</label>
                            <div class="col-md-8">
                            <input type="text" name="phone" class="form-control" ng-model="setting.phone"
                            ng-maxlength="20">
							<span class="help-block">Personal/Company Phone Number</span>
                            <span class="help-block" ng-show="GeneralSettingForm.phone.$error.maxlength 
							&& !GeneralSettingForm.phone.$pristine" class="error">Phone number is too long.</span>
                            </div>
                            </div>

                            <div class="form-group">
						 	<label class="col-md-4 control-label" for="address">Address</label>
                            <div class="col-md-8">
							<textarea  id="address" name="address" class="form-control" ng-model="setting.address"></textarea>
							<span class="help-block">Personal/Company Address</span>
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
								<button type="submit" class="btn btn-sm btn-primary"
								ng-click="updateForm(setting)" ng-disabled="GeneralSettingForm.$invalid">
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