<script type="text/ng-template" id="register-modal.tpl">
    <a class="close-reveal-modal" ng-click="cancel()">&#215;</a>

    <header class="header">
      <h2 class="site-name">VokalPlus</h2>

      <ul class="option">
        <li>
          <a ng-click="login_modal()">Login</a>
        </li>
        <li>
          <span class="or">Or</span>
          <a href="javascript:void(0)" class="active">Sign Up</a>
        </li>
      </ul>
    </header>
    
    <div class="body">
      <ul class="social-login">
        <li><a href="" class="login-facebook">Register With Facebook</a></li>
        <li><a href="" class="login-googleplus">Register With Google+</a></li>
      </ul>
      
      <div class="or-separator"><span>Or register with your email</span></div>
      
      <form name="registerForm" ng-init="dataRegister = {}" class="register-account">
        <p class="input-wrap">
        <label for="">Whats your email address?</label>
        <input type="email" name="email" ng-model="dataRegister.email" placeholder="Email Address"  required >
        <small ng-if="registerForm.email.$pending" class="error">Checking Email...</small>
        <small ng-show="registerForm.email.$error.required && !registerForm.email.$pristine" class="error">
          Email is required.
        </small>
        <small ng-show="registerForm.email.$error.email && !registerForm.email.$pristine" class="error">
          Enter a valid email.
        </small>
        <small ng-show="registerForm.email.$error.unique && !registerForm.email.$pristine" class="error">
          Email already exist.
        </small>
      </p>
      <p class="input-wrap row">
        <span class="columns small-6 left">
          <label for="">Choose a password</label>
          <input type="password" name="password" id="pw1" ng-model="dataRegister.password" placeholder="Your Password" required>
          <small ng-show="registerForm.password.$error.required && !registerForm.password.$pristine" class="error">
            Password is required.
          </small>
        </span>
        <span class="columns small-6 right">
          <label for="">Re-type password</label>
          <input type="password" name="pass_conf" id="pw2" placeholder="Re-Type your Password" ng-model="dataRegister.pass_conf" required password-match="dataRegister.password">
          <small ng-show="registerForm.pass_conf.$error.unique && !registerForm.pass_conf.$pristine" class="error">
            Password is not match.</small>
          </span>
      </p>
      <p class="agree-wrap">
        <input type="checkbox" name="termsAgree" ng-model="dataRegister.termsAgree" id="register-agreement" required>
        <label for="register-agreement"> I agree to the Terms of Use and Privacy Policy</label>
       </p>
      <p class="submit-wrap">
        <button type="submit" value="Register" class="primary wider" ng-click="sendForm(dataRegister)" ng-disabled="registerForm.$invalid">Register</button>
      </p>
      </form>          
    </div><!-- .body -->
</script>