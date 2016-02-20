<?php /* Smarty version Smarty-3.1.19, created on 2016-02-14 21:51:14
         compiled from "/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138824529056c0e8c2a356a2-98967404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8fc9dd3d4896c1b223eda3e0d6c92e0322449ce' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1452191477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138824529056c0e8c2a356a2-98967404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c0e8c2a48005_44914456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c0e8c2a48005_44914456')) {function content_56c0e8c2a48005_44914456($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
