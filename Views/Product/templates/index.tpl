{include file='Views/Shared/header.tpl'}

<div class="productinfo">
		<div class="productcol"> 
			<img src="{$imageurl}" />
			<p>  {$model->getName()}
				<p class="extrainfo"> <br/>
				{$model->getBrandId()}</i> <br/>
				{$model->getBreweryId()}
			</p></p>
		
			<a href="Views/Product/detail.php?id={$productid}"> Meer info</a>
		</div>
			<div class="ordercol"> 
				<price>{$model->getPrice()}</price>
				<p>  Bestellen? </p>
			</div>
	</div>

{include file='Views/Shared/footer.tpl'}