<div id="changeDP-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header text-center">
            <h2 class="modal-title"><i class="fa fa-image"></i> Edit Display Picture</h2>
        </div>
        <!-- END Modal Header -->

        <!-- Modal Body -->
        <div class="modal-body" ng-controller="changeDpCtrl">
            <form name="form"  novalidate>
			<div class="row">
				<div class="col-md-7">
					<div class="cropArea" style="background: #E4E4E4;overflow: hidden;width:100%;height:300px;">
					    <img-crop image="myImage" result-image="myCroppedImage"></img-crop>
					</div>
				</div>
				<div class="col-md-5">
				<div>Select an image file:
					  <input type="file" ng-model="file" name="file" id="file-dpimg" base-sixty-four-input required onloadend="loadEndHandler" on-change="onChange" maxsize="500" accept="image/*">
					   <small ng-show="form.file.$error.required" class="error">Choose an image.</small>
					   <small ng-show="form.file.$error.maxsize" class="error">File Size image must be under 500kb </small>
				</div>
				<div>Cropped Image:</div>
					<div>
						<img ng-src="{literal}{{myCroppedImage}}{/literal}" />
						<p style="margin:10px 0px;">
						      <button type="submit" value="Save" class="submit button primary" ng-click="submitForm()" ng-disabled="form.file.$invalid">Set Display Picture</button>
						</p>
					</div>
				</div>
			</div>
		</form>
        </div>
        <!-- END Modal Body -->
    </div>
</div>
</div>