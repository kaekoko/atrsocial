<?php
/* Smarty version 3.1.40, created on 2022-05-15 16:34:05
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\admin.affiliates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62812b7d03b5a7_92279474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9148405c35a31b091b2376056d4a27e246d8fd22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\admin.affiliates.tpl',
      1 => 1638098303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
),false)) {
function content_62812b7d03b5a7_92279474 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <i class="fa fa-exchange-alt mr10"></i><?php echo __("Affiliates");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?> &rsaquo; <?php echo __("Payment Requests");
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

        <form class="js_ajax-forms" data-url="admin/settings.php?edit=affiliates">
            <div class="card-body">
                <div class="form-table-row">
                    <div class="avatar">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"affiliates",'width'=>"40px",'height'=>"40px"), 0, false);
?>
                    </div>
                    <div>
                        <div class="form-control-label h6"><?php echo __("Affiliates Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Enable or Disable the affiliates system");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="affiliates_enabled">
                            <input type="checkbox" name="affiliates_enabled" id="affiliates_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider dashed"></div>

                <div class="form-table-row">
                    <div class="avatar">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"withdrawal",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                    </div>
                    <div>
                        <div class="form-control-label h6"><?php echo __("Users Can Withdraw Earned Money");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("If enabled users will be able to withdraw earned money");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="affiliates_money_withdraw_enabled">
                            <input type="checkbox" name="affiliates_money_withdraw_enabled" id="affiliates_money_withdraw_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_money_withdraw_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Payment Method");?>

                    </label>
                    <div class="col-md-9">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="method_paypal" id="method_paypal" <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>checked<?php }?>>
                            <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="method_skrill" id="method_skrill" <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>checked<?php }?>>
                            <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="method_bank" id="method_bank"<?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>checked<?php }?>>
                            <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline" id="js_custome-withdrawal">
                            <input type="checkbox" class="custom-control-input" name="method_custom" id="method_custom" <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>checked<?php }?>>
                            <label class="custom-control-label" for="method_custom"><?php echo __("Custom Method");?>
</label>
                        </div>
                        <span class="form-text">
                            <?php echo __("Users can send withdrawal requests via any of these methods");?>

                        </span>
                    </div>
                </div>

                <div id="js_custome-withdrawal-name" <?php if (!in_array("custom",$_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_array'])) {?>class="x-hidden"<?php }?>>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Custom Method Name");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="affiliate_payment_method_custom" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method_custom'];?>
">
                            <span class="form-text">
                                <?php echo __("Set the name of your custom withdrawal payment method");?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Minimum Withdrawal Request");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="affiliates_min_withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['affiliates_min_withdrawal'];?>
">
                        <span class="form-text">
                            <?php echo __("The minimum amount of money so user can send a withdrawal request");?>

                        </span>
                    </div>
                </div>

                <div class="divider dashed"></div>

                <div class="form-table-row">
                    <div class="avatar">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                    </div>
                    <div>
                        <div class="form-control-label h6"><?php echo __("Users Can Transfer Earned Money To Wallet");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("If wallet enabled users will be able to transfer earned money to their wallet");?>
<br>
                            <?php echo __("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/wallet"><?php echo __("Wallet System");?>
</a>
                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="affiliates_money_transfer_enabled">
                            <input type="checkbox" name="affiliates_money_transfer_enabled" id="affiliates_money_transfer_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_money_transfer_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider dashed"></div>

                <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled']) {?>
                    <div class="alert alert-warning">
                        <div class="icon">
                            <i class="fa fa-exclamation-triangle fa-2x"></i>
                        </div>
                        <div class="text">
                            <strong><?php echo __("Account Activation Enabled");?>
</strong><br>
                            <?php echo __("Affiliate earning will not be counted unless the new user activated his account");?>
.<br>
                        </div>
                    </div>
                <?php }?>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("User Earn Money When");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="affiliate_type">
                            <option <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_type'] == "registration") {?>selected<?php }?> value="registration">
                                <?php echo __("New User Registered");?>

                            </option>
                            <option <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_type'] == "packages") {?>selected<?php }?> value="packages">
                                <?php echo __("New User Registered & Bought Pro Package");?>

                            </option>
                        </select>
                        <span class="form-text">
                            <?php echo __("If registration type is 'Subscriptions Only' User will earn money from new registration only");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Affiliates Levels");?>

                    </label>
                    <div class="col-md-9">
                        <input type="number" min="1" class="form-control" name="affiliates_levels" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['affiliates_levels'];?>
">
                        <span class="form-text">
                            <?php echo __("How many levels you want to set your affiliates program?");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Payment Type");?>

                    </label>
                    <div class="col-md-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="affiliate_payment_type" id="affiliate_fixed" value="fixed" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_type'] == "fixed") {?>checked<?php }?>>
                            <label class="custom-control-label" for="affiliate_fixed"><?php echo __("Fixed Price/Referred");?>
</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="affiliate_payment_type" id="affiliate_percentage" value="percentage" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_type'] == "percentage") {?>checked<?php }?>>
                            <label class="custom-control-label" for="affiliate_percentage"><?php echo __("Percentage");?>
 (%)</label>
                        </div>
                        <span class="form-text">
                            <?php echo __("Percentage will work only with pro packages");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Price/Referred");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="affiliates_per_user" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['affiliates_per_user'];?>
">
                        <span class="form-text">
                            <?php echo __("The price for each new referred user");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Percentage");?>
 (%)
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="affiliates_percentage" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['affiliates_percentage'];?>
">
                        <span class="form-text">
                            <?php echo __("The percentage from package price for each new referred user registered and bought pro package");?>

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
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>

        <div class="card-body">
            <div class="alert alert-primary">
                <div class="icon">
                    <i class="fa fa-money-check-alt fa-2x"></i>
                </div>
                <div class="text">
                    <strong><?php echo __("Payment Requests");?>
</strong><br>
                    <?php echo __("You will need to make the payments from your Paypal, Skrill, Bank Account... etc");?>
.<br>
                    <?php echo __("After making the payment you can mark the payment request as paid");?>
.
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("User");?>
</th>
                            <th><?php echo __("Amount");?>
</th>
                            <th><?php echo __("Method");?>
</th>
                            <th><?php echo __("Transfer To");?>
</th>
                            <th><?php echo __("Referrals");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
</td>
                                <td>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['row']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];
}?>
                                    </a>
                                </td>
                                <td><?php echo print_money(number_format($_smarty_tpl->tpl_vars['row']->value['amount'],2));?>
</td>
                                <td>
                                    <span class="badge badge-pill badge-lg badge-<?php echo $_smarty_tpl->tpl_vars['row']->value['method_color'];?>
">
                                        <?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['method']);?>

                                    </span>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['method_value'];?>
</td>
                                <td>
                                    <span class="text-link" data-toggle="modal" data-url="admin/referrals.php?user_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                                        <?php echo __("Show");?>

                                    </span>
                                </td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Mark as Paid");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-withdraw" data-type="affiliates" data-handle="approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                                            <i class="fa fa-check"></i>
                                    </button>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-withdraw" data-type="affiliates" data-handle="decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php }?>
</div><?php }
}
