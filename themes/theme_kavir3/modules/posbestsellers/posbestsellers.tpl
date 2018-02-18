
<div class="pos-bestsellers-product">
	<div class="pos_title">
		<h2>{l s='bestsellers' mod='posbestsellers'}</h2>
	</div>
	<div class=" row pos_content">
	{if count($products) > 0 && $products != null}
		{$rows= $config['POS_HOME_SELLER_ROWS']}
		<div class="bestsellerSlide">
			{foreach from=$products item=product name=myLoop}
				{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
					<div class="item-product">
				{/if}
					{include file="catalog/_partials/miniatures/product.tpl" product=$product}
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
