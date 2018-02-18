<?php /* Smarty version Smarty-3.1.19, created on 2017-10-29 01:38:13
         compiled from "/app/myapp/admin1750gi7yt/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213751076459f514e5d63a31-89530860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dce6cfe6de7a1966588380e1f2705a0e9fd29b3' => 
    array (
      0 => '/app/myapp/admin1750gi7yt/themes/default/template/content.tpl',
      1 => 1503921074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213751076459f514e5d63a31-89530860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f514e5d67ad8_79166620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f514e5d67ad8_79166620')) {function content_59f514e5d67ad8_79166620($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
