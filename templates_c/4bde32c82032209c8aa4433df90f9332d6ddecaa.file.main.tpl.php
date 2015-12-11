<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 02:29:59
         compiled from "C:\xampp\htdocs\fame\default\famecms\modules\frontend\views\layout\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1929355f4c38703f097-81652729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bde32c82032209c8aa4433df90f9332d6ddecaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame\\default\\famecms\\modules\\frontend\\views\\layout\\main.tpl',
      1 => 1439152479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1929355f4c38703f097-81652729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f4c3871a9b41_02083200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4c3871a9b41_02083200')) {function content_55f4c3871a9b41_02083200($_smarty_tpl) {?><!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - VokalPlus</title>
  <link rel="stylesheet" href="<?php echo base_url('themes/vokalplus/stylesheets/app.css');?>
" />
  <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/bower_components/modernizr/modernizr.js');?>
"><?php echo '</script'; ?>
>
</head>
<body class="default" ng-app="vokalplusApp">

    <?php echo $_smarty_tpl->getSubTemplate ("partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!-- POPUP -->
    <?php echo $_smarty_tpl->getSubTemplate ("popup/login-popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("popup/register-popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("popup/register-last-popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("popup/article-popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("popup/message-popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <!-- Content -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    

    
    <div id="dropdown-overlay" class="hide"></div>

    <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/bower_components/jquery/dist/jquery.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/bower_components/iCheck/icheck.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/bower_components/jquery-ui/jquery-ui.js');?>
"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/bower_components/jquery-ui/ui/autocomplete.js');?>
"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/bower_components/chosen/chosen.jquery.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/bower_components/jquery-colorbox/jquery.colorbox-min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/bower_components/foundation/js/foundation.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url('themes/vokalplus/js/app.js');?>
"><?php echo '</script'; ?>
>
    <!-- Angular.js, Bower and Custom JS code -->
    <?php echo '<script'; ?>
 src="<?php echo base_url('node_modules/angular/angular.min.js');?>
"><?php echo '</script'; ?>
>
    

    <?php echo '<script'; ?>
 src="<?php echo base_url('public/plugin/angular-foundation/mm-foundation-tpls-0.6.0.js');?>
"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo base_url('public/js/frontend/vokalplus/controller/general.js');?>
"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo base_url('public/js/frontend/vokalplus/directive/general.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>
  </body>
</html><?php }} ?>
