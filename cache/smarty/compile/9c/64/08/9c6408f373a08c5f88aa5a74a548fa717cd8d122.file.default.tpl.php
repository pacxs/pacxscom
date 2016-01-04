<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 19:01:12
         compiled from "/var/www/pacxs.local/public_html/modules/blockleocustom3/tmpl/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:889407629565c8ee81be459-87131363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c6408f373a08c5f88aa5a74a548fa717cd8d122' => 
    array (
      0 => '/var/www/pacxs.local/public_html/modules/blockleocustom3/tmpl/default.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889407629565c8ee81be459-87131363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_prefix' => 0,
    'pos' => 0,
    'show_title' => 0,
    'module_title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c8ee81c8cc6_61675430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c8ee81c8cc6_61675430')) {function content_565c8ee81c8cc6_61675430($_smarty_tpl) {?><div class="customhtml block <?php echo $_smarty_tpl->tpl_vars['class_prefix']->value;?>
" id="leo-customhtml-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
">
	<?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
		<h3 class="title_block"><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</h3>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div><?php }} ?>
