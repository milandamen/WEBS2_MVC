{* HEADER *}

<html>
	<head>
		<title> </title>
		{$persoon = 'corina'}

		{if $persoon == 'milan'} 
		<base href="http://localhost/webs2/mvc/" src="http://localhost/webs2/mvc/">
		{else}
		<base href="http://localhost/WEBS2_MVC/" src="http://localhost/WEBS2_MVC/">
		{/if}
		
		<link rel="stylesheet" type="text/css" href="Views/css/style.css" />
		<link rel="stylesheet" type="text/css" href="Views/css/product.css" />
		<link rel="stylesheet" type="text/css" href="Views/css/shoppinglist.css" />
	</head>
	<body>
		<div id="maincontent">
			<div id="header">
			<div id="headerbar">
				<img id="logo" src="Views/Shared/img/logo.png"/>
				<img id="headerimg" src="Views/Shared/img/bier.jpg"/>

			</div>
			{include file='Views/Shared/menu.tpl'}
			</div>
			<div id="content">





