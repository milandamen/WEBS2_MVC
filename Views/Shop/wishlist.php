<?php ?>

<div id="content" class="shoppinglist">

<h6> Verlanglijst</h6>
<p>
<br/>


</p>


<?php  if($result != null){ ?>

<table>
	<tbody>
		<tr>
			<th> Product </th>
			<th> Aantal </th>
			<th> Prijs p. stuk </th>
			<th> Prijs totaal </th>
			<th></th>
		</tr>

<?php foreach($result as $product){  
	$price = substr($product-> price, 1);
	$price = tofloat($price);
	$total = $price * floatval($product -> number);

	?>

	<tr>
		<td> <?php echo $product -> name;  ?></td>
		<td> <?php echo $product -> number;  ?>	</td>
		<td> <?php echo $product -> price;  ?></td>	
		<td> &euro; <?php  echo $total  ?> </td>
			<td> +  -  X</td>
	</tr>

<?php }   ?>
	</tbody>
</table>
<br/>
	<input class="buttondetail" type="button" value="Legen" />
	<input class="buttondetail" type="button" value="In winkelmandje" />
<?php  }  else {  ?>

		<p>
		Uw verlanglijstje is nog leeg!
		</p>
<?php } ?>

</div>