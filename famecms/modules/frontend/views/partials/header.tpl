<div id="top-navigation" class="contain-to-grid sticky" ng-controller="HeaderController">
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">VokalPlus</a></h1>
      </li>
       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        
        
        <li class="has-or"><a ng-click="login_modal()">Login</a> <span class="or">Or</span></li>
        <li><a ng-click="register_modal()">Sign Up</a></li>

                    </ul>

      <ul class="search-wrap">
        <li>
            <a href="#" class="search-toggle" id="toggle-search-top-nav"><span class="search-toggle-icon">Search</span><span class="search-toggle-tail"></span></a>
        </li>
      </ul>

      <!-- Left Nav Section -->
      <ul class="left">
        <li class="active"><a href="#">Explore</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Directory</a></li>
        <li><a href="#">Store</a></li>
      </ul>
    </section>

    <div id="top-navigation-dropdown-overlay"></div>
  </nav>
</div>
<form action="" id="search-form">
  <div class="row">
    <div class="small-12 columns">
      <input type="text" class="input-text" placeholder="Type keywords and press enter...">
      <input type="submit" value="search" class="submit">          
    </div>
  </div>
</form>