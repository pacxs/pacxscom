<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 18:44:59
         compiled from "/var/www/pacxs.local/public_html/themes/ap_food/layout/setting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:509778892565f2e1bb0d874-03895412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43089eb35f172c7fcd6c9dbbef788bf20d6040b9' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/ap_food/layout/setting.tpl',
      1 => 1449077825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '509778892565f2e1bb0d874-03895412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTING_PRODUCT_COLUMN' => 0,
    'LISTING_PRODUCT_MOBILE' => 0,
    'LISTING_PRODUCT_TABLET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565f2e1bb426b7_57531338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565f2e1bb426b7_57531338')) {function content_565f2e1bb426b7_57531338($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"];?><?php $_smarty_tpl->tpl_vars["LISTING_GRIG_MODE"] = new Smarty_variable("grid", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_GRIG_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRIG_MODE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_GRIG_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRIG_MODE"];?><?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"];?><?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = new Smarty_variable("4", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"];?><?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"];?><?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"];?><?php $_smarty_tpl->tpl_vars["ENABLE_WISHLIST"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_WISHLIST"] = clone $_smarty_tpl->tpl_vars["ENABLE_WISHLIST"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_WISHLIST"] = clone $_smarty_tpl->tpl_vars["ENABLE_WISHLIST"];?><?php $_smarty_tpl->tpl_vars["ENABLE_COLOR"] = new Smarty_variable("0", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_COLOR"] = clone $_smarty_tpl->tpl_vars["ENABLE_COLOR"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_COLOR"] = clone $_smarty_tpl->tpl_vars["ENABLE_COLOR"];?><?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value=="5") {?>
    <?php $_smarty_tpl->tpl_vars["colValue"] = new Smarty_variable("col-xs-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value))." col-md-2-4", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["colValue"] = new Smarty_variable("col-xs-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value))." col-md-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value)), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"];?>
<?php }?><?php }} ?>
