<?php
/* Smarty version 3.1.40, created on 2022-05-14 06:38:05
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\_ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627f4e4d27de07_67872151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa5e2a8d07bb1c7cb11ea58044d09f75c2cb078d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\_ads.tpl',
      1 => 1638098303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627f4e4d27de07_67872151 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_master']->value) {?>

	<?php if ($_smarty_tpl->tpl_vars['_ads']->value && !in_array($_smarty_tpl->tpl_vars['page']->value,array("static","settings","admin"))) {?>
	    <div class="container mtb20">
	    	<!-- ads -->
	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_ads']->value, 'ads_unit');
$_smarty_tpl->tpl_vars['ads_unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
$_smarty_tpl->tpl_vars['ads_unit']->do_else = false;
?>
	            <div class="card">
	                <div class="card-header bg-transparent">
	                    <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

	                </div>
	                <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
	            </div>
	        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	        <!-- ads -->
	    </div>
	<?php }?>

<?php } else { ?>

	<?php if ($_smarty_tpl->tpl_vars['ads']->value) {?>
		<!-- ads -->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value, 'ads_unit');
$_smarty_tpl->tpl_vars['ads_unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
$_smarty_tpl->tpl_vars['ads_unit']->do_else = false;
?>
			<div class="card">
			    <div class="card-header bg-transparent">
			        <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

			    </div>
			    <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<!-- ads -->
	<?php }?>

<?php }
}
}
