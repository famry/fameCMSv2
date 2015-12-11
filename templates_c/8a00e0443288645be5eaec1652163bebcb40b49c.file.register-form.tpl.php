<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:30:14
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\register-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2417455f4c396c08d15-54450318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a00e0443288645be5eaec1652163bebcb40b49c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\register-form.tpl',
      1 => 1439089716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2417455f4c396c08d15-54450318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c396c314e6_98811460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c396c314e6_98811460')) {function content_55f4c396c314e6_98811460($_smarty_tpl) {?> <form name="formregister" ng-init="registerForm = {}"  class="form-horizontal form-bordered form-control-borderless" novalidate>
<div class="col-xs-12" ng-show="registerMsg">
    <div class="alert alert-danger">
        <h4><i class="fa fa-times-circle"></i> Error</h4> <span ng-bind="registerMsg"></span></a>!
    </div>
</div>
    <div class="form-group">
        <div class="col-xs-6">
            <div class="input-group" ng-class="
            {'has-error': formregister.firstname.$invalid && !formregister.firstname.$pristine,
             'has-success': formregister.firstname.$valid}
            ">
                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                <input type="text" name="firstname" ng-model="registerForm.firstname" 
                class="form-control input-lg" placeholder="Firstname" required>
                <span class="help-block" ng-show="formregister.firstname.$error.required && !formregister.firstname.$pristine">First Name cannot be blank</span>
            </div>
        </div>
        <div class="col-xs-6">
            <input type="text" name="lastname" ng-model="registerForm.lastname" 
             class="form-control input-lg" placeholder="Lastname">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group" ng-class="
                {'has-error': formregister.email.$invalid && !formregister.email.$pristine,
                 'has-success': formregister.email.$valid}
                ">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="email"  name="email" ng-model="registerForm.email"
                class="form-control input-lg" placeholder="Email" required email-available>
                <small ng-if="formregister.email.$pending" class="error">Checking Email...</small>
                <span class="help-block" 
                    ng-show="formregister.email.$error.required && !formregister.email.$pristine">
                    Email cannot be blank
                </span>
                <span class="help-block" 
                    ng-show="formregister.email.$error.email && !formregister.email.$pristine">
                    Enter a valid email address
                </span>
                <span class="help-block" 
                    ng-show="formregister.email.$error.unique && !formregister.email.$pristine">
                    Email already exist.Choose another one!!
                </span>
            </div>
            
        </div>
    </div>
     <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group" ng-class="
                {'has-error': formregister.username.$invalid && !formregister.username.$pristine,
                 'has-success': formregister.username.$valid}
                ">
            <span class="input-group-addon">@</span>
                <input type="text"  name="username" ng-model="registerForm.username" 
                ng-minlength="5"
                ng-maxlength="10"
                class="form-control input-lg" placeholder="Username" username-available required>
            <small ng-if="formregister.username.$pending" class="error">Checking Username Availability...</small>
            <span class="help-block" 
                ng-show="formregister.username.$error.required && !formregister.username.$pristine">
                Username cannot be blank
            </span>
            <span class="help-block"
                ng-show="formregister.username.$error.maxlength || formregister.username.$error.minlength 
                && !formregister.username.$pristine">
                Username must be 5-10 chars
            </span>
            <span class="help-block" 
                ng-show="formregister.username.$error.unique && !formregister.username.$pristine">
                Username has been taken.Choose another one!!
            </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group" ng-class="
                {'has-error': formregister.password.$invalid && !formregister.password.$pristine,
                 'has-success': formregister.password.$valid}
                ">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" name="password" ng-model="registerForm.password"
                ng-minlength="5"
                ng-maxlength="20"
                class="form-control input-lg" placeholder="Password" required>
                <span class="help-block" 
                ng-show="formregister.password.$error.required && !formregister.password.$pristine">
                Password cannot be blank
                </span>
                <span class="help-block"
                ng-show="formregister.password.$error.maxlength || formregister.password.$error.minlength 
                && !formregister.password.$pristine">
                Password must be 5-20 chars
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group" ng-class="
                {'has-error': formregister.pass2.$invalid && !formregister.pass2.$pristine,
                 'has-success': formregister.pass2.$valid}
                ">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" name="pass2" ng-model="registerForm.pass2"
                password-match="registerForm.password"
                class="form-control input-lg" placeholder="Verify Password" required>
                <span class="help-block"
                    ng-show="formregister.pass2.$error.required
                    && !formregister.pass2.$pristine">
                    Verify Password cannot be blank
                </span>
                <span class="help-block"
                    ng-show="formregister.pass2.$error.unique
                    && !formregister.pass2.$pristine">
                    Password is not match
                </span>
            </div>
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-xs-6">
            <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
            <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                <input type="checkbox" name="terms" ng-model="registerForm.terms" required>
                <span></span>
            </label>
        </div>
        <div class="col-xs-6 text-right">
            <button type="submit" ng-hide="loading3" ng-disabled="formregister.$invalid" ng-click="RegisterAuth(registerForm)" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
            <div ng-show="loading3"><i class="fa fa-spinner fa-2x fa-spin"></i></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 text-center">
            <small>Do you have an account?</small> <a href="javascript:void(0)" id="link-register" ng-click="action='login'"><small>Login</small></a>
        </div>
    </div>
</form><?php }} ?>
