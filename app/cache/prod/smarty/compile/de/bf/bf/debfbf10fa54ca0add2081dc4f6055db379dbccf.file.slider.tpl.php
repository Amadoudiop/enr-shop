<?php /* Smarty version Smarty-3.1.19, created on 2017-10-29 01:38:22
         compiled from "modules/posslideshows/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202900388359f514eee67d48-17408446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debfbf10fa54ca0add2081dc4f6055db379dbccf' => 
    array (
      0 => 'modules/posslideshows/views/templates/hook/slider.tpl',
      1 => 1509046299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202900388359f514eee67d48-17408446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f514eeeaa641_64398900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f514eeeaa641_64398900')) {function content_59f514eeeaa641_64398900($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
<div class="slideshow_container">
	<div class="pos-slideshow">
		<div class="flexslider ma-nivoslider">
			<div class="pos-loading"></div>
			<div id="pos-slideshow-home" class="slides">
				
				<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['homeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" ><img style="display:none" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
"  data-thumb="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
"  alt="" title="#htmlcaption<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8');?>
"  /> </a>
			   <?php } ?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['show_caption']!=0) {?>
				<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['homeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
					<div id="htmlcaption<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8');?>
" class="pos-slideshow-caption nivo-html-caption nivo-caption">					
							<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:8;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
ms ease-in-out;
								-moz-animation: myfirst <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
ms ease-in-out;
								-ms-animation: myfirst <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
ms ease-in-out;
								animation: myfirst <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
ms ease-in-out;
							
							">
							</div>
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
							<div class="banner7-des"><div class="container-fluid"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div> </div>
							<?php }?>
					</div>
				 <?php } ?>
			 <?php }?>
		</div>
	</div>
</div>

<?php }?>
 <script type="text/javascript">
 $(document).ready(function() {
	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	//Variables on page load 
	var $myCarousel = $('.ma-nivoslider'),
		$firstAnimatingElems = $myCarousel.find('.nivo-caption').find("[data-animation ^= 'animated']");
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);

});
</script><?php }} ?>
