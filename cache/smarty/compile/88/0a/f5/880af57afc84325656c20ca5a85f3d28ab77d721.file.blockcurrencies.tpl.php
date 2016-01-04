<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 21:26:36
         compiled from "/var/www/pacxs.local/public_html/themes/fashionbird/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:754584022565cb0fc0702f2-99419464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '880af57afc84325656c20ca5a85f3d28ab77d721' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/fashionbird/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1448915166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '754584022565cb0fc0702f2-99419464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
    'blockcurrencies_sign' => 0,
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565cb0fc08fb01_97079681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cb0fc08fb01_97079681')) {function content_565cb0fc08fb01_97079681($_smarty_tpl) {?>

<!-- Block currencies module -->
<section id="currencies_block_top" class="header-box">
<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
		
		<p  class="inner-carrencies">
        <input type="hidden" name="id_currency" id="id_currency" value=""/>
		<input type="hidden" name="SubmitCurrency" value="" />
        <?php echo $_smarty_tpl->tpl_vars['blockcurrencies_sign']->value;?>
<span class="arrow_header_top"></span>    
		</p>
		<ul id="first-currencies" class="currencies_ul list_header">
			<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
				<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>
                            <span><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
</span><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>

                <?php } else { ?>
					<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>
</span><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
</a>
                    
        
                    
                    			
                    <?php }?>
				</li>
			<?php } ?>
		</ul>
	</form>
</section>
<!-- /Block currencies module --><?php }} ?>
