{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
  <div class="contact-link">
    {if $contact_infos.phone}
	<div class="info_box phone">
	  {* [1][/1] is for a HTML tag. *}
	  {l
		s='Call us : [1]%phone%[/1]'
		sprintf=[
		  '[1]' => '<span>',
		  '[/1]' => '</span>',
		  '%phone%' => $contact_infos.phone
		]
		d='Shop.Theme'
	 }
	 </div>
	 {/if}
	 {if $contact_infos.fax}
		<div class="info_box fax">
			{l
			s='fax : [1]%fax%[/1]'
			sprintf=[
			'[1]' => '<span>',
			'[/1]' => '</span>',
			'%fax%' => $contact_infos.fax
			]
			d='Shop.Theme'
			}
		</div>
	{/if}
	{if $contact_infos.email}
		<div class="info_box email">
			{l s='email :' d='Shop.Theme'}  <a href="mailto:{$contact_infos.email}">{$contact_infos.email}</a>
		</div>
    {else}
      <a href="{$urls.pages.contact}">{l s='Contact us' d='Shop.Theme'}</a>
    {/if}
  </div>

