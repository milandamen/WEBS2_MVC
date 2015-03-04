{include file='Views/Shared/header.tpl'}

<div class="productinfo">
		<div class="productcol"> 
			<img src="{$imageurl}" />
			<p>  {$model->productname}
				<p class="extrainfo"> <br/>
				{$model->$brand}</i> <br/>
				{$model->$brewery}
			</p></p>
		
			<a href="Views/Product/detail.php?id={$productid}"> Meer info</a>
		</div>
			<div class="ordercol"> 
				<price>{$price}</price>
				<p>  Bestellen? </p>
			</div>
	</div>

{include file='Views/Shared/footer.tpl'}