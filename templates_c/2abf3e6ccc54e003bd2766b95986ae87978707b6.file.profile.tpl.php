<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-07 04:18:24
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\menu\setting\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3108856143aa003b098-09614600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2abf3e6ccc54e003bd2766b95986ae87978707b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\menu\\setting\\profile.tpl',
      1 => 1439857415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3108856143aa003b098-09614600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56143aa0547612_81350287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56143aa0547612_81350287')) {function content_56143aa0547612_81350287($_smarty_tpl) {?> <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-gear"></i><?php echo $_smarty_tpl->tpl_vars['page_desc']->value;?>

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
                        <img id="thumbDP" ng-if="dataadmin.display_picture == ''" style="display:block;margin-right:auto;margin-left:auto;-webkit-border-radius: 100px;-moz-border-radius: 100px;border-radius: 100px;height:200px;width:200px;" src="<?php echo base_url('themes/proui/img/placeholders/avatars/avatar@2x.jpg');?>
">
                         <img id="thumbDP" ng-if="dataadmin.display_picture !=''" style="display:block;margin-right:auto;margin-left:auto;-webkit-border-radius: 100px;-moz-border-radius: 100px;border-radius: 100px;height:200px;width:200px;" src="<?php echo base_url();?>
{{dataadmin.display_picture}}">
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

<?php echo $_smarty_tpl->getSubTemplate ("menu/setting/editdp-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
