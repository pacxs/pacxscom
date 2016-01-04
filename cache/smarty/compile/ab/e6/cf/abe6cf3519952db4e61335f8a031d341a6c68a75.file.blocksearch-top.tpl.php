<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 18:43:11
         compiled from "/var/www/pacxs.local/public_html/themes/ap_underwear/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974189435565f2dafd7a528-53420453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe6cf3519952db4e61335f8a031d341a6c68a75' => 
    array (
      0 => '/var/www/pacxs.local/public_html/themes/ap_underwear/modules/blocksearch/blocksearch-top.tpl',
      1 => 1449078076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '974189435565f2dafd7a528-53420453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565f2dafd8bb09_98041914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565f2dafd8bb09_98041914')) {function content_565f2dafd8bb09_98041914($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-outline-inverse fa fa-search">&nbsp;</button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
