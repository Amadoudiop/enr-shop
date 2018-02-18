<div class="ft_newsletter col-sm-12 col-md-6 col-lg-6 col-xs-12">
	<div class="content_newsletter">
		<div class="title_newsletter"><h2>{l s='Sign up to newsletter'  d='Shop.Theme'}</h2></div>
		 {if $conditions}
		  <p class="desc">{$conditions}</p>
		{/if}
		<form action="{$urls.pages.index}#footer" method="post">
			<div class="input-wrapper">
			  <input
				name="email"
				class="input_txt"
				type="text"
				value="{$value}"
				placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
			  >
			</div>
			<input
			  class="btn btn-primary"
			  name="submitNewsletter"
			  type="submit"
			  value="{l s='Submit' d='Shop.Theme.Actions'}"
			>
			<input type="hidden" name="action" value="0">
		</form>
	</div>
</div>