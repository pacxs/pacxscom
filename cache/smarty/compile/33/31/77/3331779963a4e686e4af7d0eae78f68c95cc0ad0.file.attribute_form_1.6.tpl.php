<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 14:28:52
         compiled from "/var/www/pacxs.local/public_html/modules/blocklayered/views/templates/hook/attribute_form_1.6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42624412565ef214f2a480-15434451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3331779963a4e686e4af7d0eae78f68c95cc0ad0' => 
    array (
      0 => '/var/www/pacxs.local/public_html/modules/blocklayered/views/templates/hook/attribute_form_1.6.tpl',
      1 => 1448474582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42624412565ef214f2a480-15434451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'default_form_language' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565ef2150458c1_01804137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565ef2150458c1_01804137')) {function content_565ef2150458c1_01804137($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Invalid characters: <>;=#{}_','mod'=>'blocklayered'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'URL','mod'=>'blocklayered'),$_smarty_tpl);?>
</span>
	</label>
	<div class="col-lg-9">
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['default_form_language']->value) {?>block<?php } else { ?>none<?php }?>;">
				<div class="col-lg-9">
					<input type="text" size="64" name="url_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])&&isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['url_name'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['url_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" />
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
						<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<?php } ?>
			<div class="col-lg-9">
				<p class="help-block"><?php echo smartyTranslate(array('s'=>'When the Layered Navigation Block module is enabled, you can get more detailed URLs by choosing the word that best represent this attribute. By default, PrestaShop uses the attribute\'s name, but you can change that setting using this field.','mod'=>'blocklayered'),$_smarty_tpl);?>
</p>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Meta title','mod'=>'blocklayered'),$_smarty_tpl);?>
</label>
	<div class="col-lg-9">
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['default_form_language']->value) {?>block<?php } else { ?>none<?php }?>;">
				<div class="col-lg-9">
					<input type="text" size="70" name="meta_title_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])&&isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['meta_title'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['meta_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" />
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
						<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<?php } ?>
			<div class="col-lg-9">
				<p class="help-block"><?php echo smartyTranslate(array('s'=>'When the Layered Navigation Block module is enabled, you can get more detailed page titles by choosing the word that best represent this attribute. By default, PrestaShop uses the attribute\'s name, but you can change that setting using this field.','mod'=>'blocklayered'),$_smarty_tpl);?>
</p>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
