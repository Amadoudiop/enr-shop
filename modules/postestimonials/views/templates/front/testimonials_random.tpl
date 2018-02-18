{if $testimonials}
<div class="col-xs-12 col-lg-6 col-md-12 col-sm-12">
	<div class="testimonials_container">
		<div class="title_txt">{l s='testimonials' mod='postestimonials'}</div>
		<div class="block-content pos_content">
			<div class="testimonialsSlide">
			  {foreach from=$testimonials name=myLoop item=testimonial}
				{if $testimonial.active == 1}
					{if $smarty.foreach.myLoop.index % 1 == 0 || $smarty.foreach.myLoop.first }
					<div class="item-testimonials">
					{/if}	
						<div class="item">
							<div class="des_testimonial">{$testimonial.content|escape:'html':'UTF-8'}</div>						
							<div class="content_author">
								<img src="{$mediaUrl}{$testimonial.media}" alt="Image Testimonial">
								<div class="content_test">
									<p class="des_namepost"><span>{$testimonial.name_post}</span></p>	
									<p class="des_email">{$testimonial.email}</p>								
								</div>							
							</div>
						
						</div>
					{if $smarty.foreach.myLoop.iteration % 1 == 0 || $smarty.foreach.myLoop.last  }
					</div>
					{/if}
				{/if}
			  {/foreach}
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

 {/if}