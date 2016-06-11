<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 08:35:48
         compiled from "/home/miscal5/pacxs.com/public_html/modules/paypal/views/templates/hook/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31000662456c968d4583d39-95285369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ae30903e2c311333f1853bbcfd9adf255545a0' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/modules/paypal/views/templates/hook/confirmation.tpl',
      1 => 1452191478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31000662456c968d4583d39-95285369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c968d45c23c1_15857548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c968d45c23c1_15857548')) {function content_56c968d45c23c1_15857548($_smarty_tpl) {?>

<p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="bold"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'paypal'),$_smarty_tpl);?>

	<br /><br />
	<?php echo smartyTranslate(array('s'=>'You have chosen the PayPal method.','mod'=>'paypal'),$_smarty_tpl);?>

	<br /><br /><span class="bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent very soon.','mod'=>'paypal'),$_smarty_tpl);?>
</span>
	<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'paypal'),$_smarty_tpl);?>

	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" data-ajax="false" target="_blank"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'paypal'),$_smarty_tpl);?>
</a>.
</p>
<?php }} ?>
