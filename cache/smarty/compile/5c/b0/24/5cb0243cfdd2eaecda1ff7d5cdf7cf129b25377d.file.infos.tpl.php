<?php /* Smarty version Smarty-3.1.19, created on 2016-01-03 12:45:08
         compiled from "/var/www/pacxs.local/public_html/modules/bankwire/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1969585341568909c40b6bd1-76917270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb0243cfdd2eaecda1ff7d5cdf7cf129b25377d' => 
    array (
      0 => '/var/www/pacxs.local/public_html/modules/bankwire/views/templates/hook/infos.tpl',
      1 => 1448474597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969585341568909c40b6bd1-76917270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568909c412ccf6_32059929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568909c412ccf6_32059929')) {function content_568909c412ccf6_32059929($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
