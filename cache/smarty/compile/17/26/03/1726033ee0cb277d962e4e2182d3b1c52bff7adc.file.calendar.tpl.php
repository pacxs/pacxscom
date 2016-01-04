<?php /* Smarty version Smarty-3.1.19, created on 2016-01-03 11:52:57
         compiled from "/var/www/pacxs.local/public_html/admin123/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17962382925688fd89440cd6-70753709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1726033ee0cb277d962e4e2182d3b1c52bff7adc' => 
    array (
      0 => '/var/www/pacxs.local/public_html/admin123/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1447585407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17962382925688fd89440cd6-70753709',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5688fd89448ca1_00434580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688fd89448ca1_00434580')) {function content_5688fd89448ca1_00434580($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
