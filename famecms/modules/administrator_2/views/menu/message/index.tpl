 <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-envelope"></i>{$page_desc}
                            </h1>
                        </div>
 </div>
<!-- Inbox Content -->
<div class="row" ng-controller="MessageCtrl">
	<!-- Inbox Menu -->
	<div class="col-sm-4 col-lg-3">
		<!-- Menu Block -->
		<div class="block full">
			<!-- Menu Title -->
			<div class="block-title clearfix">
				<div class="block-options pull-right">
					<a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
				</div>
				<div class="block-options pull-left">
					<a ng-click="action = 'compose'" class="btn btn-alt btn-sm btn-default"><i class="fa fa-pencil"></i> Compose Message</a>
				</div>
			</div>
			<!-- END Menu Title -->

			<!-- Menu Content -->
			<ul class="nav nav-pills nav-stacked">
				<li>
					<a ng-click="action = 'inbox'" href="javascript:void(0)">
						<span class="badge pull-right">5</span>
						<i class="fa fa-angle-right fa-fw"></i> <strong>Inbox</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<span class="badge pull-right">10</span>
						<i class="fa fa-angle-right fa-fw"></i> <strong>Starred</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<i class="fa fa-angle-right fa-fw"></i> <strong>Sent</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<span class="badge pull-right">2</span>
						<i class="fa fa-angle-right fa-fw"></i> <strong>Drafts</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<i class="fa fa-angle-right fa-fw"></i> <strong>Archive</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<i class="fa fa-angle-right fa-fw"></i> <strong>Spam</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<i class="fa fa-angle-right fa-fw"></i> <strong>Trash</strong>
					</a>
				</li>
			</ul>
			<!-- END Menu Content -->
		</div>
		<!-- END Menu Block -->

		<!-- Tags Block -->
		<div class="block full">
			<!-- Tags Title -->
			<div class="block-title">
				<div class="block-options pull-right">
					<a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Add Tag"><i class="fa fa-plus"></i></a>
				</div>
				<h2> <i class="fa fa-tags"></i> User <strong>Tags</strong></h2>
			</div>
			<!-- END Tags Title -->

			<!-- Tags Content -->
			<ul class="nav nav-pills nav-stacked">
				<li>
					<a href="javascript:void(0)">
						<span class="badge pull-right">1680</span>
						<i class="fa fa-tag fa-fw text-success"></i> <strong>Work</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<span class="badge pull-right">350</span>
						<i class="fa fa-tag fa-fw text-warning"></i> <strong>Friends</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<span class="badge pull-right">651</span>
						<i class="fa fa-tag fa-fw text-danger"></i> <strong>Projects</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<span class="badge pull-right">156</span>
						<i class="fa fa-tag fa-fw text-info"></i> <strong>For Later</strong>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<span class="badge pull-right">296</span>
						<i class="fa fa-tag fa-fw text-muted"></i> <strong>Sites</strong>
					</a>
				</li>
			</ul>
			<!-- END Tags Content -->
		</div>
		<!-- END Tags Block -->

		<!-- Account Stats Block -->
		<div class="block">
			<!-- Account Status Title -->
			<div class="block-title">
				<div class="block-options pull-right">
					<span class="label label-warning">70%</span>
				</div>
				<h2><i class="fa fa-user"></i> Account <strong>Status</strong></h2>
			</div>
			<!-- END Account Status Title -->

			<!-- Account Stats Content -->
			<div class="row block-section text-center">
				<div class="col-xs-12">
					<div class="pie-chart block-section" data-percent="70" data-line-width="2" data-bar-color="#e67e22" data-track-color="#ffffff">
						<img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="pie-avatar img-circle">
					</div>
				</div>
			</div>
			<table class="table table-borderless table-striped table-vcenter">
				<tbody>
					<tr>
						<td class="text-right" style="width: 50%;"><strong>Active Plan</strong></td>
						<td>Business <a href="page_ready_pricing_tables.html" data-toggle="tooltip" title="Upgrade to VIP"><i class="fa fa-arrow-up"></i></a></td>
					</tr>
					<tr>
						<td class="text-right"><strong>Plan Valid</strong></td>
						<td><span class="text-danger"><strong>5</strong> days left</span></td>
					</tr>
					<tr>
						<td class="text-right"><strong>Storage Usage</strong></td>
						<td class="text-warning"><strong>21</strong> of <strong>30</strong> GB</td>
					</tr>
				</tbody>
			</table>
			<!-- END Account Status Content -->
		</div>
		<!-- END Account Status Block -->

		<!-- Online Users Block -->
		<div class="block">
			<!-- Online Users Title -->
			<div class="block-title">
				<h2><i class="fa fa-circle text-success"></i> Online <strong>Users</strong></h2>
			</div>
			<!-- END Online Users Title -->

			<!-- Online Users Content -->
			<div class="row text-center">
				<div class="col-xs-6 block-section">
					<a href="page_ready_user_profile.html">
						<img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
					</a>
				</div>
				<div class="col-xs-6 block-section">
					<a href="page_ready_user_profile.html">
						<img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
					</a>
				</div>
				<div class="col-xs-6 block-section">
					<a href="page_ready_user_profile.html">
						<img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
					</a>
				</div>
				<div class="col-xs-6 block-section">
					<a href="page_ready_user_profile.html">
						<img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
					</a>
				</div>
			</div>
			<!-- END Online Users Content -->
		</div>
		<!-- END Online Users Block -->
	</div>
	<!-- END Inbox Menu -->
	<div ng-show="action == 'inbox'">
	{include file="menu/message/inbox.tpl"}
	</div>
	<div ng-show="action == 'compose'">
	{include file="menu/message/compose.tpl"}
	</div>
	<div ng-show="action == 'view'">
	{include file="menu/message/view_message.tpl"}
	</div>
</div>
<!-- END Inbox Content -->