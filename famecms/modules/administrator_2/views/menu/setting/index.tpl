 <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-table"></i>{$page_desc}
                            </h1>
                        </div>
 </div>
  <!-- Mini Top Stats Row -->
                    <div ng-controller="SettingCtrl">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a ng-click="GeneralSettingModal()"  href="javascript:void(0)" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <h3 class="widget-content text-right animation-pullDown">
                                        General <strong>Setting</strong><br>
                                        <small>Manage your basic web setting here</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a ng-click="CustomSettingModal()" href="javascript:void(0)" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <h3 class="widget-content text-right animation-pullDown">
                                        Custom <strong>Setting</strong>
                                        <small>Manage your custom setting here</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                         <div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a data-toggle="modal" data-target="#socmed-modal"  href="javascript:void(0)" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <h3 class="widget-content text-right animation-pullDown">
                                        Social <strong>Media</strong>
                                        <small>Manage your social media here</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
						<div class="col-sm-6 col-lg-3">
                            <!-- Widget -->
                            <a href="page_comp_gallery.html" class="widget widget-hover-effect1">
                                <div class="widget-simple">
                                    <h3 class="widget-content text-right animation-pullDown">
                                        SEO <strong>Tools</strong>
                                        <small>Manage your social media here</small>
                                    </h3>
                                </div>
                            </a>
                            <!-- END Widget -->
                        </div>
                    </div>
                    <!-- END Mini Top Stats Row -->
					{include file="menu/setting/general.tpl"}
					{include file="menu/setting/custom.tpl"}
					{include file="menu/setting/socmed.tpl"}
                    </div>