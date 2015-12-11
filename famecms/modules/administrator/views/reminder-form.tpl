<form name="formReminder" ng-init="reminderForm = {}" id="form-reminder" class="form-horizontal form-bordered form-control-borderless" novalidate>
    <div class="form-group" ng-class="{literal}
            {'has-error': formReminder.reminder-email.$invalid && !formReminder.reminder-email.$pristine,
             'has-success': formReminder.reminder-email.$valid}
            {/literal}">
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
</form>