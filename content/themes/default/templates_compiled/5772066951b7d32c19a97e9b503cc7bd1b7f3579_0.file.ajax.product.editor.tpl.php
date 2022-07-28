<?php
/* Smarty version 3.1.40, created on 2022-07-28 10:19:39
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\ajax.product.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e262bb0e78b5_42089578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5772066951b7d32c19a97e9b503cc7bd1b7f3579' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\ajax.product.editor.tpl',
      1 => 1659003560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 1,
    'file:_page.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_62e262bb0e78b5_42089578 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-shopping-cart mr10" style="color: #2b53a4;"></i><?php echo __("Edit Product");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms publisher-mini" data-url="posts/edit.php" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-8">
                <label class="form-control-label"><?php echo __("Product Name");?>
</label>
                <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
">
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Price");?>
</label>
                <input name="price" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>
">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label class="form-control-label"><?php echo __("Category");?>
</label>
                <select name="category" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['market_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['post']->value['product']['category_id']), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label class="form-control-label"><?php echo __("Status");?>
</label>
                <select name="status" class="form-control">
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "gold") {?>selected<?php }?> value="gold"><?php echo __("Gold");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "platinum") {?>selected<?php }?> value="platinum"><?php echo __("Platinum");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "diamond") {?>selected<?php }?> value="diamond"><?php echo __("Diamond");?>
</option>
                </select>
            </div>
        </div>
        <div class="row">
        <div class="form-group col-md-8">
                <label class="form-control-label"><?php echo __("Page");?>
</label>
                <select name="page" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_page.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['post']->value['product']['page_id']), 0, true);
?>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>

        <div class="form-group col-md-4">
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Location");?>
</label>
            <input name="location" type="text" class="form-control js_geocomplete" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];?>
">
        </div>
        </div>
        </div>
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Description");?>
</label>
            <textarea name="message" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
        </div>
        <!-- custom fields -->
        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
        <?php }?>
        <!-- custom fields -->
        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
         <div class="form-group">
            <label class="form-control-label"><?php echo __("Photos");?>
</label>
           <div class="attachments clearfix" data-type="photos">
                <ul>
                    <li class="add">
                        <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <input type="hidden" name="handle" value="product">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
        <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
        <button type="submit" class="btn btn-primary "><?php echo __("Save");?>
</button>
    </div>
</form><?php }
}
