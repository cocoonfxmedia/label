<?php /* Smarty version Smarty-3.1.19, created on 2016-09-15 22:02:43
         compiled from "/home/iisuk/industrialprinterscan.uk/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206437463157db0c73db0d00-02758754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '694d4cddd05750fe5171ee1f7802d1da4f4e2d9d' => 
    array (
      0 => '/home/iisuk/industrialprinterscan.uk/modules/blockfacebook/blockfacebook.tpl',
      1 => 1473966191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206437463157db0c73db0d00-02758754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57db0c73dbe579_03829799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57db0c73dbe579_03829799')) {function content_57db0c73dbe579_03829799($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
