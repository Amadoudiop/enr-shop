<?php /* Smarty version Smarty-3.1.19, created on 2017-10-29 01:38:23
         compiled from "modules/posrotatorimg/rotator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24689196059f514ef0929d0-99782349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ea3eab4317b20e43b8d4f991ffd66fe7bd1b7a' => 
    array (
      0 => 'modules/posrotatorimg/rotator.tpl',
      1 => 1509046299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24689196059f514ef0929d0-99782349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rotator_img' => 0,
    'product' => 0,
    'image' => 0,
    'class_name' => 0,
    'imagesize' => 0,
    'imageIds' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f514ef0a51e2_88814207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f514ef0a51e2_88814207')) {function content_59f514ef0a51e2_88814207($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['rotator_img']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rotator_img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
		  <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
          <img class="img-responsive second-image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
" 
		  <?php if (isset($_smarty_tpl->tpl_vars['imagesize']->value)) {?>
			src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,$_smarty_tpl->tpl_vars['imagesize']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
		  <?php } else { ?>
			src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
		  <?php }?>
		  alt="" itemprop="image"  />
    <?php } ?>
<?php }?>		<?php }} ?>
