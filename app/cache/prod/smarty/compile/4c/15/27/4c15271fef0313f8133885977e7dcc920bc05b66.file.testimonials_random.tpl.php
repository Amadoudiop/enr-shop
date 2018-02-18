<?php /* Smarty version Smarty-3.1.19, created on 2017-10-29 01:38:23
         compiled from "modules/postestimonials//views/templates/front/testimonials_random.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12278890859f514ef154656-05144228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c15271fef0313f8133885977e7dcc920bc05b66' => 
    array (
      0 => 'modules/postestimonials//views/templates/front/testimonials_random.tpl',
      1 => 1509046299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12278890859f514ef154656-05144228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'testimonials' => 0,
    'testimonial' => 0,
    'mediaUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f514ef18a1a4_87053560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f514ef18a1a4_87053560')) {function content_59f514ef18a1a4_87053560($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['testimonials']->value) {?>
<div class="col-xs-12 col-lg-6 col-md-12 col-sm-12">
	<div class="testimonials_container">
		<div class="title_txt"><?php echo smartyTranslate(array('s'=>'testimonials','mod'=>'postestimonials'),$_smarty_tpl);?>
</div>
		<div class="block-content pos_content">
			<div class="testimonialsSlide">
			  <?php  $_smarty_tpl->tpl_vars['testimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['testimonial']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['testimonial']->iteration=0;
 $_smarty_tpl->tpl_vars['testimonial']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->key => $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->_loop = true;
 $_smarty_tpl->tpl_vars['testimonial']->iteration++;
 $_smarty_tpl->tpl_vars['testimonial']->index++;
 $_smarty_tpl->tpl_vars['testimonial']->first = $_smarty_tpl->tpl_vars['testimonial']->index === 0;
 $_smarty_tpl->tpl_vars['testimonial']->last = $_smarty_tpl->tpl_vars['testimonial']->iteration === $_smarty_tpl->tpl_vars['testimonial']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['testimonial']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['testimonial']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']==1) {?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
					<div class="item-testimonials">
					<?php }?>	
						<div class="item">
							<div class="des_testimonial"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['testimonial']->value['content'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</div>						
							<div class="content_author">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mediaUrl']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonial']->value['media'], ENT_QUOTES, 'UTF-8');?>
" alt="Image Testimonial">
								<div class="content_test">
									<p class="des_namepost"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonial']->value['name_post'], ENT_QUOTES, 'UTF-8');?>
</span></p>	
									<p class="des_email"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonial']->value['email'], ENT_QUOTES, 'UTF-8');?>
</p>								
								</div>							
							</div>
						
						</div>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
					</div>
					<?php }?>
				<?php }?>
			  <?php } ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var testi = $(".testimonialsSlide");
		testi.owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [991,1],
		itemsTablet: [767,1],
		itemsMobile : [479,1],
		autoPlay : true,
		stopOnHover: true,
		slideSpeed : 1000,
		addClassActive: true,
		scrollPerPage: true,
		navigation :false,
		pagination : true,
	});
</script>

 <?php }?><?php }} ?>
