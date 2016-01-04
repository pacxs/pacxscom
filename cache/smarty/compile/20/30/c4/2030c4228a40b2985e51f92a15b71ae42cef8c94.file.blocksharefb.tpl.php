<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 21:27:41
         compiled from "/var/www/pacxs.local/public_html/themes/fashionbird/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1343787908565cb13d6f1212-94027759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2030c4228a40b2985e51f92a15b71ae42cef8c94' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/fashionbird/modules/blocksharefb/blocksharefb.tpl',
      1 => 1448915166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1343787908565cb13d6f1212-94027759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565cb13d6f7601_49012649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cb13d6f7601_49012649')) {function content_565cb13d6f7601_49012649($_smarty_tpl) {?>
<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><i class="icon-facebook-sign"></i><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
