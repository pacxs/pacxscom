<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 18:43:11
         compiled from "/var/www/pacxs.local/public_html/themes/ap_underwear/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:521357948565f2daf9f5690-85943325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27128a7ab486eb1ba61ffb161fb61e0644f75c48' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/ap_underwear/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1449078076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521357948565f2daf9f5690-85943325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565f2dafa1c4c6_55480390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565f2dafa1c4c6_55480390')) {function content_565f2dafa1c4c6_55480390($_smarty_tpl) {?>
<!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>

<div class="popup-over pull-left e-scale-down">
	<div data-toggle="dropdown" class="popup-title">
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>
					<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>

				<?php }?>
			<?php } ?>

	</div>
	<div class="popup-content">
		<div id="currencies-block-top">
			<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
		 	
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
	 
				<ul id="first-currencies" class="currencies_ul toogle_content list">
					<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
						<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
							<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
 <?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>

							</a>
						</li>
					<?php } ?>
				</ul>
			</form>
		</div>
	</div>	
</div>


	
<?php }?>
<!-- /Block currencies module --><?php }} ?>
