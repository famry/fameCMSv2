<!-- Compose Message List -->
<div class="col-sm-8 col-lg-9">
	<!-- Compose Message Block -->
	<div class="block">
		<!-- Compose Message Title -->
		<div class="block-title">
			<div class="block-options pull-right">
				<a href="javascript:void(0)" id="cc-input-btn" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show Cc field"><i class="fa fa-plus"></i> Cc</a>
				<a href="javascript:void(0)" id="bcc-input-btn"  class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show Bcc field"><i class="fa fa-plus"></i> Bcc</a>
			</div>
			<h2>Compose <strong>Message</strong></h2>
		</div>
		<!-- END Compose Message Title -->

		<!-- Compose Message Content -->
		<form action="page_ready_inbox_compose.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
			<div class="form-group">
				<label class="col-md-3 col-lg-2 control-label" for="compose-to">To</label>
				<div class="col-md-9 col-lg-10">
					<input type="email" id="compose-to" name="compose-to" class="form-control form-control-borderless" placeholder="Where to?">
				</div>
			</div>
			<div id="cc-input" class="form-group display-none">
				<label class="col-md-3 col-lg-2 control-label" for="compose-to-cc">Cc</label>
				<div class="col-md-9 col-lg-10">
					<input type="email" id="compose-to-cc" name="compose-to-cc" class="form-control form-control-borderless" placeholder="Enter Cc emails..">
				</div>
			</div>
			<div id="bcc-input" class="form-group display-none">
				<label class="col-md-3 col-lg-2 control-label" for="compose-to-bcc">Bcc</label>
				<div class="col-md-9 col-lg-10">
					<input type="email" id="compose-to-bcc" name="compose-to-bcc" class="form-control form-control-borderless" placeholder="Enter Bcc emails..">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 col-lg-2 control-label" for="compose-subject">Subject</label>
				<div class="col-md-9 col-lg-10">
					<input type="email" id="compose-subject" name="compose-subject" class="form-control form-control-borderless" placeholder="Your subject..">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 col-lg-2 control-label" for="compose-message">Message</label>
				<div class="col-md-9 col-lg-10">
					<textarea id="compose-message" name="compose-message" rows="20" class="form-control textarea-editor" placeholder="Your message.."></textarea>
				</div>
			</div>
			<div class="form-group form-actions">
				<div class="col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2">
					<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-share"></i> Send</button>
					<button type="button" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i> Save Draft</button>
				</div>
			</div>
		</form>
		<!-- END Compose Message Content -->
	</div>
	<!-- END Compose Message Block -->
</div>
<!-- END Compose Message -->