<div id="post-new-image" class="modal-app reveal-modal" data-reveal>
    <a class="close-reveal-modal">&#215;</a>

	<div class="modal-app-wrap">
		<header class="app-header">
			<span class="icon image"></span>
			<h1 class="app-title">Add Image</h1>
		</header>

		<div class="app-body" id="add-image-body">
			<form action="" id="form-add-image">
				<p>
					<label for="add-image-upload-image">Upload Image</label>

					<span id="add-image-upload-image-wrap">
						<span class="cancel-action">
							<a href="#" class="button delete remove-image-button" data-file-id="add-image-upload-image">Delete</a>	 							
						</span>
						<input type="file" id="add-image-upload-image" name="add-image-upload-image" class="upload-image-input">
						<button class="button upload-image-button" id="add-image-upload-image-button" data-file-id="add-image-upload-image">Browse Image</button>
						<span id="add-image-upload-image-preview"></span>
					</span>
				</p>
				<p>
					<label for="add-image-image-title">Image Title</label>
					<input type="text" class="add-image-input" id="add-image-image-title">
				</p>
				<p>
					<label for="add-image-image-description">Image Description</label>
				<textarea name="" id="add-image-image-description" cols="30" rows="5"></textarea>
				</p>
				<p class="submit-wrap">
					<input type="submit" class="button primary" value="Save">
				</p>
			</form>
		</div>
	</div><!-- .modal-app-wrap -->
</div><!-- #template-content-image.content-image.reveal-modal -->