<?php /* Smarty version Smarty-3.1.19, created on 2016-03-07 11:10:54
         compiled from "/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/controllers/warehouses/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20119703956dd53ae62e474-82491981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '469276b79e75ce40962bc1b38b5c84ae2126dff6' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/controllers/warehouses/helpers/view/view.tpl',
      1 => 1452191477,
      2 => 'file',
    ),
    '8eaeff2716040e85dd396884bcf1178c873f9f3d' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/helpers/view/view.tpl',
      1 => 1452191477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20119703956dd53ae62e474-82491981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dd53ae707707_99634232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dd53ae707707_99634232')) {function content_56dd53ae707707_99634232($_smarty_tpl) {?>

<div class="leadin"></div>


<?php if (isset($_smarty_tpl->tpl_vars['warehouse']->value)) {?>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'General information'),$_smarty_tpl);?>
</h3>
	<div class="form-horizontal">
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Reference:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value->reference;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Name:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value->name;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Manager:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Country:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['address']->value->country!='') {?><?php echo $_smarty_tpl->tpl_vars['address']->value->country;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }?></p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Phone:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['address']->value->phone!='') {?><?php echo $_smarty_tpl->tpl_vars['address']->value->phone;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
<?php }?></p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Management type:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['warehouse']->value->management_type),$_smarty_tpl);?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Valuation currency:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
)</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Product references:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse_num_products']->value;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Physical product quantities:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse_quantities']->value;?>
</p></div>
		</div>
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Stock valuation:'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['warehouse_value']->value;?>
</p></div>
		</div>
	</div>
</div>
<div class="panel">
	<h3><i class="icon-sitemap"></i> <?php echo smartyTranslate(array('s'=>'Shops'),$_smarty_tpl);?>
</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['shops']->value)&&count($_smarty_tpl->tpl_vars['shops']->value)>0) {?>
	<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'The following are the shops associated with this warehouse.'),$_smarty_tpl);?>
</div>
	<table class="table">
		<thead>
			<tr>
				<th class="fixed-width-xs align-center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
				<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</span></th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>
			<tr>
				<td class="fixed-width-xs align-center"><?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php } else { ?>
	<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Currently there is no shop associated with this warehouse.'),$_smarty_tpl);?>
</div>
	<?php }?>
</div>
<div class="panel">
	<h3><i class="icon-archive"></i> <?php echo smartyTranslate(array('s'=>'Stock'),$_smarty_tpl);?>
</h3>
	<a class="btn btn-link" href="index.php?controller=adminstockinstantstate&amp;id_warehouse=<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->id;?>
&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminStockInstantState'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'See products details'),$_smarty_tpl);?>
 <i class="icon-external-link-sign"></i></a>
</div>
<div class="panel">
	<h3><i class="icon-reorder"></i> <?php echo smartyTranslate(array('s'=>'History'),$_smarty_tpl);?>
</h3>
	<a class="btn btn-link" href="index.php?controller=adminstockmvt&amp;id_warehouse=<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->id;?>
&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminStockMvt'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'See warehouse\'s activity details'),$_smarty_tpl);?>
 <i class="icon-external-link-sign"></i></a>
</div>
<?php } else { ?>
	<div class="panel"><div class="alert alert danger"><?php echo smartyTranslate(array('s'=>'This warehouse does not exist.'),$_smarty_tpl);?>
</div></div>
<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
