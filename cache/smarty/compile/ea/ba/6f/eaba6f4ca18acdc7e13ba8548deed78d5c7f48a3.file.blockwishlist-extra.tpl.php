<?php /* Smarty version Smarty-3.1.19, created on 2016-01-03 10:29:13
         compiled from "/var/www/pacxs.local/public_html/themes/leoconv/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17194063645688e9e9e5bcb8-41787500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaba6f4ca18acdc7e13ba8548deed78d5c7f48a3' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/leoconv/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17194063645688e9e9e5bcb8-41787500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5688e9e9e63b84_27197340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688e9e9e63b84_27197340')) {function content_5688e9e9e63b84_27197340($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	<a href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;">
		<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>
