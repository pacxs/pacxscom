<?php /* Smarty version Smarty-3.1.19, created on 2016-03-03 12:34:49
         compiled from "/home/miscal5/pacxs.com/public_html/modules/asmcarrier/templates/adminOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5818872156d82159ef7569-45797917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98e37b2311904a5a9d5ede01e07a0121438d9370' => 
    array (
      0 => '/home/miscal5/pacxs.com/public_html/modules/asmcarrier/templates/adminOrder.tpl',
      1 => 1452191477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5818872156d82159ef7569-45797917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'asm_lopeta' => 0,
    'mensaje' => 0,
    'bultos_info' => 0,
    'bultos_info_b' => 0,
    'bultos_message' => 0,
    'bultos_input_txt' => 0,
    'bultos_controller' => 0,
    'bultos_id_order' => 0,
    'bultos_regenerar' => 0,
    'bultos_token' => 0,
    'bultos_btn' => 0,
    'asm_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d8215a02e668_06034145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d8215a02e668_06034145')) {function content_56d8215a02e668_06034145($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['version']->value>=1.6) {?>
<!-- Versión >= 1.6-->
<div class="row">
    <div class="col-lg-7">
        <div class="panel">
            <div class="panel-heading">
                <i class="icon-truck"></i>
                <?php echo $_smarty_tpl->tpl_vars['asm_lopeta']->value;?>

            </div>
            <div class="alert alert-warning">
                <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
            </div>
            <div class="alert alert-info">
                <p><?php echo $_smarty_tpl->tpl_vars['bultos_info']->value;?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['bultos_info_b']->value;?>
</p>
            </div>
            <form id="asm_bultos" name="asm_bultos" title="" action="index.php" method="get" class="form-horizontal well hidden-print">
                <div class="form-group">
                    <label for="asm_bultos_user" class="control-label col-lg-1">
                        <?php echo $_smarty_tpl->tpl_vars['bultos_message']->value;?>
:
                    </label>
                    <div class="col-lg-11">
                        <div class="col-lg-2">
                            <input type="number" title="<?php echo $_smarty_tpl->tpl_vars['bultos_input_txt']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bultos_input_txt']->value;?>
" id="asm_bultos_user" name="asm_bultos_user" pattern="[0-9]" class="form-control fixed-width-sm"  />
                        </div>
                        <div class="col-lg-10">
                            <input type="hidden" name="controller" value="<?php echo $_smarty_tpl->tpl_vars['bultos_controller']->value;?>
" />
                            <input type="hidden" name="id_order" value="<?php echo $_smarty_tpl->tpl_vars['bultos_id_order']->value;?>
" />
                            <input type="hidden" name="regenerar" value="<?php echo $_smarty_tpl->tpl_vars['bultos_regenerar']->value;?>
" />
                            <input type="hidden" name="vieworder" value="" />
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['bultos_token']->value;?>
" />
                            <input type="submit" title="<?php echo $_smarty_tpl->tpl_vars['bultos_btn']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bultos_btn']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['bultos_btn']->value;?>
" class="btn btn-primary" />
                        </div>
                    </div>
                </div>
            </form>
            <small><?php echo $_smarty_tpl->tpl_vars['asm_version']->value;?>
</small>
        </div>
    </div>
</div>
<?php } else { ?>
<!-- Versión < 1.6-->
<fieldset class="space" style="clear:both">
    <legend><img src="../modules/asmcarrier/logo_asm.JPG" title="<?php echo $_smarty_tpl->tpl_vars['asm_lopeta']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['asm_lopeta']->value;?>
" width="80" class="middle" /> <?php echo $_smarty_tpl->tpl_vars['asm_lopeta']->value;?>
</legend>
    <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['bultos_info']->value;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['bultos_info_b']->value;?>
</p>
    <form id="asm_bultos" name="asm_bultos" title="" action="index.php" method="get">
        <label for="asm_bultos_user">
            <?php echo $_smarty_tpl->tpl_vars['bultos_message']->value;?>
:
        </label>
        <input type="number" title="<?php echo $_smarty_tpl->tpl_vars['bultos_input_txt']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bultos_input_txt']->value;?>
" id="asm_bultos_user" name="asm_bultos_user" pattern="[0-9]"  />
        <?php if ($_smarty_tpl->tpl_vars['version']->value>=1.5) {?>
        <!-- Versión >= 1.5-->
        <input type="hidden" name="controller" value="<?php echo $_smarty_tpl->tpl_vars['bultos_controller']->value;?>
" />
        <?php } else { ?>
        <!-- Versión <= 1.4-->
        <input type="hidden" name="tab" value="<?php echo $_smarty_tpl->tpl_vars['bultos_controller']->value;?>
" />
        <?php }?>
        <input type="hidden" name="id_order" value="<?php echo $_smarty_tpl->tpl_vars['bultos_id_order']->value;?>
" />
        <input type="hidden" name="regenerar" value="<?php echo $_smarty_tpl->tpl_vars['bultos_regenerar']->value;?>
" />
        <input type="hidden" name="vieworder" value="" />
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['bultos_token']->value;?>
" />
        <input type="submit" title="<?php echo $_smarty_tpl->tpl_vars['bultos_btn']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bultos_btn']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['bultos_btn']->value;?>
" />
    </form>
    <small><?php echo $_smarty_tpl->tpl_vars['asm_version']->value;?>
</small>
</fieldset>
<?php }?><?php }} ?>
