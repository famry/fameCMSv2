 <script type="text/ng-template" id="login-modal.tpl">
    <a class="close-reveal-modal" ng-click="cancel()">&#215;</a>
    <header class="header">
      <h2 class="site-name">VokalPlus</h2>

      <ul class="option">
        <li>
          <span class="or">Or</span>
          <a href="javascript:void(0)" class="active">Login</a>
        </li>
        <li>
          <a ng-click="register_modal()">Sign Up</a>
        </li>
      </ul>
    </header>
    
    <div class="body">
      <ul class="social-login">
        <li><a href="" class="login-facebook">Login With Facebook</a></li>
        <li><a href="" class="login-googleplus">Login With Google+</a></li>
      </ul>
      
      <div class="or-separator"><span>Or login with your email</span></div>
      
      <form name="loginForm" ng-init="dataLogin = {}" class="login-account">
        <p class="input-wrap has-icon email-wrap">
          <span class="icon"></span>
          <input type="email" name="email" ng-model="dataLogin.email" placeholder="Email Address" required>
          <small ng-show="loginForm.email.$error.required && !loginForm.email.$pristine" class="error">Email is required.</small>
          <small ng-show="loginForm.email.$error.email && !loginForm.email.$pristine" class="error">Enter a valid email.</small>
        </p>
        <p class="input-wrap has-icon password-wrap">
          <span class="icon"></span>
          <input type="password" name="password" ng-model="dataLogin.password" placeholder="Password" required>
          <small ng-show="loginForm.password.$invalid && !loginForm.password.$pristine" class="error">Password required</small>
        </p>
        <p class="remember-wrap">
          <label for="login-remember-me"><input type="checkbox" ng-model="dataLogin.remember" id="login-remember-me"> Remember Me</label>

          <a href="" class="forgot-password">Forgot Password</a>
        </p>
        <p class="submit-wrap">
          <button type="submit" value="Login" class="primary wider" ng-click="sendForm(dataLogin)" ng-disabled="loginForm.$invalid">Login</button>
        </p>
      </form>          
    </div><!-- .body -->
</script>