<?php
/* Smarty version 3.1.40, created on 2022-05-14 06:38:25
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627f4e61ef3c10_45449141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a38f3f94cae01c3dd326aab39a49829e98650c2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\_no_data.tpl',
      1 => 1638098303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_627f4e61ef3c10_45449141 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no data -->
<div class="text-center text-muted">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"96px",'height'=>"96px"), 0, false);
?>
    <div class="text-md">
        <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold;"><?php echo __("No data to show");?>
</span>
    </div>
</div>
<!-- no data --><?php }
}
