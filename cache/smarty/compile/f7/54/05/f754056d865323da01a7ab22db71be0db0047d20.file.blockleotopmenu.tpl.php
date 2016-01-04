<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 19:03:00
         compiled from "/var/www/pacxs.local/public_html/modules/blockleotopmenu/blockleotopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1713226996565c8f5416fe12-87009438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f754056d865323da01a7ab22db71be0db0047d20' => 
    array (
      0 => '/var/www/pacxs.local/public_html/modules/blockleotopmenu/blockleotopmenu.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713226996565c8f5416fe12-87009438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c8f54195a51_03994604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c8f54195a51_03994604')) {function content_565c8f54195a51_03994604($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div class="navbar"><div class="navbar-inner">
		<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
		</button>
		<div class="nav-collapse collapse">
			<ul class="nav ">
				<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			</ul>
		</div>
    </div></div>
	<!--/ Menu -->
<?php }?><?php }} ?>
