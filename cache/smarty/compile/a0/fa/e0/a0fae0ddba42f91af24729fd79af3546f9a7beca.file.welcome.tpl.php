<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 21:26:36
         compiled from "/var/www/pacxs.local/public_html/modules/welcome/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:487462925565cb0fc662d87-16836684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0fae0ddba42f91af24729fd79af3546f9a7beca' => 
    array (
      0 => '/var/www/pacxs.local/public_html/modules/welcome/welcome.tpl',
      1 => 1448915166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '487462925565cb0fc662d87-16836684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homepage_logo_wel' => 0,
    'welcome' => 0,
    'image_path_wel' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565cb0fc672700_36060337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cb0fc672700_36060337')) {function content_565cb0fc672700_36060337($_smarty_tpl) {?>

<!-- Module welcome -->
<div id="welcome_block_center" class="welcome_block">
<div class="container">
<div class="sixteen columns">

	<?php if ($_smarty_tpl->tpl_vars['homepage_logo_wel']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['welcome']->value->body_home_logo_link;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['image_path_wel']->value);?>
" /></a> <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['welcome']->value->body_paragraph) {?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['welcome']->value->body_paragraph);?>
</div><?php }?>
	
	
</div>
</div>
</div>
<!-- /Module welcome -->
<?php }} ?>
