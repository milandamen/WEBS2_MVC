<div id="sidebar">

<ul class="sidewidget">
	<li><a href="Views/Home/login.tpl"> Inloggen </a></li>
	<li><a href="Views/Shop/wishlist.tpl">  Verlanglijstje ({*$model->wishlist *}) </a></li>
	<li><a href="Views/Shop/index.tpl">  Winkelmandje ({* $model->shoplist *})  </a></li>

	<br/><br/>
<!-- Hieronder alleen zichtbaar maken als gast ingelogd is.  -->
	<li><a href="Views/User/index.php">  Mijn gegevens </a></li>
	<li><a href="Views/User/userhistory.tpl">  Mijn historie </a></li>

</ul>

</div>