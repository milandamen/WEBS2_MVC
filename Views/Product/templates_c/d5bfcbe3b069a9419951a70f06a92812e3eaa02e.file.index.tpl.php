<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-04 17:20:32
         compiled from "Views/Product/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47740084654f7117a420346-79855371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5bfcbe3b069a9419951a70f06a92812e3eaa02e' => 
    array (
      0 => 'Views/Product/templates/index.tpl',
      1 => 1425486030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47740084654f7117a420346-79855371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f7117a475da2_50023484',
  'variables' => 
  array (
    'model' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f7117a475da2_50023484')) {function content_54f7117a475da2_50023484($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('Views/Shared/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<div class="productinfo">
		<div class="productcol"> 
			<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->getImg();?>
" />
			<p>  <?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>

				<p class="extrainfo"> <br/>
				<?php echo $_smarty_tpl->tpl_vars['item']->value->getBrandId();?>
</i> <br/>
				<?php echo $_smarty_tpl->tpl_vars['item']->value->getBreweryId();?>

			</p></p>
		
			<a href="product/detail<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"> Meer info</a>
		</div>
			<div class="ordercol"> 
				<price><?php echo $_smarty_tpl->tpl_vars['item']->value->getPrice();?>
</price>
				<p>  Bestellen? </p>
			</div>
	</div>
	<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ('Views/Shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
