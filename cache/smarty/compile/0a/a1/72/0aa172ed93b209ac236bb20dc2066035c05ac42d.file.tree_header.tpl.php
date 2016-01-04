<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 17:10:27
         compiled from "/var/www/pacxs.local/public_html/admin123/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699271706565c74f3d91b07-14367189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aa172ed93b209ac236bb20dc2066035c05ac42d' => 
    array (
      0 => '/var/www/pacxs.local/public_html/admin123/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1447585407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1699271706565c74f3d91b07-14367189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c74f3d9c817_77266678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c74f3d9c817_77266678')) {function content_565c74f3d9c817_77266678($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
