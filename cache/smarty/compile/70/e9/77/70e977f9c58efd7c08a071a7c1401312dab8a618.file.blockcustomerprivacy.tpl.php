<?php /* Smarty version Smarty-3.1.19, created on 2016-01-03 11:25:38
         compiled from "/var/www/pacxs.local/public_html/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6033079165688f7222602c5-03754023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e977f9c58efd7c08a071a7c1401312dab8a618' => 
    array (
      0 => '/var/www/pacxs.local/public_html/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1447585407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6033079165688f7222602c5-03754023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5688f7222eb9b4_24354373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688f7222eb9b4_24354373')) {function content_5688f7222eb9b4_24354373($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" autocomplete="off"/>				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>
