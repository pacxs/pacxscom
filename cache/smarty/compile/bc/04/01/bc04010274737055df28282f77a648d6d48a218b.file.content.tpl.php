<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 16:51:34
         compiled from "/var/www/pacxs.local/public_html/admin123/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125396001565c7086daaca2-89217201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc04010274737055df28282f77a648d6d48a218b' => 
    array (
      0 => '/var/www/pacxs.local/public_html/admin123/themes/default/template/content.tpl',
      1 => 1447585407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125396001565c7086daaca2-89217201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c7086dc0312_22302387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c7086dc0312_22302387')) {function content_565c7086dc0312_22302387($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
