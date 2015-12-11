<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:30:14
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\administrator\views\reminder-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2506555f4c396bcaf91-45980565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74850ec81fa79a3161e4bc401eeac0639e414747' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\administrator\\views\\reminder-form.tpl',
      1 => 1439050950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2506555f4c396bcaf91-45980565',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c396bd8e99_90414489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c396bd8e99_90414489')) {function content_55f4c396bd8e99_90414489($_smarty_tpl) {?><form name="formReminder" ng-init="reminderForm = {}" id="form-reminder" class="form-horizontal form-bordered form-control-borderless" novalidate>
    <div class="form-group" ng-class="
            {'has-error': formReminder.reminder-email.$invalid && !formReminder.reminder-email.$pristine,
             'has-success': formReminder.reminder-email.$valid}
            ">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="text" name="reminder-email" ng-model="reminderForm.email" class="form-control input-lg" placeholder="Email" required>
            </div>
            <span class="help-block" ng-show="formReminder.reminder-email.$error.required && !formReminder.reminder-email.$pristine">Password cannot be blank</span>
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-xs-12 text-right">
            <button ng-hide="loading2" type="submit" ng-disabled="formReminder.$invalid" ng-click="RememberMe(reminderForm)" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Reset Password</button>
            <div ng-show="loading2"><i class="fa fa-spinner fa-2x fa-spin"></i></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 text-center">
            <small>Did you remember your password?</small> <a href="javascript:void(0)" ng-click="action='login'" id="link-reminder"><small>Login</small></a>
        </div>
    </div>
</form><?php }} ?>
