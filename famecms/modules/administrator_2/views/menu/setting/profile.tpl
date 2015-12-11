 <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-gear"></i>{$page_desc}
                            </h1>
                        </div>
 </div>
<!-- <ul class="breadcrumb breadcrumb-top">
    <li>Forms</li>
    <li><a href="">Components</a></li>
</ul>-->
<!-- END Components Header -->

<!-- Form Components Row -->
<div class="row">
    <div class="col-md-9">
        <!-- Select Components Block -->
        <div class="block">
            <!-- Select Components Content -->
             <form name="myProfileForm" ng-init="dataadmin = {}" class="form-horizontal form-bordered" novalidate>
                <div class="row">
                    <div class="col-md-4">
                        <img id="thumbDP" ng-if="dataadmin.display_picture == ''" style="display:block;margin-right:auto;margin-left:auto;-webkit-border-radius: 100px;-moz-border-radius: 100px;border-radius: 100px;height:200px;width:200px;" src="{base_url('themes/proui/img/placeholders/avatars/avatar@2x.jpg')}">
                         <img id="thumbDP" ng-if="dataadmin.display_picture !=''" style="display:block;margin-right:auto;margin-left:auto;-webkit-border-radius: 100px;-moz-border-radius: 100px;border-radius: 100px;height:200px;width:200px;" src="{base_url()}{literal}{{dataadmin.display_picture}}{/literal}">
                    <a style="display:block;margin-top:10px;" type="submit"  data-toggle="modal" data-target="#changeDP-modal" class="btn btn-sm btn-primary"><i class="fa fa-image"></i> Change Picture</a>
                    <input type="hidden" ng-model="dataadmin.crop_picture">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="username">Username</label>
                            <div class="col-md-9">
                             <input type="text" id="username" name="username" class="form-control" ng-model="dataadmin.user_name" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="col-md-3 control-label" for="email">Email</label>
                            <div class="col-md-9">
                             <input type="text" id="email" name="email" class="form-control" ng-model="dataadmin.email" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="fname">First Name</label>
                            <div class="col-md-9">
                            <input type="text" id="fname" name="fname" class="form-control" ng-model="dataadmin.first_name" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="lname">Last Name</label>
                            <div class="col-md-9">
                            <input type="text" id="lname" name="lname" class="form-control" ng-model="dataadmin.last_name" placeholder="Enter Last Name">
                            </div>
                        </div>
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
            <div class="form-group">
                <label class="control-label" for="role">Role</label>
                <input type="text" id="role" name="role" class="form-control" ng-model="dataadmin.role" disabled>        
            </div>
            <div class="form-group">
                 <label class="control-label" for="status">Status</label>
                 <input type="text" id="status" name="status" class="form-control" ng-model="dataadmin.status" disabled>
            </div>
            <div class="form-group form-actions">
                    <button type="submit" ng-disabled="MyProfileForm.$invalid" ng-click="UpdateProfile(dataadmin)" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> Update</button>
            </div>
           
            <!-- END Select Components Content -->
        </div>
        <!-- END Select Components Block -->
       
    </div>

  
     </form>
</div>
<!-- END Form Components Row -->

{include file="menu/setting/editdp-modal.tpl"}