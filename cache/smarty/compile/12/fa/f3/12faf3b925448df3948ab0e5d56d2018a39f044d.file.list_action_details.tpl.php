<?php /* Smarty version Smarty-3.1.19, created on 2016-09-15 23:18:43
         compiled from "/home/iisuk/industrialprinterscan.uk/admin8294a6uij/themes/default/template/helpers/list/list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206667394957db1e43b37f70-76398207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12faf3b925448df3948ab0e5d56d2018a39f044d' => 
    array (
      0 => '/home/iisuk/industrialprinterscan.uk/admin8294a6uij/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1473968678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206667394957db1e43b37f70-76398207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'params' => 0,
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57db1e43b5c2e9_53335614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57db1e43b5c2e9_53335614')) {function content_57db1e43b5c2e9_53335614($_smarty_tpl) {?>

<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="">
	<i class="icon-eye-open"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
