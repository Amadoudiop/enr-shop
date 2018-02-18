<!-- Block search module TOP -->
<div class="block-search col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div id="search_widget" class="search_top" data-search-controller-url="{$search_controller_url}">
		<form method="get" action="{$search_controller_url}">
			<input type="hidden" name="controller" value="search">
			<input class="text_input" type="text" name="s" value="{$search_string}" placeholder="{l s='Search our catalog' d='Shop.Theme.Catalog'}">
			<button type="submit">
			</button>
		</form>
	</div>
</div>

<!-- /Block search module TOP -->
