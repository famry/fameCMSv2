<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:30:14
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1086455f4c396ac9857-35426363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f112a4ffcbd0ac2bc3421c28db2d69c56676684' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\login-form.tpl',
      1 => 1440515623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1086455f4c396ac9857-35426363',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c396b0e9b9_40937754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c396b0e9b9_40937754')) {function content_55f4c396b0e9b9_40937754($_smarty_tpl) {?> <form  name="formlogin" ng-init="loginForm = {}" id="form-login" class="form-horizontal form-bordered form-control-borderless" novalidate>
<div class="col-xs-12" ng-show="loginMsg">
<div class="alert alert-danger">
    <h4><i class="fa fa-times-circle"></i> Error</h4> <span ng-bind="loginMsg"></span></a>!
</div>
</div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group" ng-class="
                            {'has-error': formlogin.username.$invalid && !formlogin.username.$pristine,
                             'has-success': formlogin.username.$valid}
                            ">
                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                <input type="text" name="username" ng-model="loginForm.username" class="form-control input-lg" placeholder="Username" required>
                <span class="help-block" ng-show="formlogin.username.$error.required && !formlogin.username.$pristine">Username cannot be blank</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group" ng-class="
                            {'has-error': formlogin.pass.$invalid && !formlogin.pass.$pristine,
                             'has-success': formlogin.pass.$valid}
                            ">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" name="pass" ng-model="loginForm.password" class="form-control input-lg" placeholder="Password" required>
                <span class="help-block" ng-show="formlogin.pass.$error.required && !formlogin.pass.$pristine">Password cannot be blank</span>
            </div>
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-xs-4">
            <!--<label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                <input type="checkbox"  name="remember" ng-model="loginForm.remember">
                <span></span>
            </label>-->
        </div>
        <div class="col-xs-8 text-right">
            <button type="submit" ng-hide="loading" ng-disabled="formlogin.$invalid" ng-click="LoginAuth(loginForm)" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
            <div ng-show="loading"><i class="fa fa-spinner fa-2x fa-spin"></i></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 text-center">
            <?php if (getDataSetting('forget_password')=='1') {?>
            <a href="javascript:void(0)" ng-click="action='reminder'" id="link-reminder-login"><small>Forgot password?</small></a> - <?php }?>
             <?php if (getDataSetting('register_admin')=='1') {?>
            <a href="javascript:void(0)" ng-click="action='register'" id="link-register-login"><small>Create a new account</small></a> <?php }?><!-- -
            <a href="javascript:void(0)" ng-click="action='resend-code'" id="link-register-login"><small>Resend Activation code</small></a>-->
        </div>
    </div>
</form><?php }} ?>
