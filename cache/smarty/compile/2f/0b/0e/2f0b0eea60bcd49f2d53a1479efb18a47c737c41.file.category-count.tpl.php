<?php /* Smarty version Smarty-3.1.19, created on 2016-09-15 23:40:15
         compiled from "/home/iisuk/industrialprinterscan.uk/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88041519757db234f01dbe5-04046341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f0b0eea60bcd49f2d53a1479efb18a47c737c41' => 
    array (
      0 => '/home/iisuk/industrialprinterscan.uk/themes/default-bootstrap/category-count.tpl',
      1 => 1473968516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88041519757db234f01dbe5-04046341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57db234f041862_96433869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57db234f041862_96433869')) {function content_57db234f041862_96433869($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
