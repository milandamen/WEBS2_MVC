
{include file='Views/Shared/header.tpl'}

{foreach $model as $item}
<div class="productinfo">
		<div class="productcol"> 
			<img src="{$item->getImg()}" />
			<p>  {$item->getName()}
				<p class="extrainfo"> <br/>
				{$item->getBrandId()}</i> <br/>
				{$item->getBreweryId()}
			</p></p>
		
			<a href="product/detail{$item->getId()}"> Meer info</a>
		</div>
			<div class="ordercol"> 
				<price>{$item->getPrice()}</price>
				<p>  Bestellen? </p>
			</div>
	</div>
	{/foreach}

{include file='Views/Shared/footer.tpl'}