<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-04 15:06:50
         compiled from "Views/Shared/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131132638054f7117a47b1d5-58902987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae86f8e122f70e25f2311eefeb246e23d3796ca' => 
    array (
      0 => 'Views/Shared/header.tpl',
      1 => 1425473967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131132638054f7117a47b1d5-58902987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
    'persoon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f7117a490c30_70695454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f7117a490c30_70695454')) {function content_54f7117a490c30_70695454($_smarty_tpl) {?>

<html>
	<head>
		<title> <?php echo $_smarty_tpl->tpl_vars['model']->value->title;?>
 </title>
		<?php $_smarty_tpl->tpl_vars['persoon'] = new Smarty_variable('corina', null, 0);?>

		<?php if ($_smarty_tpl->tpl_vars['persoon']->value=='milan') {?> 
		<base href="http://localhost/webs2/mvc/" src="http://localhost/webs2/mvc/">
		<?php } else { ?>
		<base href="http://localhost/WEBS2_MVC/" src="http://localhost/WEBS2_MVC/">
		<?php }?>
		
		<link rel="stylesheet" type="text/css" href="Views/css/mainstyles.css" />
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