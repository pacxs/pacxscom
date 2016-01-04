<?php /* Smarty version Smarty-3.1.19, created on 2015-11-30 19:01:13
         compiled from "/var/www/pacxs.local/public_html/themes/leoconv/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1350938096565c8ee918c978-58171942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe26794e49d2d651e1f69204f446a8f1a25c5b2' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/leoconv/footer.tpl',
      1 => 1448906178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1350938096565c8ee918c978-58171942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565c8ee91a23a6_73593841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565c8ee91a23a6_73593841')) {function content_565c8ee91a23a6_73593841($_smarty_tpl) {?>
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
							</div><!-- 5-->
						</div><!-- 4-->
						
						<?php if ($_smarty_tpl->tpl_vars['page_name']->value!="index") {?>
						<div id="leo-rightcol" class="span3">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

						</div><!--righttcol-->
						<?php }?>	
					</div><!-- End Of Fluid-Width -->
				</div><!-- 4-->
			</div>
			</div>

			<div id="leo-manufac" class="leo-manufac">
			
				<div class="row-fluid">
					<div class="container">
						<?php echo Hook::exec('bottomManufacturer');?>

					</div>
				</div>
			</div>
		<!-- Footer -->	
   		<div id="leo-footer" class=" leo-footer">
			<div class="footer-wrapper">
			</div>
			<div class="container">	
				<div class="row-fluid"  >
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
	
				</div>
			</div>  <!--footer-->	
			
		</div>
	<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
		   <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	</div>	<!--leopage-->
	</body>
</html><?php }} ?>
