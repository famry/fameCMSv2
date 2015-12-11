// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// Checkbox & Radio modification
/*$('input').iCheck({
	checkboxClass: 'icheckbox',
	radioClass: 'iradio',
	// increaseArea: '20%' // optional
});*/

// Search behavior
$('#top-navigation').on( 'click', '.search-toggle', function(e){
	e.preventDefault();

	// Init dropdown overlay
	init_dropdown_overlay( $(this) );

	// Close other toggle element
	$('.toggle-target').removeClass( 'toggled' );

	$(this).toggleClass( 'active' );

	$('#search-form').fadeToggle( function(){
		if( $('#search-form').is( ':visible' ) ){
			$('#search-form .input-text').focus();
		}
	});
});

$('#search-form .input-text').mouseout(function(){
	$('.search-toggle').removeClass( 'active' );
	$('#search-form').fadeOut();
});

// Use chosen for select
$('select').chosen({
	disable_search: true
});

// Reveal adjustment 
$('#account-register .register-account').submit( function( e ){
	e.preventDefault();

	$('#account-register-last-step').foundation( 'reveal', 'open' );
});

// Toggle Map
$('body').on( 'click', '.toggle-map', function(e){
	e.preventDefault();

	var toggle = $(this);
	var map = toggle.closest('.map');

	toggle.find('span').toggle();
	map.find('.map-content').toggle();
});

// Toggle button
$('body').on( 'click', '.toggle-button', function(e){
	e.preventDefault();

	var button = $(this);
	var target = button.attr( 'href' );

	// Init dropdown overlay
	init_dropdown_overlay( $(this) );

	// Close other toggle
	$('.toggle-target:not('+target+')').removeClass( 'toggled' );
	$('.search-toggle').removeClass('active');
	$('#search-form').fadeOut();

	// Toggling
	$(target).toggleClass( 'toggled' );
});

// Toggle card options
$('#primary').on( 'click', '.toggle-card-options, .card-options .close', function( e ){
	e.preventDefault();

	var toggle = $(this);
	var hentry = toggle.closest('.hentry');
	var options = hentry.find( '.card-options' );

	// Init dropdown overlay
	init_dropdown_overlay( $(this) );

	options.toggleClass( 'toggled' );
});

// Editor Selector
$('#content-type-selector').on( 'click', 'a', function(e){
	e.preventDefault();

	var nav = $(this);
	var target = nav.attr( 'href' );

	$('#content-type-selector a').removeClass('active');
	nav.addClass( 'active' );

	$('#editor form').removeClass( 'active' );
	$(target).addClass( 'active' );
});

// Get domain name
function get_hostname( url ) {
   var a 	= document.createElement('a');
    a.href 	= url;
    return a.hostname;
}

// Delete previewer
function delete_url_input( type ){
	// Hide previewer
	$('#preview-url-' + type).removeClass( 'show' );	

	// Empty preveiwer
	$('#preview-url-' + type +' .preview').empty();

	// Empty input
	$('#url-' + type).val( '' );

	// Display input
	$('#url-' + type).removeClass( 'hide' );

	// Display input button
	$('#url-'+ type +'-fetch').removeClass( 'hide' );	
}

// Post New Music
$('#url-music-fetch').on( 'click', function(e){
	e.preventDefault();

	var button = $(this);

    var url = $('#url-music').val();

    // Check if this url is soundcloud's url or not
    var hostname = get_hostname( url );

    if( hostname == 'soundcloud.com' ){

    	// Hide the input box
    	$('#url-music').addClass( 'hide' );

		// Hide this button
		button.addClass( 'hide' );

    	// Display loading state
    	$('#loading-url-music').addClass( 'toggled' );

    	// Fetching soundcloud oEmbed for embedding
    	$.getJSON( 'http://soundcloud.com/oembed', { url : url }).done(function( json ){
    		// @TODO verify that the track being pulled is song - not anything else

    		// Put the previewer
    		if( json.html.length > 0 ){
    			$('#preview-url-music .preview').html( json.html );

    			$('#preview-url-music .preview iframe').attr( 'height', 165 );

    			// Display previewer
    			$('#preview-url-music').addClass( 'show' );

		    	// Hiding loading state
		    	$('#loading-url-music').removeClass( 'toggled' );
    		}
    	}).fail( function( jqxhr, textStatus, error ){

    		alert( 'Fetching preview fails. Please try again.' );

    		// Displaying input
	    	$('#url-music').removeClass( 'hide' );
	    	button.removeClass( 'hide' );

	    	// Hiding loading state
	    	$('#loading-url-music').removeClass( 'toggled' );

    	});

    } else {
    	alert( 'You can only paste SoundCloud url to this box' );
    	$('#url-music').val( '' );
    }
});

