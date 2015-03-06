<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 14:04:42
         compiled from "Views\Shared\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:577854f9a5ea4467a8-02373941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c52391f68b9968d7559223faf44ab7250f3d16fa' => 
    array (
      0 => 'Views\\Shared\\sidebar.tpl',
      1 => 1425646674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '577854f9a5ea4467a8-02373941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f9a5ea44e8d6_76057760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9a5ea44e8d6_76057760')) {function content_54f9a5ea44e8d6_76057760($_smarty_tpl) {?><div id="sidebar">

<ul class="sidewidget">
	<li><a href="Views/Home/login.tpl"> Inloggen </a></li>
	<li><a href="Views/Shop/wishlist.tpl">  Verlanglijstje () </a></li>
	<li><a href="Views/Shop/index.tpl">  Winkelmandje ()  </a></li>

	<br/><br/>
<!-- Hieronder alleen zichtbaar maken als gast ingelogd is.  -->
	<li><a href="Views/User/index.php">  Mijn gegevens </a></li>
	<li><a href="Views/User/userhistory.tpl">  Mijn historie </a></li>

</ul>

</div><?php }} ?>
