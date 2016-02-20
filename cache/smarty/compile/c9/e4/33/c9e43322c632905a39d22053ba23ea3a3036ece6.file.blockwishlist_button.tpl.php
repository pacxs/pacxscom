<?php /* Smarty version Smarty-3.1.19, created on 2016-02-14 22:01:20
         compiled from "/home/miscal5/pacxs.com/public_html/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180892707956c0eb20ecc743-12126350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e43322c632905a39d22053ba23ea3a3036ece6' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1452191478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180892707956c0eb20ecc743-12126350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c0eb20ed9e48_99012904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c0eb20ed9e48_99012904')) {function content_56c0eb20ed9e48_99012904($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
