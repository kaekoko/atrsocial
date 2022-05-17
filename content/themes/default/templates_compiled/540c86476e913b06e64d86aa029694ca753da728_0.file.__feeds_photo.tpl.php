<?php
/* Smarty version 3.1.40, created on 2022-05-14 09:32:40
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\__feeds_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627f77388a82b9_84441631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '540c86476e913b06e64d86aa029694ca753da728' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\__feeds_photo.tpl',
      1 => 1638098303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627f77388a82b9_84441631 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>col-4<?php } else { ?>col-6 col-md-4 col-lg-2<?php }?> <?php if ($_smarty_tpl->tpl_vars['photo']->value['blur']) {?>x-blured<?php }?>">
    <a class="pg_photo <?php if (!$_smarty_tpl->tpl_vars['_small']->value) {?>large<?php }?> js_lightbox" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" data-context="<?php echo $_smarty_tpl->tpl_vars['_context']->value;?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
);">
    	<?php if (!$_smarty_tpl->tpl_vars['_small']->value && ($_smarty_tpl->tpl_vars['_manage']->value || $_smarty_tpl->tpl_vars['photo']->value['manage'])) {?>
	    	<div class="pg_photo-btn">
	            <button type="button" class="close js_delete-photo" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
'>
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
        <?php }?>
    </a>
</div><?php }
}
