<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 21:27:26
         compiled from "/var/www/pacxs.local/public_html/themes/fashionbird/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255226798565cb12ea14ed9-87753299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b634edad40bde68fd08ef7358783fa17a91ded53' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/fashionbird/404.tpl',
      1 => 1448915166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255226798565cb12ea14ed9-87753299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565cb12ea4f460_02356776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cb12ea4f460_02356776')) {function content_565cb12ea4f460_02356776($_smarty_tpl) {?>
<div class="pagenotfound titled_box">
	<h1><span><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</span></h1>

	<p class="warning">
		<i class="icon-info-sign"></i><?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

	</p>

	<h2><span><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</span></h2>
	<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="post" class="std">
		<fieldset>
			<p>
				<label for="search"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
				<input id="search_query" name="search_query" type="text" />
				<input type="submit" name="Submit" value="OK" class="button_small" />
			</p>
		</fieldset>
	</form>

	<p class="footer_link_bottom"><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><i class="icon-home"></i> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></p>
</div><?php }} ?>
