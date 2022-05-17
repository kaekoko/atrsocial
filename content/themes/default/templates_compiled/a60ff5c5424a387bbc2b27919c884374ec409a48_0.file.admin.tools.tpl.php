<?php
/* Smarty version 3.1.40, created on 2022-05-14 07:24:31
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\admin.tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627f592ff24167_87364660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60ff5c5424a387bbc2b27919c884374ec409a48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\admin.tools.tpl',
      1 => 1638098303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 10,
    'file:__categories.recursive_options.tpl' => 2,
  ),
),false)) {
function content_627f592ff24167_87364660 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "faker") {?>

        <!-- card-header -->
        <div class="card-header with-icon with-nav">
            <!-- panel title -->
            <div class="mb20">
                <i class="fa fa-toolbox mr10"></i><?php echo __("Tools");?>
 &rsaquo; <?php echo __("Fake Generator");?>

            </div>
            <!-- panel title -->

            <!-- panel nav -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#Users" data-toggle="tab">
                        <i class="fa fa-user fa-fw mr5"></i><strong><?php echo __("Users");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Pages" data-toggle="tab">
                        <i class="fa fa-flag fa-fw mr5"></i><strong><?php echo __("Pages");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Groups" data-toggle="tab">
                        <i class="fa fa-users fa-fw mr5"></i><strong><?php echo __("Groups");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- panel nav -->
        </div>
        <!-- card-header -->

        <!-- tab-content -->
        <div class="tab-content">
            <!-- Users -->
            <div class="tab-pane active" id="Users">
                <form class="js_ajax-forms" data-url="admin/tools.php?do=faker&handle=users">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div class="avatar">
                                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"profile",'width'=>"40px",'height'=>"40px"), 0, false);
?>
                            </div>
                            <div>
                                <div class="form-control-label h6"><?php echo __("Random Pictures");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Profile pictures will be generated randomly and may be dublicated");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="users_random_Avatar">
                                    <input type="checkbox" name="random_Avatar" id="users_random_Avatar">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Number of Users");?>

                            </label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="users_num" value="10">
                                <span class="form-text">
                                    <?php echo __("How many users you want to generate (Maximum is 1000 per request)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Password");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="default_password">
                                <span class="form-text">
                                    <?php echo __("This password will be used for all generated accounts (Default is 123456789)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Names Language");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="language">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('parts', explode('_',$_smarty_tpl->tpl_vars['language']->value['code']));?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['system']->value['default_language']['language_id'] == $_smarty_tpl->tpl_vars['language']->value['language_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['parts']->value[0];?>
_<?php echo strtoupper($_smarty_tpl->tpl_vars['parts']->value[1]);?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <span class="form-text">
                                    <?php echo __("Select the language of generated names");?>

                                </span>
                            </div>
                        </div>

                        <!-- success -->
                        <div class="alert alert-success mb0 x-hidden"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 x-hidden"></div>
                        <!-- error -->
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Generate");?>
</button>
                    </div>
                </form>
            </div>
            <!-- Users -->

            <!-- Pages -->
            <div class="tab-pane" id="Pages">
                <form class="js_ajax-forms" data-url="admin/tools.php?do=faker&handle=pages">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div class="avatar">
                                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"profile",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                            </div>
                            <div>
                                <div class="form-control-label h6"><?php echo __("Random Pictures");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Profile pictures will be generated randomly and may be dublicated");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="pages_random_Avatar">
                                    <input type="checkbox" name="random_Avatar" id="pages_random_Avatar">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Number of Pages");?>

                            </label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="pages_num" value="10">
                                <span class="form-text">
                                    <?php echo __("How many pages you want to generate (Maximum is 1000 per request)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Names Language");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="language">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('parts', explode('_',$_smarty_tpl->tpl_vars['language']->value['code']));?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['system']->value['default_language']['language_id'] == $_smarty_tpl->tpl_vars['language']->value['language_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['parts']->value[0];?>
_<?php echo strtoupper($_smarty_tpl->tpl_vars['parts']->value[1]);?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <span class="form-text">
                                    <?php echo __("Select the language of generated names");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Page Category");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="category" id="category">
                                    <option><?php echo __("Select Category");?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>

                        <!-- success -->
                        <div class="alert alert-success mb0 x-hidden"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 x-hidden"></div>
                        <!-- error -->
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Generate");?>
</button>
                    </div>
                </form>
            </div>
            <!-- Pages -->

            <!-- Groups -->
            <div class="tab-pane" id="Groups">
                <form class="js_ajax-forms" data-url="admin/tools.php?do=faker&handle=groups">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div class="avatar">
                                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"profile",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                            </div>
                            <div>
                                <div class="form-control-label h6"><?php echo __("Random Pictures");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Profile pictures will be generated randomly and may be dublicated");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="groups_random_Avatar">
                                    <input type="checkbox" name="random_Avatar" id="groups_random_Avatar">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Number of Groups");?>

                            </label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="groups_num" value="10">
                                <span class="form-text">
                                    <?php echo __("How many groups you want to generate (Maximum is 1000 per request)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Names Language");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="language">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('parts', explode('_',$_smarty_tpl->tpl_vars['language']->value['code']));?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['system']->value['default_language']['language_id'] == $_smarty_tpl->tpl_vars['language']->value['language_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['parts']->value[0];?>
_<?php echo strtoupper($_smarty_tpl->tpl_vars['parts']->value[1]);?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <span class="form-text">
                                    <?php echo __("Select the language of generated names");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Group Category");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="category" id="category">
                                    <option><?php echo __("Select Category");?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>

                        <!-- success -->
                        <div class="alert alert-success mb0 x-hidden"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 x-hidden"></div>
                        <!-- error -->
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Generate");?>
</button>
                    </div>
                </form>
            </div>
            <!-- Groups -->
        </div>
        <!-- tab-content -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "auto-connect") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-toolbox mr10"></i><?php echo __("Tools");?>
 &rsaquo; <?php echo __("Auto Connect");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Auto Connect -->
        <form class="js_ajax-forms" data-url="admin/tools.php?do=auto-connect">
            <div class="card-body">
                <div class="heading-small mb20">
                    <?php echo __("Auto Friend");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-table-row">
                        <div class="avatar">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                        </div>
                        <div>
                            <div class="form-control-label h6"><?php echo __("Auto Friend");?>
</div>
                            <div class="form-text d-none d-sm-block"><?php echo __("When a user creates a new account, select which users you want to auto friend (following included)");?>
</div>
                        </div>
                        <div class="text-right">
                            <label class="switch" for="auto_friend">
                                <input type="checkbox" name="auto_friend" id="auto_friend" <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_friend']) {?>checked<?php }?>>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Select Users");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="js_tagify x-hidden" data-handle="users" name="auto_friend_users" value='<?php echo $_smarty_tpl->tpl_vars['system']->value['auto_friend_users'];?>
'>
                            <span class="form-text">
                                <?php echo __("Search for users you want new accounts to auto friend");?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="heading-small mb20">
                    <?php echo __("Auto Follow");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-table-row">
                        <div class="avatar">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"followers",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                        </div>
                        <div>
                            <div class="form-control-label h6"><?php echo __("Auto Follow");?>
</div>
                            <div class="form-text d-none d-sm-block"><?php echo __("When a user creates a new account, select which users you want to auto follow");?>
</div>
                        </div>
                        <div class="text-right">
                            <label class="switch" for="auto_follow">
                                <input type="checkbox" name="auto_follow" id="auto_follow" <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_follow']) {?>checked<?php }?>>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Select Users");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="js_tagify x-hidden" data-handle="users" name="auto_follow_users" value='<?php echo $_smarty_tpl->tpl_vars['system']->value['auto_follow_users'];?>
'>
                            <span class="form-text">
                                <?php echo __("Search for users you want new accounts to auto follow");?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="heading-small mb20">
                    <?php echo __("Auto Like");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-table-row">
                        <div class="avatar">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                        </div>
                        <div>
                            <div class="form-control-label h6"><?php echo __("Auto Like");?>
</div>
                            <div class="form-text d-none d-sm-block"><?php echo __("When a user creates a new account, select which pages you want to auto like");?>
</div>
                        </div>
                        <div class="text-right">
                            <label class="switch" for="auto_like">
                                <input type="checkbox" name="auto_like" id="auto_like" <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_like']) {?>checked<?php }?>>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Select Pages");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="js_tagify x-hidden" data-handle="pages" name="auto_like_pages" value='<?php echo $_smarty_tpl->tpl_vars['system']->value['auto_like_pages'];?>
'>
                            <span class="form-text">
                                <?php echo __("Search for pages you want new accounts to auto like");?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="heading-small mb20">
                    <?php echo __("Auto Join");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-table-row">
                        <div class="avatar">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                        </div>
                        <div>
                            <div class="form-control-label h6"><?php echo __("Auto Join");?>
</div>
                            <div class="form-text d-none d-sm-block"><?php echo __("When a user creates a new account, select which groups you want to auto join");?>
</div>
                        </div>
                        <div class="text-right">
                            <label class="switch" for="auto_join">
                                <input type="checkbox" name="auto_join" id="auto_join" <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_join']) {?>checked<?php }?>>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Select Groups");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="js_tagify x-hidden" data-handle="groups" name="auto_join_groups" value='<?php echo $_smarty_tpl->tpl_vars['system']->value['auto_join_groups'];?>
'>
                            <span class="form-text">
                                <?php echo __("Search for groups you want new accounts to auto join");?>

                            </span>
                        </div>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>
        <!-- Auto Connect -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "garbage-collector") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-toolbox mr10"></i><?php echo __("Tools");?>
 &rsaquo; <?php echo __("Garbage Collector");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Garbage Collector -->
        <form class="js_ajax-forms" data-url="admin/tools.php?do=garbage-collector">
            <div class="card-body">

                <div class="alert alert-info">
                    <div class="icon">
                        <i class="fa fa-info-circle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                        <?php echo __("Garbage collector will perform the selected action and might take some time");?>

                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("What you want to do");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="delete">
                            <option value="users_not_activated"><?php echo __("Delete all not activated accounts");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_activated'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_week"><?php echo __("Delete users who did not login from 1 week");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_week'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_month"><?php echo __("Delete users who did not login from 1 month");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_month'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_3_months"><?php echo __("Delete users who did not login from 3 months");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_3_months'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_6_months"><?php echo __("Delete users who did not login from 6 months");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_6_months'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_9_months"><?php echo __("Delete users who did not login from 9 months");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_9_months'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_year"><?php echo __("Delete users who did not login from 1 year");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_year'];?>
 <?php echo __("user");?>
)</option>
                            <option value="posts_longer_week"><?php echo __("Delete posts that are longer than 1 week");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['posts_longer_week'];?>
 <?php echo __("post");?>
)</option>
                            <option value="posts_longer_month"><?php echo __("Delete posts that are longer than 1 month");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['posts_longer_month'];?>
 <?php echo __("post");?>
)</option>
                            <option value="posts_longer_year"><?php echo __("Delete posts that are longer than 1 year");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['posts_longer_year'];?>
 <?php echo __("post");?>
)</option>
                            <option value="packages"><?php echo __("Reset all expired subscribers and their boosted posts and pages");?>
</option>
                            <option value="user_points"><?php echo __("Reset all users points");?>
</option>
                        </select>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Run");?>
</button>
            </div>
        </form>
        <!-- Garbage Collector -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "backups") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-toolbox mr10"></i><?php echo __("Tools");?>
 &rsaquo; <?php echo __("Backup Database & Files");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Backup Database & Files -->
        <form class="js_ajax-forms" data-url="admin/tools.php?do=backups">
            <div class="card-body">

                <div class="alert alert-primary">
                    <div class="icon">
                        <i class="fa fa-server fa-2x"></i>
                    </div>
                    <div class="text">
                        <?php echo __("You last backup");?>
 <span class="badge badge-pill badge-lg badge-warning"><?php if ($_smarty_tpl->tpl_vars['system']->value['last_backup_time']) {
echo $_smarty_tpl->tpl_vars['system']->value['last_backup_time'];
} else {
echo __("N/A");
}?></span><br>
                        <?php echo __("You can find backups in");?>
 <strong>content/backups</strong><br>
                        <?php echo __("Taking backup might take some time and you can download backups via FTP");?>

                    </div>
                </div>

                <div class="h5 mb20 text-center">
                    <?php echo __("Select which backup you would like to generate");?>

                </div>
                <!-- backup options -->
                <div class="text-center">
                    <!-- Database -->
                    <input class="x-hidden input-label" type="radio" name="backup_option" value="datebase_backup" id="datebase_backup"/>
                    <label class="button-label" for="datebase_backup">
                        <div class="icon">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"database",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Database");?>
</div>
                    </label>
                    <!-- Database -->
                    <!-- Files -->
                    <input class="x-hidden input-label" type="radio" name="backup_option" value="files_backup" id="files_backup"/>
                    <label class="button-label" for="files_backup">
                        <div class="icon">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"folder",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Files");?>
</div>
                    </label>
                    <!-- Files -->
                    <!-- Full -->
                    <input class="x-hidden input-label" type="radio" name="backup_option" value="full_backup" id="full_backup"/>
                    <label class="button-label" for="full_backup">
                        <div class="icon">
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"full_backup",'width'=>"32px",'height'=>"32px"), 0, true);
?>
                        </div>
                        <div class="title"><?php echo __("Full Backup");?>
</div>
                    </label>
                    <!-- Full -->
                </div>
                <!-- backup options -->

                <!-- success -->
                <div class="alert alert-success mt10 mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mt10 mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Run");?>
</button>
            </div>
        </form>
        <!-- Backup Database & Files -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "reset") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-toolbox mr10"></i><?php echo __("Tools");?>
 &rsaquo; <?php echo __("Factory Reset");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Factory Reset -->
        <div class="card-body">
            <div class="alert alert-warning">
                <div class="icon">
                    <i class="fa fa-exclamation-triangle fa-2x"></i>
                </div>
                <div class="text pt5">
                    <?php echo __("Once you reset your website all data will be deleted and it will be like having a fresh installation");?>
<br>
                    <?php echo __("(Note: All system settings will be saved)");?>

                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-md btn-danger js_admin-reset">
                    <i class="fa fa-trash fa-lg mr10"></i><?php echo __("Reset Everything");?>

                </button>
            </div>
        </div>
        <!-- Factory Reset -->

    <?php }?>
    
</div><?php }
}
