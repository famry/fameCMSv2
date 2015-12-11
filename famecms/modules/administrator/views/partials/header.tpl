 <header class="navbar navbar-default navbar-fixed-top">
    <!-- Left Header Navigation -->
    <ul class="nav navbar-nav-custom">
        <!-- Main Sidebar Toggle Button -->
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                <i class="fa fa-bars fa-fw"></i>
            </a>
        </li>
        <!-- END Main Sidebar Toggle Button -->
    </ul>
    <!-- END Left Header Navigation -->

    <!-- Search Form -->
    <form action="page_ready_search_results.html" method="post" class="navbar-form-custom" role="search">
        <div class="form-group">
            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
        </div>
    </form>
    <!-- END Search Form -->

    <!-- Right Header Navigation -->
    <ul class="nav navbar-nav-custom pull-right">
        <!-- User Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
            <img ng-if="dataadmin.display_picture == ''" style="-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;height:40px;width:40px;" src="{base_url('themes/proui/img/placeholders/avatars/avatar2.jpg')}">
            <img ng-if="dataadmin.display_picture !=''" style="-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;height:40px;width:40px;" src="{base_url()}{literal}{{dataadmin.display_picture}}{/literal}">
            <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                <li class="dropdown-header text-center">Account</li>
                <li>
                    <a href="page_ready_timeline.html">
                        <i class="fa fa-clock-o fa-fw pull-right"></i>
                        <span class="badge pull-right">10</span>
                        Updates
                    </a>
                    <a href="page_ready_inbox.html">
                        <i class="fa fa-envelope-o fa-fw pull-right"></i>
                        <span class="badge pull-right">5</span>
                        Messages
                    </a>
                    <a href="page_ready_pricing_tables.html"><i class="fa fa-magnet fa-fw pull-right"></i>
                        <span class="badge pull-right">3</span>
                        Subscriptions
                    </a>
                    <a href="page_ready_faq.html"><i class="fa fa-question fa-fw pull-right"></i>
                        <span class="badge pull-right">11</span>
                        FAQ
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{base_url('administrator/setting/profile')}">
                        <i class="fa fa-user fa-fw pull-right"></i>
                        Profile
                    </a>
                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                    <a href="#modal-user-settings" data-toggle="modal">
                        <i class="fa fa-cog fa-fw pull-right"></i>
                        Settings
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                    <a href="{base_url('administrator/logout')}"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                </li>
                
            </ul>
        </li>
        <!-- END User Dropdown -->
    </ul>
    <!-- END Right Header Navigation -->
</header>
				