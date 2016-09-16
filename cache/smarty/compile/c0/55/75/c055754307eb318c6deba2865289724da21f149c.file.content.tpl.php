<?php /* Smarty version Smarty-3.1.19, created on 2016-09-15 21:50:34
         compiled from "/home/iisuk/industrialprinterscan.uk/admin8294a6uij/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114772441657db099a5875e7-05354373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c055754307eb318c6deba2865289724da21f149c' => 
    array (
      0 => '/home/iisuk/industrialprinterscan.uk/admin8294a6uij/themes/default/template/content.tpl',
      1 => 1473968643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114772441657db099a5875e7-05354373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57db099a590ae2_85056080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57db099a590ae2_85056080')) {function content_57db099a590ae2_85056080($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
