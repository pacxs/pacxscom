<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 21:26:36
         compiled from "/var/www/pacxs.local/public_html/themes/fashionbird/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1844499990565cb0fc179762-62771972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5735e135718d9c2872e916ef96ddd0e7634e3ec' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/fashionbird/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1448915166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844499990565cb0fc179762-62771972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565cb0fc17e8b0_96923593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cb0fc17e8b0_96923593')) {function content_565cb0fc17e8b0_96923593($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
<div class="navbar">
<div class="navbar-inner">
<div class="container">  
	<ul class="nav">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			
		</ul>
	</div>
</div>
</div>
<?php }?><?php }} ?>
