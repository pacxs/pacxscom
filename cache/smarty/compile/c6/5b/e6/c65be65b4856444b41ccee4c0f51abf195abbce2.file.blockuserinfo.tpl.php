<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 21:26:36
         compiled from "/var/www/pacxs.local/public_html/themes/fashionbird/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1526810127565cb0fc12e960-94228803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65be65b4856444b41ccee4c0f51abf195abbce2' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/fashionbird/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1448915166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526810127565cb0fc12e960-94228803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'cart_qties' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565cb0fc15d054_31811028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cb0fc15d054_31811028')) {function content_565cb0fc15d054_31811028($_smarty_tpl) {?>

<!-- Block user information module HEADER -->
<section class="blockuserinfo header-box">
		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout");?>
" title="<?php echo smartyTranslate(array('s'=>'Log&nbsp;out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout" rel="tooltip" data-original-title="first tooltip"><span><i class="icon-lock"></i></span></a>
		<?php } else { ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="login" rel="tooltip" data-original-title="first tooltip" ><span><i class="icon-unlock"></i></span></a>
		<?php }?>
</section>

<section id="header_user" class="blockuserinfo-cart header-box">
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
		<div id="shopping_cart">
          <strong class="opancart"></strong>
                <span class="shopping_cart_title"><?php echo smartyTranslate(array('s'=>'Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
                <span class="ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0) {?> hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
                <span class="ajax_cart_product_txt<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value!=1) {?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'Product','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
                <span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value<2) {?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'Products','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
                 
                <span class="ajax_cart_no_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0) {?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
		</div>
		<?php }?>
</section><?php }} ?>
