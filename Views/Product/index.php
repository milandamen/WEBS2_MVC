<?php ?>
<div id="content">

<?php foreach($model as $product){   
	$productname = $product -> name;
	$price =  $product -> price;
	$brand = $product -> brand;
	$img = $product -> image;
	$brewery = $product -> brewery;
	$imageurl = "/images/".$brand."/".$img;
	$productid = $product -> id;  

	?>

	<div class="productinfo">
		<div class="productcol"> 
			<img src="<?php echo $imageurl; ?>" />
			<p  <?php echo $productname; ?>
				<p class="extrainfo"> <br/>
				<?php echo $brand; ?></i> <br/>
				<?php echo $brewery; ?>
			</p></p>
		
			<a href="pages/products/detail.php?id=<?php echo $productid; ?>"> Meer info</a>
		</div>
			<div class="ordercol"> 
				<price><?php echo $price; ?> </price>
				<p>  Bestellen? </p>
			</div>
	</div>
<?php	
}
?>