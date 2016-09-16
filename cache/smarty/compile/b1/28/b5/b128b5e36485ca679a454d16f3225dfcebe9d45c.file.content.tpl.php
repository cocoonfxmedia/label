<?php /* Smarty version Smarty-3.1.19, created on 2016-09-15 23:18:18
         compiled from "/home/iisuk/industrialprinterscan.uk/admin8294a6uij/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147645228157db1e2a5d5573-31274378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b128b5e36485ca679a454d16f3225dfcebe9d45c' => 
    array (
      0 => '/home/iisuk/industrialprinterscan.uk/admin8294a6uij/themes/default/template/controllers/localization/content.tpl',
      1 => 1473968645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147645228157db1e2a5d5573-31274378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57db1e2a5f3db0_92805577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57db1e2a5f3db0_92805577')) {function content_57db1e2a5f3db0_92805577($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
