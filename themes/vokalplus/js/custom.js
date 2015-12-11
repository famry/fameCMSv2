  $(document).ready(function() {
 $(function() {
            $( ".vokalplus-userpicker-wrap" ).prepend('<div class="vokalplus-userpicker-placeholder"><span></span></div><div class="vokalplus-userpicker-typed"><span></span></div>');
            $( ".vokalplus-userpicker" ).autocomplete({
              minLength: 0,
              source: '<?php echo SITE_URL_PATH.'member/getuser'?>',
              response: function( event, ui ){
                var picker      = $(this);
                var wrap        = picker.closest( '.vokalplus-userpicker-wrap' );
                var typed       = wrap.find( '.vokalplus-userpicker-typed span' );
                var placeholder = wrap.find( '.vokalplus-userpicker-placeholder span' );
                var ui_autocomplete = $('.ui-autocomplete.ui-widget-content' );

                // Update background placeholder & typed area
                if( typeof ui.content[0] === 'undefined' ){
                  typed.empty();
                  placeholder.empty();                          
                } else {
                  var input       = picker.val();
                  //var suggestion  = ui.content[0].label;

                  typed.text( input );
                  //placeholder.text( suggestion );                          
                }

              },
              focus: function( event, ui ){
                var picker      = $(this);
                var wrap        = picker.closest( '.vokalplus-userpicker-wrap' );
                var typed       = wrap.find( '.vokalplus-userpicker-typed span' );
                var placeholder = wrap.find( '.vokalplus-userpicker-placeholder span' );

                // Empty the suggestion
                typed.empty();
                placeholder.empty();                        
              }
            }).autocomplete( "instance" )._renderItem = function( ul, item ){
              // return $( "li" ).append( "<a><span class='user-avatar'><img src='"+ item.avatar +"'></span><span class='user-name'>" + item.label + "</span></a>" );
              return $( "<li class='userpicker-item-wrap'>" )
                .attr( "data-value", item.value )
                .append( '<span class="userpicker-item"><img src="'+item.avatar+'" width="45" height="45" class="avatar"><span class="name">'+item.label+'</span></span>' )
                .appendTo( ul );
            };
        });   
}