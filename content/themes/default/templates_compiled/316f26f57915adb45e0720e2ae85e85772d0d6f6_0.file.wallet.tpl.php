<?php
/* Smarty version 3.1.40, created on 2022-05-15 03:58:53
  from 'C:\xampp\htdocs\atrsocial\content\themes\default\templates\wallet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62807a7d63ded1_17453027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '316f26f57915adb45e0720e2ae85e85772d0d6f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atrsocial\\content\\themes\\default\\templates\\wallet.tpl',
      1 => 1638098303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_no_transactions.tpl' => 2,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_62807a7d63ded1_17453027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_wallet_aym5.svg">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
        <h2><?php echo __("Wallet");?>
</h2>
        <p class="text-xlg"><?php echo __("Send and Transfer Money");?>
</p>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container offcanvas" style="margin-top: -25px;">
    <div class="row">

        <!-- side panel -->
        <div class="col-12 d-block d-md-none offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- side panel -->

        <!-- content panel -->
        <div class="col-12 offcanvas-mainbar">

            <!-- tabs -->
            <div class="content-tabs rounded-sm shadow-sm clearfix">
                <ul>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet"><i class="fa fa-wallet mr5"></i><?php echo __("Wallet");?>
</a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_withdrawal_enabled']) {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "payments") {?>class="active"<?php }?>>
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet/payments"><i class="fa fa-money-check-alt mr5"></i><?php echo __("Payments");?>
</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <!-- tabs -->

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

                <!-- wallet -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-wallet mr10"></i><?php echo __("Wallet");?>

                    </div>
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['wallet_transfer_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Your");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo print_money(number_format($_smarty_tpl->tpl_vars['wallet_transfer_amount']->value,2));?>
</span> <?php echo __("transfer transaction successfuly sent");?>

                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_replenish_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo print_money(number_format($_smarty_tpl->tpl_vars['wallet_replenish_amount']->value,2));?>
</span>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_affiliates_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo print_money(number_format($_smarty_tpl->tpl_vars['wallet_withdraw_affiliates_amount']->value,2));?>
</span> <?php echo __("from your affiliates credit");?>

                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_points_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo print_money(number_format($_smarty_tpl->tpl_vars['wallet_withdraw_points_amount']->value,2));?>
</span> <?php echo __("from your points credit");?>

                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_funding_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo print_money(number_format($_smarty_tpl->tpl_vars['wallet_withdraw_funding_amount']->value,2));?>
</span> <?php echo __("from your funding credit");?>

                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_package_payment_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Your");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo print_money(number_format($_smarty_tpl->tpl_vars['wallet_package_payment_amount']->value,2));?>
</span> <?php echo __("payment transaction successfuly done");?>

                            </div>
                        <?php }?>

                        <div class="row">
                            <!-- credit -->
                            <div class="col-md-5">
                                <div class="section-title mb20">
                                    <i class="fa fa-money-bill-alt mr10"></i> <?php echo __("Your Credit");?>

                                </div>
                                <div class="stat-panel bg-gradient-info">
                                    <div class="stat-cell small">
                                        <i class="fa fa-money-bill-alt bg-icon"></i>
                                        <div class="h3 mtb10">
                                            <?php echo print_money(number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'],2));?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- credit -->

                            <!-- send & recieve money -->
                            <div class="col-md-7">
                                <div class="section-title mb20">
                                    <i class="fas fa-donate mr10"></i> <?php echo __("Send & Recieve Money");?>

                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_transfer_enabled']) {?>
                                    <button class="btn btn-success btn-block mb10" data-toggle="modal" data-url="#wallet-transfer">
                                        <i class="fa fa-gift"></i> <?php echo __("Send Money");?>

                                    </button>
                                <?php }?>

                                <div>
                                    <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-replenish">
                                        <i class="fab fa-paypal mr5"></i><?php echo __("Replenish Credit");?>

                                    </button>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled'] && $_smarty_tpl->tpl_vars['system']->value['affiliates_money_transfer_enabled']) {?>
                                        <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-withdraw-affiliates">
                                            <i class="fa fa-exchange-alt mr5"></i><?php echo __("Affiliates Credit");?>

                                        </button>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['points_enabled'] && $_smarty_tpl->tpl_vars['system']->value['points_money_transfer_enabled']) {?>
                                        <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-withdraw-points">
                                            <i class="fa fa-piggy-bank mr5"></i><?php echo __("Points Credit");?>

                                        </button>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding'] && $_smarty_tpl->tpl_vars['system']->value['funding_money_transfer_enabled']) {?>
                                        <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-withdraw-funding">
                                            <i class="fa fa-hand-holding-usd mr5"></i><?php echo __("Funding Credit");?>

                                        </button>
                                    <?php }?>
                                </div>
                            </div>
                            <!-- send & recieve money -->

                            <!-- wallet transactions -->
                            <div class="col-12">
                                <div class="section-title mt10 mb20">
                                    <i class="fas fa-file-alt mr10"></i> <?php echo __("Wallet Transactions");?>

                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['transactions']->value) {?>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover js_dataTable">
                                            <thead>
                                                <tr>
                                                    <th><?php echo __("ID");?>
</th>
                                                    <th><?php echo __("Amount");?>
</th>
                                                    <th><?php echo __("From / To");?>
</th>
                                                    <th><?php echo __("Time");?>
</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
$_smarty_tpl->tpl_vars['transaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->do_else = false;
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['transaction_id'];?>
</td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['transaction']->value['type'] == "out") {?>
                                                                <span class="badge badge-pill badge-lg badge-danger mr5"><i class="far fa-arrow-alt-circle-down"></i></span>
                                                                <strong class="text-danger"><?php echo print_money(number_format($_smarty_tpl->tpl_vars['transaction']->value['amount'],2));?>
</strong>
                                                            <?php } else { ?>
                                                                <span class="badge badge-pill badge-lg badge-success mr5"><i class="far fa-arrow-alt-circle-up"></i></span>
                                                                <strong class="text-success"><?php echo print_money(number_format($_smarty_tpl->tpl_vars['transaction']->value['amount'],2));?>
</strong>
                                                            <?php }?>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['transaction']->value['type'] == "out") {?>
                                                                <span class="badge badge-pill badge-lg badge-danger mr10"><?php echo __("To");?>
</span>
                                                            <?php } else { ?>
                                                                <span class="badge badge-pill badge-lg badge-success mr10"><?php echo __("From");?>
</span>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "user") {?>
                                                                <a  target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_name'];?>
">
                                                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_picture'];?>
" style="float: none;">
                                                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_name'];?>

                                                                    <?php } else { ?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_lastname'];?>

                                                                    <?php }?>
                                                                </a>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "recharge") {?>
                                                                <?php echo __("Replenish Credit");?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_wallet") {?>
                                                                <?php echo __("Wallet Withdrawal");?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_affiliates") {?>
                                                                <?php echo __("Affiliates Credit");?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_points") {?>
                                                                <?php echo __("Points Credit");?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_funding") {?>
                                                                <?php echo __("Funding Credit");?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "package_payment") {?>
                                                                <?php echo __("Buy Pro Package");?>

                                                            <?php }?>
                                                        </td>
                                                        <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
</span></td>
                                                    </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php }?>
                            </div>
                            <!-- wallet transactions -->
                        </div>
                    </div>
                </div>
                <!-- wallet -->

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "payments") {?>

                <!-- payments -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-money-check-alt mr10"></i><?php echo __("Wallet Payments");?>

                    </div>
                    <div class="card-body">
                        <div class="section-title mt10 mb20">
                            <?php echo __("Withdrawal Request");?>

                        </div>
                        <form class="js_ajax-forms" data-url="users/withdraw.php?type=wallet">
                            <div class="form-group form-row">
                                <label class="col-md-3 form-control-label">
                                    <?php echo __("Your Balance");?>

                                </label>
                                <div class="col-md-9">
                                    <h6>
                                        <span class="badge badge-lg badge-info">
                                            <?php echo print_money(number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'],2));?>

                                        </span>
                                    </h6>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-md-3 form-control-label">
                                    <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="amount">
                                    <span class="form-text">
                                        <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo print_money($_smarty_tpl->tpl_vars['system']->value['wallet_min_withdrawal']);?>

                                    </span>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-md-3 form-control-label">
                                    <?php echo __("Payment Method");?>

                                </label>
                                <div class="col-md-9">
                                    <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="method" id="method_paypal" value="paypal" class="custom-control-input">
                                            <label class="custom-control-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="method" id="method_skrill" value="skrill" class="custom-control-input">
                                            <label class="custom-control-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="method" id="method_bank" value="bank" class="custom-control-input">
                                            <label class="custom-control-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_array'])) {?>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="method" id="method_custom" value="custom" class="custom-control-input">
                                            <label class="custom-control-label" for="method_custom"><?php echo __($_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_custom']);?>
</label>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-md-3 form-control-label">
                                    <?php echo __("Transfer To");?>

                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="method_value">
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn btn-primary"><?php echo __("Make a withdrawal");?>
</button>
                                </div>
                            </div>

                            <!-- success -->
                            <div class="alert alert-success mb0 x-hidden"></div>
                            <!-- success -->

                            <!-- error -->
                            <div class="alert alert-danger mb0 x-hidden"></div>
                            <!-- error -->
                        </form>
                        <div class="section-title mt10 mb20">
                            <?php echo __("Withdrawal History");?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
                            <div class="table-responsive mt20">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo __("ID");?>
</th>
                                            <th><?php echo __("Amount");?>
</th>
                                            <th><?php echo __("Method");?>
</th>
                                            <th><?php echo __("Transfer To");?>
</th>
                                            <th><?php echo __("Time");?>
</th>
                                            <th><?php echo __("Status");?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_1_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>
                                                <td><?php echo print_money(number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2));?>
</td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['payment']->value['method'] == "custom") {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['system']->value['wallet_payment_method_custom'];?>

                                                    <?php } else { ?>
                                                        <?php echo ucfirst($_smarty_tpl->tpl_vars['payment']->value['method']);?>

                                                    <?php }?>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['method_value'];?>
</td>
                                                <td>
                                                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>
                                                </td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>
                                                        <span class="badge badge-pill badge-lg badge-warning"><?php echo __("Pending");?>
</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>
                                                        <span class="badge badge-pill badge-lg badge-success"><?php echo __("Approved");?>
</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Declined");?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    </div>
                </div>
                <!-- payments -->

            <?php }?>
        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
