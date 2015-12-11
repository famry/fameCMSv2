<div id="edit-image" class="modal-app reveal-modal" data-reveal>
    <a class="close-reveal-modal">&#215;</a>

	<div class="modal-app-wrap">
		<header class="app-header">
			<span class="icon image"></span>
			<h1 class="app-title">Edit Image</h1>
		</header>

		<div class="app-body" id="edit-image-body">
			<form action="" id="form-edit-image">
				<p>
					<label for="edit-image-upload-image">Upload Image</label>

					<span id="edit-image-upload-image-wrap" class="active">
						<span class="cancel-action">
							<a href="#" class="button delete remove-image-button" data-file-id="edit-image-upload-image">Delete</a>
						</span>
						<input type="file" id="edit-image-upload-image" name="edit-image-upload-image" class="upload-image-input">
						<button class="button upload-image-button" id="edit-image-upload-image-button" data-file-id="edit-image-upload-image">Browse Image</button>
						<span id="edit-image-upload-image-preview">
							<img src="images/dummy/post-image-600-400-1.jpg" alt="">
						</span>
					</span>
				</p>
				<p>
					<label for="edit-image-image-title">Image Title</label>
					<input type="text" class="edit-image-input" id="edit-image-image-title" value="Penguin of Madagascar">
				</p>
				<p>
					<label for="edit-image-image-description">Image Description</label>
				<textarea name="" id="edit-image-image-description" cols="30" rows="5">Marvels mighty mutants go worldwide and beyond in this series following Cyclops, Wolverine, Beast, Emma Frost and more in their astonishing adventures. This is where youll find all the big-time action, major storylines and iconic Spider-Man magic youd come to expect from the Wall-Crawler.</textarea>
				</p>
				<p class="submit-wrap">
					<a href="#" class="button delete">Delete</a>
					<input type="submit" class="button primary" value="Save">
				</p>
			</form>
		</div>
	</div><!-- .modal-app-wrap -->
</div><!-- #template-content-image.content-image.reveal-modal -->