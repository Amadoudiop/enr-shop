<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 col-xl-8 ">
<div class="pos-special-products " 
	data-items="{$slider_options.number_item}" 
	data-speed="{$slider_options.speed_slide}"
	data-autoplay="{$slider_options.auto_play}"
	data-time="{$slider_options.auto_time}"
	data-arrow="{$slider_options.show_arrow}"
	data-pagination="{$slider_options.show_pagination}"
	data-move="{$slider_options.move}"
	data-pausehover="{$slider_options.pausehover}"
	data-md="{$slider_options.items_md}"
	data-sm="{$slider_options.items_sm}"
	data-xs="{$slider_options.items_xs}"
	data-xxs="{$slider_options.items_xxs}">
	{if $title}
	<div class="row">
		<div class="col-lg-6 col-sm-12 col-md-5 col-xs-12">
			<div class="banner-special">
				<a href="{$image_link}"><img class="img-responsive" src="{$banner_img|escape:'htmlall':'UTF-8'}" alt="" title=""/></a>
			</div>
		</div>	
		<div class="col-lg-6 col-sm-12 col-md-7 col-xs-12">
			<div class="pos_title">
				 <h2>
					{$title}
				</h2>	
			</div>
			{/if}
			{$rows= $slider_options.rows}
			<div class=" pos_content">
				<div class="special-item ">
				{foreach from=$products item=product name=myLoop}
					{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
					<div class="item-product">
					{/if}			
							<article class="js-product-miniature item_in" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
								<div class="img_block">
									{block name='product_thumbnail'}
									  <a href="{$product.url}" class="thumbnail product-thumbnail">
										<img
										  src = "{$product.cover.bySize.home_default.url}"
										  alt = "{$product.cover.legend}"
										  data-full-size-image-url = "{$product.cover.large.url}"
										>
										{hook h="rotatorImg" product=$product}		
									  </a>
									{/block}

								</div>
								<div class="product_desc">
									{block name='product_name'}
										<h4><a href="{$product.url}" title="{$product.name}" itemprop="name" class="product_name">{$product.name}</a></h4>
									{/block}
								
									{block name='product_price_and_shipping'}
										{if $product.show_price}
										  <div class="product-price-and-shipping">
											<span itemprop="price" class="price {if $product.has_discount} price_sale {/if}">{$product.price}</span>
											{if $product.has_discount}
											  {hook h='displayProductPriceBlock' product=$product type="old_price"}

											  <span class="regular-price">{$product.regular_price}</span>
											  {if $product.discount_type === 'percentage'}
												<span class="discount-percentage"><span>{$product.discount_percentage}</span></span>
											  {/if}
											{/if}

											{hook h='displayProductPriceBlock' product=$product type="before_price"}

											{hook h='displayProductPriceBlock' product=$product type='unit_price'}

											{hook h='displayProductPriceBlock' product=$product type='weight'}
										  </div>
										{/if}
									{/block}
									{block name='product_reviews'}
										<div class="hook-reviews">
										{hook h='displayProductListReviews' product=$product}
										</div>
									{/block}
									<ul class="add-to-links">
										<li class="cart">
											{include file='catalog/_partials/customize/button-cart.tpl' product=$product}
										</li>
									</ul>
								</div>
							</article>

					{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
					</div>
					{/if}
				{/foreach}
				</div>
			</div>
		</div>
	</div>	
</div>
</div>