// Post New Video
$('#url-video-fetch').on( 'click', function(e){

	var button = $(this);

    var url = $('#url-video').val();

    // Check if this url is soundcloud's url or not
    var hostname = get_hostname( url );

    if( hostname == 'www.youtube.com' ){

    	// Hide the input box
    	$('#url-video').addClass( 'hide' );

    	// Hide the button
    	button.addClass( 'hide' );

    	// Display loading state
    	$('#loading-url-video').addClass( 'toggled' );

    	// Fetching soundcloud oEmbed for embedding
    	$.getJSON( 'oembed.php', { url : url, type: 'video' }).done(function( json ){
    		// @TODO verify that the track being pulled is song - not anything else

    		// Put the previewer
    		if( json.html.length > 0 ){
    			$('#preview-url-video .preview').html( json.html );

    			$('#preview-url-video .preview iframe').attr({ 'height' : 499, 'width' : '100%' });

    			// Display previewer
    			$('#preview-url-video').addClass( 'show' );

		    	// Hiding loading state
		    	$('#loading-url-video').removeClass( 'toggled' );
    		}
    	}).fail( function( jqxhr, textStatus, error ){

    		alert( 'Fetching preview fails. Please try again.' );

    		// Displaying input
	    	$('#url-video').removeClass( 'hide' );
	    	
	    	// Display the button
	    	button.removeClass( 'hide' );

	    	// Hiding loading state
	    	$('#loading-url-video').removeClass( 'toggled' );

    	});

    } else {
    	alert( 'You can only paste YouTube url to this box' );
    	$('#url-video').val( '' );
    }
});

// Delete video / music
$('.preview-wrap').on( 'click', '.delete', function(e){
	e.preventDefault();

	delete_url_input( $(this).attr( 'data-type' ) );
});

// Search location
$('#editor').on( 'keypress', '#input-venue-address', function(e){
	if( e.keyCode == 13 ){
		e.preventDefault();
	}
});

// New Message
$('#compose-message').on( 'click', function(e){
	e.preventDefault();

	// Remove active state
	$('#conversation-picker a').removeClass('active');

	// Display new conversation picker list
	$('#new-conversation-list').removeClass('hide');

	// Empty conversation thread
	$('#conversation .chat').remove();

	// Enter compose new state
	$('#conversation-reply-form').addClass('post-new');

	// Move the cursor to "to" input
	$('#conversation-reply-to').focus();
});

// Calendar UX
if( $('.calendar-events').length > 0 ){
	$('.calendar-events').each(function(){
		var events 			= $(this);
		var events_count 	= events.find('.calendar-event').size();

		// Add more and improved UX for day which has more than 3 events
		if( events_count > 3 ){
			var events_hidden_count = events_count - 3;

			events.find('.calendar-event:gt(2)').addClass( 'hide' );
			events.append('<a class="calendar-event more" href="#"><span class="thumbnail">+'+events_hidden_count+'</span></a>');
		}
	});

	// Expand UX
	$('#primary').on( 'click', '.calendar-event.more', function(e){
		e.preventDefault();

		var more = $(this);
		var events = more.closest( '.calendar-events' );
		var wrap = more.closest('.calendar-column');

		$('body').append( '<div class="calendar-event-modal-background"></div>' );
		events.append('<a href="#" class="close-popup">Close</a>');
		wrap.toggleClass( 'expanded' );
	});

	// Close calendar events UX
	$('body').on( 'click', '.calendar-events .close-popup, .calendar-event-modal-background', function( e ){
		e.preventDefault();

		// Remove the added element
		$('.calendar-event-modal-background, .calendar-events .close-popup').remove();

		// Remove expanded state
		$('.calendar-column.expanded').removeClass('expanded');
	});

	// Event card
	$('#primary .calendar-event:not(.more)').on({
		mouseenter : function(){
			var cal_event 	= $(this);
			var cover_src 	= cal_event.attr( 'data-cover-src' );
			var author_name = cal_event.attr( 'data-author-name' );
			var author_href = cal_event.attr( 'data-author-src' );
			var event_href 	= cal_event.find( '.name' ).attr( 'href' );
			var event_name 	= cal_event.find( '.name' ).text();
			var event_card 	= $('#template-event-card').clone().html();

			// Make sure that there will be only one evert-card per calendar-event
			if( cal_event.find('.event-card').length > 0 ){
				return;
			}

			// Append the event card
			cal_event.append( event_card );

			// Add the data
			cal_event.find( '.cover' ).attr( 'src', cover_src );
			cal_event.find( '.event-card-title a').text( event_name );
			cal_event.find( '.author-url' ).attr( 'href', author_href );
			cal_event.find( '.author-url' ).text( author_name );
			cal_event.find( '.event-url' ).attr( 'href', event_href );
		},
		mouseleave : function(){
			var cal_event = $(this);
			cal_event.find( '.event-card' ).remove();
		}
	});
}

