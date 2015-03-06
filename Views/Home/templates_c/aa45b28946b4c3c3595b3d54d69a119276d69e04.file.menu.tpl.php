<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 14:04:42
         compiled from "Views\Shared\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1355654f9a5ea40ab84-86898031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa45b28946b4c3c3595b3d54d69a119276d69e04' => 
    array (
      0 => 'Views\\Shared\\menu.tpl',
      1 => 1425646674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1355654f9a5ea40ab84-86898031',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f9a5ea410fb3_47369838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9a5ea410fb3_47369838')) {function content_54f9a5ea410fb3_47369838($_smarty_tpl) {?>

<nav>   
	<ul id="menu">
		<li class="top"><a href="">Home</a></li>
			<li class="top"><a href="?controller=blog">Blog</a></li>
		<li class="top">
			<a href="?controller=product">Producten</a>
		</li> 
		<li class="top"><a href="?controller=zoek">Zoek</a></li> 
		<li class="top"><a href="?controller=about">Over ons</a>
			<ul class="submenu">
				<li class="top"><a href="controller=about&action=contact"> Contact </a> </li>
			</ul>
		</li>

	</ul>
</nav><?php }} ?>
