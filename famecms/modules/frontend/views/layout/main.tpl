<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <title>{$title} - VokalPlus</title>
  <link rel="stylesheet" href="{base_url('themes/vokalplus/stylesheets/app.css')}" />
  <script src="{base_url('themes/vokalplus/bower_components/modernizr/modernizr.js')}"></script>
</head>
<body class="default" ng-app="vokalplusApp">

    {include file="partials/header.tpl"}

    <!-- POPUP -->
    {include file="popup/login-popup.tpl"}
    {include file="popup/register-popup.tpl"}
    {include file="popup/register-last-popup.tpl"}
    {include file="popup/article-popup.tpl"}
    {include file="popup/message-popup.tpl"}
    
    <!-- Content -->
    {include file="$content"}
    {include file="partials/footer.tpl"}
    

    
    <div id="dropdown-overlay" class="hide"></div>

    <script src="{base_url('themes/vokalplus/bower_components/jquery/dist/jquery.min.js')}"></script>
    <script src="{base_url('themes/vokalplus/bower_components/iCheck/icheck.min.js')}"></script>
    <script src="{base_url('themes/vokalplus/bower_components/jquery-ui/jquery-ui.js')}"></script> 
    <script src="{base_url('themes/vokalplus/bower_components/jquery-ui/ui/autocomplete.js')}"></script> 
    <script src="{base_url('themes/vokalplus/bower_components/chosen/chosen.jquery.js')}"></script>
    <script src="{base_url('themes/vokalplus/bower_components/jquery-colorbox/jquery.colorbox-min.js')}"></script>
    <script src="{base_url('themes/vokalplus/bower_components/foundation/js/foundation.min.js')}"></script>
    <script src="{base_url('themes/vokalplus/js/app.js')}"></script>
    <!-- Angular.js, Bower and Custom JS code -->
    <script src="{base_url('node_modules/angular/angular.min.js')}"></script>
    

    <script src="{base_url('public/plugin/angular-foundation/mm-foundation-tpls-0.6.0.js')}"></script>

    <script src="{base_url('public/js/frontend/vokalplus/controller/general.js')}"></script>

    <script src="{base_url('public/js/frontend/vokalplus/directive/general.js')}"></script>
    <script>
      $(function() {
        var users = [
          {
            label   : "Alicia Keys",
            value   : "Alicia Keys",
            username  : "aliciakeys",
            avatar : "images/dummy/avatar-40-40-1.jpg"  
          },
          {
            label  : "Jennifer Lopez",
            value  : "Jennifer Lopez",
            username  : "jenniferlopez",
            avatar : "images/dummy/avatar-40-40-2.jpg"  
          },
          {
            label  : "Amy Search",
            value  : "Amy Search",
            username  : "amysearch",
            avatar : "images/dummy/avatar-40-40-3.jpg"  
          },
          {
            label  : "The Aats",
            value  : "The Aats",
            username  : "theaats",
            avatar : "images/dummy/avatar-40-40-4.jpg"  
          },
        ];
        $( ".vokalplus-userpicker-wrap" ).prepend('<div class="vokalplus-userpicker-placeholder"><span></span></div><div class="vokalplus-userpicker-typed"><span></span></div>');
        $( ".vokalplus-userpicker" ).autocomplete({
          minLength: 0,
          source: users,
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
              var suggestion  = ui.content[0].label;

              typed.text( input );
              placeholder.text( suggestion );                          
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
            .append( '<span class="userpicker-item"><img src="'+item.avatar+'" class="avatar"><span class="name">'+item.label+'</span></span>' )
            .appendTo( ul );
        };
    });   
    </script>
  </body>
</html>