// Content control UX
$('.select-nav').each(function(){
	var select_nav 		= $(this);
	var active_label 	= select_nav.find( '.preview .copy' );
	var active_option 	= select_nav.find( '.options .active' ).text();

	active_label.text( active_option );
});

$('.select-nav .preview').click(function(e){
	e.preventDefault();
	var preview = $(this);

	// Init dropdown overlay
	init_dropdown_overlay( $(this) );	

	$('.select-nav .preview' ).each(function(){
		if( $(this).is( preview) ){
			$(this).closest('.select-nav').toggleClass( 'expanded' );
		} else {
			$(this).closest('.select-nav').removeClass( 'expanded' );
		}
	});
});

// Toggle profile options
$('.toggle-profile-options').click(function(e){
	e.preventDefault();

	// Init dropdown overlay
	init_dropdown_overlay( $(this) );	
	
	$(this).parent('.profile-options-wrap').toggleClass('active').find('.profile-options').toggleClass( 'hide' );	
});

// Toggle object options
$('body').on( 'click', '.toggle-object-options', function(e){
	e.preventDefault();

	// Init dropdown overlay
	init_dropdown_overlay( $(this) );

	$(this).parent('.object-options-wrap').toggleClass('active').find('.object-options').toggleClass( 'hide' );	
});

$('body').on( 'click', '.object-dropdown-overlay', function(e){
	$('#dropdown-overlay').trigger('click');
});

// Colorbox gallery
// $('.photo-gallery-item').colorbox({ rel : 'photo-gallery-item' });

// Dropdown Overlay
$('#dropdown-overlay').click(function(){
	var id = $(this).attr( 'data-trigger-id' )

	$( '#' + id ).trigger( 'click' );
	$(this).removeAttr( 'data-trigger-id' );
});

$('#top-navigation-dropdown-overlay').click(function(){
	$('#dropdown-overlay').trigger( 'click' );
});

// image upload preview mechanism
$('.upload-image-button').click(function(e){
	e.preventDefault();

	var id = $(this).attr( 'data-file-id' );

	$('#'+id).trigger('click');
});

$('.remove-image-button').click(function(e){
	e.preventDefault();

	var id = $(this).attr( 'data-file-id' );
	$('#'+id).val('');
	$('#'+id+'-preview').empty();
	$('#'+id+'-wrap').removeClass('active');
});

$('.upload-image-input').change(function(){

	var name 	= $(this).attr( 'name' );
	var preview = name + '-preview';

	if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+preview).html( '<img src="'+ e.target.result +'" />' );
        }

        reader.readAsDataURL(this.files[0]);
    }

    // Adding specific class for input wrapper
    if( $('input[name="'+name+'"]').val() && $('input[name="'+name+'"]').val() != '' ){
    	$('#'+name+'-wrap').addClass( 'active' );
    } else {
    	$('#'+name+'-wrap').removeClass( 'active' );
    }

});

function init_dropdown_overlay( trigger ){
	var id = trigger.attr( 'id' );
	var overlay_id = $('#dropdown-overlay').attr( 'data-trigger-id' );

	$('body').toggleClass( 'has-dropdown-overlay' );
	$('#dropdown-overlay').toggleClass( 'hide' ).attr( 'data-trigger-id', id );	

	if( id != overlay_id ){
		$('#dropdown-overlay').removeClass( 'hide' );
		$('body').addClass( 'has-dropdown-overlay' );
	}
}