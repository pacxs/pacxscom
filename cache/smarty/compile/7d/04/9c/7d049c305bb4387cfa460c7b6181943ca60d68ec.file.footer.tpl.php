<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 08:35:37
         compiled from "/home/miscal5/pacxs.com/public_html/pdf//footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77282479456c968c9343289-44573624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d049c305bb4387cfa460c7b6181943ca60d68ec' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/pdf//footer.tpl',
      1 => 1452191478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77282479456c968c9343289-44573624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'available_in_your_account' => 0,
    'shop_address' => 0,
    'shop_phone' => 0,
    'shop_fax' => 0,
    'shop_details' => 0,
    'free_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c968c9380de6_26423191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c968c9380de6_26423191')) {function content_56c968c9380de6_26423191($_smarty_tpl) {?>
<table>
	<tr>
		<td style="text-align: center; font-size: 6pt; color: #444">
            <?php if ($_smarty_tpl->tpl_vars['available_in_your_account']->value) {?>
                <?php echo smartyTranslate(array('s'=>'An electronic version of this invoice is available in your account. To access it, log in to our website using your e-mail address and password (which you created when placing your first order).','pdf'=>'true'),$_smarty_tpl);?>
             
    			<br />
            <?php }?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<br />

			<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)||!empty($_smarty_tpl->tpl_vars['shop_fax']->value)) {?>
				<?php echo smartyTranslate(array('s'=>'For more assistance, contact Support:','pdf'=>'true'),$_smarty_tpl);?>
<br />
				<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)) {?>
					Tel: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_phone']->value, ENT_QUOTES, 'UTF-8', true);?>

				<?php }?>

				<?php if (!empty($_smarty_tpl->tpl_vars['shop_fax']->value)) {?>
					Fax: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_fax']->value, ENT_QUOTES, 'UTF-8', true);?>

				<?php }?>
				<br />
			<?php }?>
            
            <?php if (isset($_smarty_tpl->tpl_vars['shop_details']->value)) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_details']->value, ENT_QUOTES, 'UTF-8', true);?>
<br />
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['free_text']->value)) {?>
    			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['free_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<br />
            <?php }?>
		</td>
	</tr>
</table>

<?php }} ?>
