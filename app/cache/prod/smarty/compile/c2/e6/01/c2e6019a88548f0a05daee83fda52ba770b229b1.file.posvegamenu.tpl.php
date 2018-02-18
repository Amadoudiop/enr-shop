<?php /* Smarty version Smarty-3.1.19, created on 2017-10-29 01:38:22
         compiled from "modules/posvegamenu/posvegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161736127959f514eecb0e32-92987531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2e6019a88548f0a05daee83fda52ba770b229b1' => 
    array (
      0 => 'modules/posvegamenu/posvegamenu.tpl',
      1 => 1509046299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161736127959f514eecb0e32-92987531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'megamenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f514eecb4145_70904931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f514eecb4145_70904931')) {function content_59f514eecb4145_70904931($_smarty_tpl) {?><div class="navleft-container hidden-md-down ">
	<div class="pt_vegamenu">
		<div class="pt_vmegamenu_title">
			<h2><i class="ion-navicon"></i><?php echo smartyTranslate(array('s'=>'All categories','mod'=>'posvegamenu'),$_smarty_tpl);?>
</h2>
		</div>
		<div id="pt_vmegamenu" class="pt_vmegamenu pt_vegamenu_cate">
			<?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

		</div>
		<div class="clearfix"></div>
	</div>	
</div><?php }} ?>
