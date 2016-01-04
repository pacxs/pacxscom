<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 21:26:36
         compiled from "/var/www/pacxs.local/public_html/themes/fashionbird/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2017545934565cb0fc6473f2-97527091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '500ebfd647db0af1c1e2ed2e7c9bb5744a8ee839' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/fashionbird/modules/blockstore/blockstore.tpl',
      1 => 1448915166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2017545934565cb0fc6473f2-97527091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565cb0fc65b287_53273595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cb0fc65b287_53273595')) {function content_565cb0fc65b287_53273595($_smarty_tpl) {?>

<section id="stores_block_left" class="block  column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content blockstore toggle_content">
		<p class="store_image"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"  /></a></p>
		<p>
			<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Discover our store(s)d!','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</section>
<!-- /Block stores module -->
<?php }} ?>
