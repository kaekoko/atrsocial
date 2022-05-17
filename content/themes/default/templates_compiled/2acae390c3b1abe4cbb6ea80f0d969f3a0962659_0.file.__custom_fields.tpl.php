<?php
/* Smarty version 3.1.40, created on 2022-05-14 07:37:23
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\__custom_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627f5c338d8672_06961653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2acae390c3b1abe4cbb6ea80f0d969f3a0962659' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\__custom_fields.tpl',
      1 => 1642248244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627f5c338d8672_06961653 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_registration']->value) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_custom_fields']->value, 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
        <div class="form-group">
            <label class="form-control-label"><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
 <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>*<?php }?></label>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox") {?>
                <input name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" type="text" class="form-control" <?php if (!$_smarty_tpl->tpl_vars['_search']->value) {?>placeholder="<?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textarea") {?>
                <textarea name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" <?php if (!$_smarty_tpl->tpl_vars['_search']->value) {?>placeholder="<?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>></textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "selectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['_search']->value) {?>
                        <option selected value="any"><?php echo __("Any");?>
</option>
                    <?php } else { ?>
                        <option selected value="none"><?php echo __("Select");?>
 <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</option>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
[]" class="form-control" multiple <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['description'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>
                <span class="form-text">
                    <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['description']);?>

                </span>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_custom_fields']->value, 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
	    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?>form-row<?php }?>">
	    	<label class="form-control-label <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?>col-md-3<?php }?>"><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
 <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>*<?php }?></label>
            <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?><div class="col-md-9"><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox") {?>
                <input type="text" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textarea") {?>
                <textarea name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "selectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
                    <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == '') {?>selected<?php }?> value="none"><?php echo __("Select");?>
 <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
[]" class="form-control" multiple <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option <?php if ((isset($_smarty_tpl->tpl_vars['custom_field']->value['value'])) && in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['custom_field']->value['value'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['description']) {?>
                <span class="form-text">
                    <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['description']);?>

                </span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?></div><?php }?>
	    </div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
