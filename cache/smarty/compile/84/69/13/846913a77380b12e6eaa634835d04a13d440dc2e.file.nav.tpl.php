<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 18:44:59
         compiled from "/var/www/pacxs.local/public_html/themes/ap_food/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:470237692565f2e1bbc7f49-34335354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '846913a77380b12e6eaa634835d04a13d440dc2e' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/ap_food/modules/blockuserinfo/nav.tpl',
      1 => 1449077825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '470237692565f2e1bbc7f49-34335354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
    'order_process' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565f2e1bc2c1a3_99294594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565f2e1bc2c1a3_99294594')) {function content_565f2e1bc2c1a3_99294594($_smarty_tpl) {?>
<!-- Block user information module NAV  -->
<ul id="header_user_info" class="pull-left">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<li class="header_user_info">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow">
			<span class="hidden-xs"><?php echo smartyTranslate(array('s'=>'Welcome','mod'=>'blockuserinfo'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span>
		</a>
	</li>
	<?php } else { ?>
		<li class="login hidden-xs hidden-sm"><?php echo smartyTranslate(array('s'=>'Welcome visitor you can','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 
			<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><strong><?php echo smartyTranslate(array('s'=>'login','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</strong></a> <?php echo smartyTranslate(array('s'=>'or','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 
			<a class="login"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Create an account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><strong><?php echo smartyTranslate(array('s'=>'create an account.','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</strong></a>
		</li>	
	<?php }?>
</ul>
<div class="header_user_info popup-over pull-right e-scale">
	<div class="popup-title"><i class="fa fa-user"></i></div>
	<div class="popup-content">
		<ul class="list">
			<li class="first">
				<a id="wishlist-total" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Wish List','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			</li>	
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="last"><?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
					<?php echo smartyTranslate(array('s'=>'Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>

				</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
				<li>
					<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
				</li>
			<?php }?>
		</ul>
	</div>
</div>	<?php }} ?>
