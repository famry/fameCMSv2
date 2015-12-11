<div id="edit-profile" class="modal-app reveal-modal" data-reveal>
    <a class="close-reveal-modal close-popup">&#215;</a>

<div class="modal-app-wrap">
      <header class="app-header">
        <span class="icon profile"></span>
        <h1 class="app-title">Edit Profile</h1>
      </header>

      <div class="app-body" id="edit-profile-body">
      	<form action="" id="form-edit-profile">
      		<p>
      			<label for="edit-profile-picture">Picture</label>
      			<span id="edit-profile-picture-preview" class="file-upload-preview"></span>
      			<input type="file" name="edit-profile-picture" id="edit-profile-picture" class="upload-image-input">
      			<button id="edit-profile-picture-button" class="file-upload-button upload-image-button" data-file-id="edit-profile-picture">Change Picture</button>
      		</p>
      		<p>
      			<label for="edit-profile-name">Name</label>
      			<input type="text" class="edit-profile-text" id="edit-profile-name">
      		</p>
      		<p>
      			<label for="edit-profile-username">Username</label>
      			<span id="edit-profile-username-wrap">
      				<span id="edit-profile-username-prefix">www.vokalplus.com/</span>
      				<input type="text" id="edit-profile-username" value="hawking">
      			</span>
      		</p>
      		<p>
      			<label for="edit-profile-bio">About You | <span id="edit-profile-bio-count">0</span> characters</label>
      			<textarea name="" id="edit-profile-bio" cols="30" rows="5"></textarea>
      		</p>
      		<p>
      			<label for="edit-profile-location">Location</label>
      			<input type="text" id="edit-profile-location" class="edit-profile-text">
      		</p>
      		<p>
      			<label for="">Website &amp; Social Media Link</label>
      		</p>
      		<p class="has-icon">
      			<span class="icon facebook"></span>
      			<input type="text" class="edit-profile-text" value="http://facebook.com/aaskaria">
      		</p>
      		<p class="has-icon">
      			<span class="icon twitter"></span>
      			<input type="text" class="edit-profile-text" value="http://twitter.com/aaskaria">
      		</p>
      		<p class="has-icon">
      			<span class="icon googleplus"></span>
      			<input type="text" class="edit-profile-text" value="http://google.com/+/aaskaria">
      		</p>

      		<p class="submit-wrap">
      			<input type="submit" class="submit button primary" value="Save Profile">
      		</p>
      	</form>
      </div><!-- .app-body#edit-profile-body -->
</div>			
</div><!-- #edit-profile.reveal-modal -->