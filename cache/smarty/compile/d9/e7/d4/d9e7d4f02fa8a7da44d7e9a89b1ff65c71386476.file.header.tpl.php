<?php /* Smarty version Smarty-3.1.19, created on 2016-01-04 10:58:52
         compiled from "/var/www/pacxs.local/public_html/modules/paypal//views/templates/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:368223953568a425c79ee82-65344919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e7d4f02fa8a7da44d7e9a89b1ff65c71386476' => 
    array (
      0 => '/var/www/pacxs.local/public_html/modules/paypal//views/templates/admin/header.tpl',
      1 => 1451901524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '368223953568a425c79ee82-65344919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568a425c7ccb95_58192717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a425c7ccb95_58192717')) {function content_568a425c7ccb95_58192717($_smarty_tpl) {?>

<script type="text/javascript">
	var PayPal_WPS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_WPS']->value);?>
';
	var PayPal_HSS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_HSS']->value);?>
';
	var PayPal_ECS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_ECS']->value);?>
';
</script>

<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/views/js/back_office.js"></script><?php }} ?>
