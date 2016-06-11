<?php /* Smarty version Smarty-3.1.19, created on 2016-03-03 08:25:38
         compiled from "/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101780263456d7e6f215b424-97948653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40138063a220d2ca41071ac82059200b06a50580' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/controllers/stats/stats.tpl',
      1 => 1452191477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101780263456d7e6f215b424-97948653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d7e6f2170fa6_24020338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d7e6f2170fa6_24020338')) {function content_56d7e6f2170fa6_24020338($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
