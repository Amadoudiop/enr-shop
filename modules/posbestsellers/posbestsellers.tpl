
<div class="pos-bestsellers-product">
	<div class="pos_title">
		<h2>{l s='bestsellers' mod='posbestsellers'}</h2>
	</div>
	<div class="pos_content">
	{if count($products) > 0 && $products != null}
		{$rows= $config['POS_HOME_SELLER_ROWS']}
		<div class="bestsellerSlide">
			{foreach from=$products item=product name=myLoop}
				{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
					<div class="item-product">
				{/if}
					<article class="js-product-miniature item_in" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
							{block name='product_thumbnail'}
							  <a href="{$product.url}" class="thumbnail product-thumbnail">
								<img
								  src = "{$product.cover.bySize.small_default.url}"
								  alt = "{$product.cover.legend}"
								  data-full-size-image-url = "{$product.cover.large.url}"
								>
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
								<span itemprop="price" class="price">{$product.price}</span>
								{if $product.has_discount}
								  {hook h='displayProductPriceBlock' product=$product type="old_price"}

								  <span class="regular-price">{$product.regular_price}</span>
								  {if $product.discount_type === 'percentage'}
									<span class="discount-percentage">{$product.discount_percentage}</span>
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
						</div>
					</article>
				{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
					</div>
				{/if}
			{/foreach}
		</div>
	{else}
		<p>{l s='No best sellers at this time' mod='posbestsellers'}</p>	
	{/if}	
	</div>
</div>
