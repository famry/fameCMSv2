/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */
//var site = "http://pilates.co.id/demo/";
var site = "http://localhost/php/kiara/";
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.allowedContent = true;
	config.filebrowserBrowseUrl = site+'assets/plugins/kcfinder/browse.php?opener=ckeditor&type=files';
   	config.filebrowserImageBrowseUrl = site+'assets/plugins/kcfinder/browse.php?opener=ckeditor&type=images';
   	config.filebrowserFlashBrowseUrl = site+'assets/plugins/kcfinder/browse.php?opener=ckeditor&type=flash';
   	config.filebrowserUploadUrl = site+'assets/plugins/kcfinder/upload.php?opener=ckeditor&type=files';
   	config.filebrowserImageUploadUrl = site+'assets/plugins/kcfinder/upload.php?opener=ckeditor&type=images';
   	config.filebrowserFlashUploadUrl = site+'assets/plugins/kcfinder/upload.php?opener=ckeditor&type=flash';
};
