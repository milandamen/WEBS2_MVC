<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-04 14:04:44
         compiled from "Views/Shared/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211679429754f702a176f6d2-28442780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dee2be0ee950ac6e1d8dadb3cf45be0d7776319' => 
    array (
      0 => 'Views/Shared/sidebar.tpl',
      1 => 1425474280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211679429754f702a176f6d2-28442780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f702a17a9ff0_61702063',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f702a17a9ff0_61702063')) {function content_54f702a17a9ff0_61702063($_smarty_tpl) {?><div id="sidebar">

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
