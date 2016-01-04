<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 19:01:12
         compiled from "/var/www/pacxs.local/public_html/modules/blockleocustom1/tmpl/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1170648831565c8ee806f235-10440140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de149ee7c7a5803f4bbfaa8421a39e94730bcace' => 
    array (
      0 => '/var/www/pacxs.local/public_html/modules/blockleocustom1/tmpl/default.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1170648831565c8ee806f235-10440140',
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
  'unifunc' => 'content_565c8ee8078f40_95626413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c8ee8078f40_95626413')) {function content_565c8ee8078f40_95626413($_smarty_tpl) {?><div class="customhtml <?php echo $_smarty_tpl->tpl_vars['class_prefix']->value;?>
" id="leo-customhtml1-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
">
	<?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
		<h3 class="title_block"><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</h3>
	<?php }?>
	<div class="block_content1 clearfix">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div><?php }} ?>
