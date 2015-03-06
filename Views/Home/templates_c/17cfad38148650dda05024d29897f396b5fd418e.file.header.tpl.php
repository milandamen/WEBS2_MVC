<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 14:07:24
         compiled from "Views\Shared\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173554f9a5ea3bb548-59345125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17cfad38148650dda05024d29897f396b5fd418e' => 
    array (
      0 => 'Views\\Shared\\header.tpl',
      1 => 1425647241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173554f9a5ea3bb548-59345125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f9a5ea3f2515_44457315',
  'variables' => 
  array (
    'title' => 0,
    'persoon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9a5ea3f2515_44457315')) {function content_54f9a5ea3f2515_44457315($_smarty_tpl) {?>

<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<?php $_smarty_tpl->tpl_vars['persoon'] = new Smarty_variable('milan', null, 0);?>

		<?php if ($_smarty_tpl->tpl_vars['persoon']->value=='milan') {?> 
		<base href="http://localhost/webs2/mvc/" src="http://localhost/webs2/mvc/">
		<?php } else { ?>
		<base href="http://localhost/WEBS2_MVC/" src="http://localhost/WEBS2_MVC/">
		<?php }?>
		
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
			<?php echo $_smarty_tpl->getSubTemplate ('Views/Shared/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
			<div id="content">





<?php }} ?>
