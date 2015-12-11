 <form  name="formlogin" ng-init="loginForm = {}" id="form-login" class="form-horizontal form-bordered form-control-borderless" novalidate>
<div class="col-xs-12" ng-show="loginMsg">
<div class="alert alert-danger">
    <h4><i class="fa fa-times-circle"></i> Error</h4> <span ng-bind="loginMsg"></span></a>!
</div>
</div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group" ng-class="{literal}
                            {'has-error': formlogin.username.$invalid && !formlogin.username.$pristine,
                             'has-success': formlogin.username.$valid}
                            {/literal}">
                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                <input type="text" name="username" ng-model="loginForm.username" class="form-control input-lg" placeholder="Username" required>
                <span class="help-block" ng-show="formlogin.username.$error.required && !formlogin.username.$pristine">Username cannot be blank</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group" ng-class="{literal}
                            {'has-error': formlogin.pass.$invalid && !formlogin.pass.$pristine,
                             'has-success': formlogin.pass.$valid}
                            {/literal}">
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
            {if 'forget_password'|getDataSetting eq '1'}
            <a href="javascript:void(0)" ng-click="action='reminder'" id="link-reminder-login"><small>Forgot password?</small></a> - {/if}
             {if 'register_admin'|getDataSetting eq '1'}
            <a href="javascript:void(0)" ng-click="action='register'" id="link-register-login"><small>Create a new account</small></a> {/if}<!-- -
            <a href="javascript:void(0)" ng-click="action='resend-code'" id="link-register-login"><small>Resend Activation code</small></a>-->
        </div>
    </div>
</form>