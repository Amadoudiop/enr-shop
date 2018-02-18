<?php /* Smarty version Smarty-3.1.19, created on 2017-10-29 01:38:22
         compiled from "/app/myapp/themes/theme_kavir3/modules/posbestsellers/posbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58230402259f514eecf3879-56169323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82fe74e2852da3e0736615e13798256d52f4b54a' => 
    array (
      0 => '/app/myapp/themes/theme_kavir3/modules/posbestsellers/posbestsellers.tpl',
      1 => 1509046300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58230402259f514eecf3879-56169323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'config' => 0,
    'rows' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f514eed3ac24_66264887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f514eed3ac24_66264887')) {function content_59f514eed3ac24_66264887($_smarty_tpl) {?>
<div class="pos-bestsellers-product">
	<div class="pos_title">
		<h2><?php echo smartyTranslate(array('s'=>'bestsellers','mod'=>'posbestsellers'),$_smarty_tpl);?>
</h2>
	</div>
	<div class=" row pos_content">
	<?php if (count($_smarty_tpl->tpl_vars['products']->value)>0&&$_smarty_tpl->tpl_vars['products']->value!=null) {?>
		<?php $_smarty_tpl->tpl_vars['rows'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['POS_HOME_SELLER_ROWS'], null, 0);?>
		<div class="bestsellerSlide">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%$_smarty_tpl->tpl_vars['rows']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
					<div class="item-product">
				<?php }?>
					<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%$_smarty_tpl->tpl_vars['rows']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
					</div>
				<?php }?>
			<?php } ?>
		</div>
	<?php } else { ?>
		<p><?php echo smartyTranslate(array('s'=>'No best sellers at this time','mod'=>'posbestsellers'),$_smarty_tpl);?>
</p>	
	<?php }?>	
	</div>
</div>
<?php }} ?>
