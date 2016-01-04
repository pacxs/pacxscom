<?php /* Smarty version Smarty-3.1.19, created on 2016-01-03 11:19:40
         compiled from "/var/www/pacxs.local/public_html/admin123/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19145226375688f5bc8589c4-40229221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a93982a8d885a86e3b5278da78e5183953a5299' => 
    array (
      0 => '/var/www/pacxs.local/public_html/admin123/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1447585407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19145226375688f5bc8589c4-40229221',
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
  'unifunc' => 'content_5688f5bc8e8f98_95695475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688f5bc8e8f98_95695475')) {function content_5688f5bc8e8f98_95695475($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
