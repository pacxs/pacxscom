<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 19:01:11
         compiled from "/var/www/pacxs.local/public_html/themes/leoconv/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:491357328565c8ee7377a01-22100750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646c0822d50bc572ee668486f2f4084b06ce8957' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/leoconv/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '491357328565c8ee7377a01-22100750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c8ee73bb7d0_31859608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c8ee73bb7d0_31859608')) {function content_565c8ee73bb7d0_31859608($_smarty_tpl) {?><script type="text/javascript">
$(document).ready(function () {
	var width = $(window).width(); 
		
	$('#permanentlinks').each(function(){
		$(this).find('a.leo-mobile').click(function(){
		 $('#').slideToggle('slow');

		});
	  });
	
  $(window).resize(function(){
		var width = $(window).width();
		if(width >= 600){	
			$("#form-permanentlinks").css("display","block");
			$(".leo-button").css("display","none");
		}
		else{
			$("#form-permanentlinks").css("display","none");
			$(".leo-button").css("display","block");
			
		}
	});	
	

});
</script>

<!-- Block permanent links module HEADER -->
<div id="permanentlinks">
	<div class="leo-button"><a class="leo-mobile"><?php echo smartyTranslate(array('s'=>'Information','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></div>
	<div id="form-permanentlinks">
		<div class="nav-item">
			<div class="item-top"> 
				<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout");?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
				<?php } else { ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" class="login" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
				<?php }?>
			</div>
		</div>
		<div class="nav-item">
			<div class="item-top">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account');?>
" title="<?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
			</div>
		</div>
		<div class="nav-item" id="wishlist_block">
			<div class="item-top">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My Wishlist','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
			</div>
		</div>
	</div>
</div>
<!-- /Block permanent links module HEADER --><?php }} ?>
