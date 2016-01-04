<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 19:01:11
         compiled from "/var/www/pacxs.local/public_html/themes/leoconv/modules/blockleoprodcarousel/blockleoprodcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1170881558565c8ee7edd611-90943704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f352f2c27f397b6fefc5f722b9774e86e07dc7a5' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/leoconv/modules/blockleoprodcarousel/blockleoprodcarousel.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1170881558565c8ee7edd611-90943704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c8ee7eeb5c0_85394270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c8ee7eeb5c0_85394270')) {function content_565c8ee7eeb5c0_85394270($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="categoriesprodtabs" class="block products_block exclusive blockleoprodcarousel">
	<h4 class="title-style title_block">
		<span><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</span>
	</h4>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("leoproductcarousel", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
 <?php }} ?>
