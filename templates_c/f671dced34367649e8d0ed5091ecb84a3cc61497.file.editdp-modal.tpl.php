<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-07 04:18:24
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\setting\editdp-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125756143aa0722699-31920807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f671dced34367649e8d0ed5091ecb84a3cc61497' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\setting\\editdp-modal.tpl',
      1 => 1439845794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125756143aa0722699-31920807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56143aa07786d9_16093123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56143aa07786d9_16093123')) {function content_56143aa07786d9_16093123($_smarty_tpl) {?><div id="changeDP-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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
						<img ng-src="{{myCroppedImage}}" />
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
</div><?php }} ?>
