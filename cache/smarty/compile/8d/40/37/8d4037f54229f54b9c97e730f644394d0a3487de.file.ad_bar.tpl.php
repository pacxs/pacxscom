<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 17:36:22
         compiled from "/var/www/pacxs.local/public_html/admin123/themes/default/template/controllers/modules/ad_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1562762456565c7b068226f5-22452938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d4037f54229f54b9c97e730f644394d0a3487de' => 
    array (
      0 => '/var/www/pacxs.local/public_html/admin123/themes/default/template/controllers/modules/ad_bar.tpl',
      1 => 1447585407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562762456565c7b068226f5-22452938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad_modules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c7b06854169_64631763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c7b06854169_64631763')) {function content_565c7b06854169_64631763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/pacxs.local/public_html/tools/smarty/plugins/function.cycle.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['ad_modules']->value['not_installed'])) {?>
<div class="bootstrap panel">
	<h3><i class="icon-certificate"></i> <?php echo smartyTranslate(array('s'=>'You might be interested in'),$_smarty_tpl);?>
</h3>
	<div class="row">
		<table id="tab_modules_list_not_installed" class="table">
			<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad_modules']->value['not_installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_row'=>$_tmp1), 0);?>

			<?php } ?>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }?>

<?php }} ?>
