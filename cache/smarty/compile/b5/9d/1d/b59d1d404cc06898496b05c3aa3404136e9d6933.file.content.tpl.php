<?php /* Smarty version Smarty-3.1.19, created on 2016-02-07 08:34:26
         compiled from "/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81622837356b6f3820f5fc8-97527383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b59d1d404cc06898496b05c3aa3404136e9d6933' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/admin123/themes/default/template/content.tpl',
      1 => 1452191477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81622837356b6f3820f5fc8-97527383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b6f3820fe562_77460622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b6f3820fe562_77460622')) {function content_56b6f3820fe562_77460622($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
