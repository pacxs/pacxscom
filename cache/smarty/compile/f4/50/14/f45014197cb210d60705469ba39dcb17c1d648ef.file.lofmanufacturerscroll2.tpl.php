<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 19:03:00
         compiled from "/var/www/pacxs.local/public_html/themes/leoconv/modules/lofmanufacturerscroll2/lofmanufacturerscroll2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3007339565c8f541a0933-15123745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45014197cb210d60705469ba39dcb17c1d648ef' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/leoconv/modules/lofmanufacturerscroll2/lofmanufacturerscroll2.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3007339565c8f541a0933-15123745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_title' => 0,
    'module_title' => 0,
    'lofmanufacturers' => 0,
    'manufacturer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c8f541b2c21_03412306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c8f541b2c21_03412306')) {function content_565c8f541b2c21_03412306($_smarty_tpl) {?><div id="mycarouselHolder" align="center" class="block">
	<div class="row-fluid">
		<?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
			<div class="span3">
				<h2><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</h2>
			</div>
		<?php }?>		
		<div class="<?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>span9<?php }?> jcarousel-wrap">		
			<div id="wrap">
			  <ul id="lofjcarousel" class="jcarousel-skin-tango">
				<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lofmanufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
					<li class="lof-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['link'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['linkIMG'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
" vspace="0" border="0" />
							
						</a>
					</li>
				<?php } ?>
			  </ul>
			</div>
		</div>
	</div>
</div><?php }} ?>
