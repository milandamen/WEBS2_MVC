{include file='Views/Shared/header.tpl'}

	<h6> {* $model->name *}</h3>
	<div class="details">
		<img class="prod_detailimg" src="/images/{$model->getBrandId()}/{$model->image}" />
		<h4>Specificaties</h4>
		<p> 
			<table>
				<tr>
					<td>Merk</td>
					<td>{$model->getBrandId()}</td>
				</tr>
				<tr>
					<td>Soort</td>
					<td>{$model->getSortId()}</td>
				</tr>
				<tr>
					<td>Inhoud</td>
					<td>{$model->getContent()}</td>
				</tr>
				<tr>
					<td>Alcohol</td>
					<td>{$model->getPercentage()}</td>
				</tr>
				<tr>
					<td>Verpakking</td>
					<td>{$model->getWrappingId()}</td>
				</tr>
				<tr>
					<td>Brouwerij</td>
					<td>{$model->getBreweryId()}</td>
				</tr>
				<tr>
					<td>Land</td>
					<td>{*$model->getCountryId()*}</td>
				</tr>
			</table>
		</p>
		
		<h4>Omschrijving</h4>
		<p>{$model->getDescription()}</p>    
	</div>
	
	<input class="buttondetail" type="button" value="Bestellen" />
	<input class="buttondetail" type="button" value="Verlanglijstje" />

{include file='Views/Shared/footer.tpl'}