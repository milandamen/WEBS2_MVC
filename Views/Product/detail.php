<?php ?>
<div id="content">
	<h6><?php echo $model->name ?></h3>
	<div class="details">
		<img class="prod_detailimg" src="/images/<?php echo $model-> brand . '/'. $model->image; ?>" />
		<h4>Specificaties</h4>
		<p> 
			<table>
				<tr>
					<td>Merk</td>
					<td><?php echo $model->brand; ?></td>
				</tr>
				<tr>
					<td>Soort</td>
					<td><?php echo $model->sort; ?></td>
				</tr>
				<tr>
					<td>Inhoud</td>
					<td><?php echo $model->content; ?></td>
				</tr>
				<tr>
					<td>Alcohol</td>
					<td><?php echo $model->percentage; ?></td>
				</tr>
				<tr>
					<td>Verpakking</td>
					<td><?php echo $model->wrapping; ?></td>
				</tr>
				<tr>
					<td>Brouwerij</td>
					<td><?php echo $model->brewery; ?></td>
				</tr>
				<tr>
					<td>Land</td>
					<td><?php echo $model->country; ?></td>
				</tr>
			</table>
		</p>
		
		<h4>Omschrijving</h4>
		<p><?php echo $model->description; ?></p>    
	</div>
	
	<input class="buttondetail" type="button" value="Bestellen" />
	<input class="buttondetail" type="button" value="Verlanglijstje" />
</div>