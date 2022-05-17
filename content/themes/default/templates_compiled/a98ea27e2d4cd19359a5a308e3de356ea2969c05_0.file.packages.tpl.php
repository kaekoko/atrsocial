<?php
/* Smarty version 3.1.40, created on 2022-05-14 15:10:02
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627fc64acb3ab4_48548129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a98ea27e2d4cd19359a5a308e3de356ea2969c05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\packages.tpl',
      1 => 1642508133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 2,
    'file:__svg_icons.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_627fc64acb3ab4_48548129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['view']->value == "packages") {?>

    <!-- page header -->
    <div class="page-header">
        <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_upgrade_06a0.svg">
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="inner">
            <h2><?php echo __("Pro Packages");?>
</h2>
            <p class="text-xlg"><?php echo __("Choose the Plan That's Right for You");?>
</p>
        </div>
    </div>
    <!-- page header -->

    <!-- page content -->
    <div class="container offcanvas" style="margin-top: -25px;">
        <div class="row">

            <!-- side panel -->
            <div class="col-12 d-block d-sm-none offcanvas-sidebar mt20">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-12 offcanvas-mainbar">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-md-center">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                                <!-- package -->
                                <div class="col-md-6 col-lg-4 col-xl-<?php if ($_smarty_tpl->tpl_vars['packages_count']->value >= 4) {?>3<?php } elseif ($_smarty_tpl->tpl_vars['packages_count']->value == 3) {?>4<?php } elseif ($_smarty_tpl->tpl_vars['packages_count']->value <= 2) {?>6<?php }?> text-center">
                                    <div class="card card-pricing shadow-sm">
                                        <div class="card-header bg-transparent">
                                            <h3><?php echo __($_smarty_tpl->tpl_vars['package']->value['name']);?>
</h3>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['package']->value['icon'];?>
" style="max-width: 48px;">
                                        </div>
                                        <div class="card-body text-center">
                                            <h2 class="price" style="color: <?php echo $_smarty_tpl->tpl_vars['package']->value['color'];?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['package']->value['price'] == 0) {?>
                                                    <?php echo __("Free");?>

                                                <?php } else { ?>
                                                    <?php echo print_money($_smarty_tpl->tpl_vars['package']->value['price']);?>

                                                <?php }?>
                                            </h2>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['package']->value['period'] == "life") {?>
                                                    <?php echo __("Life Time");?>

                                                <?php } else { ?>
                                                    <?php echo __("for");?>
 
                                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['package']->value['period_num'];
}?> <?php echo __(ucfirst($_smarty_tpl->tpl_vars['package']->value['period']));?>

                                                <?php }?>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item"><i class="fa fa-check green mr10"></i><?php echo __("Featured member");?>
</li>
                                            <li class="list-group-item">
                                                <?php if ($_smarty_tpl->tpl_vars['package']->value['verification_badge_enabled']) {?>
                                                    <i class="fa fa-check green mr10"></i>
                                                <?php } else { ?>
                                                    <i class="fa fa-times red mr10"></i>
                                                <?php }?>
                                                <?php echo __("Verified badge");?>

                                            </li>
                                            <li class="list-group-item">
                                                <?php if (!$_smarty_tpl->tpl_vars['package']->value['boost_posts_enabled']) {?>
                                                    <i class="fa fa-times red mr10"></i><?php echo __("Posts promotion");?>

                                                <?php } else { ?>
                                                    <i class="fa fa-check green mr10"></i><?php echo __("Boost up to");?>
 <?php echo $_smarty_tpl->tpl_vars['package']->value['boost_posts'];?>
 <?php echo __("Posts");?>

                                                <?php }?>
                                            </li>
                                            <li class="list-group-item">
                                                <?php if (!$_smarty_tpl->tpl_vars['package']->value['boost_pages_enabled']) {?>
                                                    <i class="fa fa-times red mr10"></i><?php echo __("Pages promotion");?>

                                                <?php } else { ?>
                                                    <i class="fa fa-check green mr10"></i><?php echo __("Boost up to");?>
 <?php echo $_smarty_tpl->tpl_vars['package']->value['boost_pages'];?>
 <?php echo __("Pages");?>

                                                <?php }?>
                                            </li>
                                            <?php if ($_smarty_tpl->tpl_vars['package']->value['custom_description']) {?>
                                                <li class="list-group-item">
                                                    <?php echo nl2br(__($_smarty_tpl->tpl_vars['package']->value['custom_description']));?>

                                                </li>
                                            <?php }?>
                                        </ul>
                                        <div class="card-footer bg-transparent">
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['package']->value['price'] == 0) {?>
                                                    <button class="btn btn-block rounded-pill btn-danger js_try-package" data-id='<?php echo $_smarty_tpl->tpl_vars['package']->value["package_id"];?>
'>
                                                        <?php echo __("Try Now");?>

                                                    </button>
                                                <?php } else { ?>
                                                    <button class="btn btn-block rounded-pill btn-danger" data-toggle="modal" data-url="#payment" data-options='{"handle": "packages", "id": <?php echo $_smarty_tpl->tpl_vars['package']->value["package_id"];?>
, "price": "<?php echo $_smarty_tpl->tpl_vars['package']->value["price"];?>
", "name": "<?php echo $_smarty_tpl->tpl_vars['package']->value["name"];?>
", "img": "<?php echo $_smarty_tpl->tpl_vars['package']->value["icon"];?>
"}'>
                                                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                                            <?php echo __("Buy Now");?>

                                                        <?php } else { ?>
                                                            <?php echo __("Upgrade Now");?>

                                                        <?php }?>
                                                    </button>
                                                <?php }?>
                                            <?php } else { ?>
                                                <a class="btn btn-block rounded-pill btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin">
                                                    <?php echo __("Buy Now");?>

                                                </a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /package -->
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>            
                </div>
            </div>
            <!-- content panel -->

        </div>
    </div>
    <!-- page content -->

<?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "upgraded") {?>

    <!-- page content -->
    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- side panel -->
            <div class="col-12 d-block d-sm-none offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-12 offcanvas-mainbar">
                <div class="card text-center">
                    <div class="card-body"> 
                        <div class="mb20">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"education",'width'=>"140px",'height'=>"140px"), 0, false);
?>
                        </div>
                        <h2><?php echo __("Congratulations");?>
!</h2>
                        <p class="text-xlg mt10"><?php echo __("You are now");?>
 <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['package_name'];?>
</span> <?php echo __("member");?>
</p>
                        <a class="btn btn-primary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
"><?php echo __("Start Now");?>
</a>
                    </div>
                </div>
            </div>
            <!-- content panel -->
            
        </div>
    </div>
    <!-- page content -->

<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
