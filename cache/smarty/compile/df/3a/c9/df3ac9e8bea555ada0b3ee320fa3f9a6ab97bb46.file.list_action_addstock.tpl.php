<?php /* Smarty version Smarty-3.1.19, created on 2016-02-14 21:56:24
         compiled from "/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47058091356c0e9f835fa55-79483638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df3ac9e8bea555ada0b3ee320fa3f9a6ab97bb46' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1452191477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47058091356c0e9f835fa55-79483638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c0e9f839f828_84598319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c0e9f839f828_84598319')) {function content_56c0e9f839f828_84598319($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
