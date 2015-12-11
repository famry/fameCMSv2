<script type="text/ng-template" id="country-modal-add.tpl">
<!-- Modal Header -->
<div class="modal-header text-center">
	<h2 class="modal-title"><i class="fa fa-pencil-square-o"></i> Add New Country</h2>
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
			 <form name="addCountryForm"  class="form-bordered" novalidate>
			 
				<div class="form-group" ng-class="{literal}
				{'has-error': addCountryForm.country_name.$error.required,
				 'has-success': addCountryForm.country_name.$valid}
				{/literal}">
					<label for="title">Genre Name(*)</label>   
					<input type="text" name="country_name" ng-model="newdataCountry.name" class="form-control" placeholder="Enter Country Name" required>
					<small ng-show="addCountryForm.country_name.$error.required" class="error">Country Name is required.</small>
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
				<select name="publish" class="form-control" ng-model="newdataCountry.publish" ng-options="publish.value as publish.name for publish in options_publish">
				</select>
			</div>
			 <div class="form-group form-actions">
					<button type="submit" ng-hide="inProgress" ng-click="addnewcountry(newdataCountry)" class="btn btn-sm btn-primary" ng-disabled="addCountryForm.$invalid"><i class="fa fa-plus"></i> Create</button>
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
		