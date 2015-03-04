<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-04 12:50:04
         compiled from "Views/Shared/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40548214054f6f16ca21557-51099425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa1359217d11e066164a2ada7e8d3441c3189700' => 
    array (
      0 => 'Views/Shared/menu.tpl',
      1 => 1425469132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40548214054f6f16ca21557-51099425',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f6f16ca92581_89945642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6f16ca92581_89945642')) {function content_54f6f16ca92581_89945642($_smarty_tpl) {?>

<nav>   
	<ul id="menu">
		<li class="top"><a href="index.php">Home</a></li>
			<li class="top"><a href="pages/blog/blog.php">Blog</a></li>
		<li class="top">
			<a href="pages/products/">Producten</a>
		</li> 
		<li class="top"><a href="pages/search.php">Zoek</a></li> 
		<li class="top"><a href="pages/about/index.php">Over ons</a>
			<ul class="submenu">
				<li class="top"><a href="pages/about/contact.php"> Contact </a> </li>
			</ul>
		</li>

	</ul>
</nav><?php }} ?>
