<?php /* Smarty version Smarty-3.1.19, created on 2016-01-03 10:29:13
         compiled from "/var/www/pacxs.local/public_html/themes/leoconv/modules/blockleorelatedproducts/blockleorelatedproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11254476575688e9e9b6c8e7-11302561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42ab44bcf508edc1ae8bbe5f62ccd9d2e58d1b9' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/leoconv/modules/blockleorelatedproducts/blockleorelatedproducts.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11254476575688e9e9b6c8e7-11302561',
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
  'unifunc' => 'content_5688e9e9bd5525_33317293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688e9e9bd5525_33317293')) {function content_5688e9e9bd5525_33317293($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="relatedproducts" class="block products_block exclusive blockleorelatedproducts">
	<h4 class="title-style title_block"> 
		<span><?php echo smartyTranslate(array('s'=>'Related products','mod'=>'blockleorelatedproducts'),$_smarty_tpl);?>
</span>
	</h4>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("leorelatedcarousel", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.blockleorelatedproducts .carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
 <?php }} ?>
