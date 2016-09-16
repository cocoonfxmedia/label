<?php /*%%SmartyHeaderCode:89200051657db0c73718772-14465378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87a35f250ff6683d24554b01bc859f57189f79c' => 
    array (
      0 => '/home/iisuk/industrialprinterscan.uk/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1473968528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89200051657db0c73718772-14465378',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dbb7466f6ac9_37702474',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dbb7466f6ac9_37702474')) {function content_57dbb7466f6ac9_37702474($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//industrialprinterscan.uk/en/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
