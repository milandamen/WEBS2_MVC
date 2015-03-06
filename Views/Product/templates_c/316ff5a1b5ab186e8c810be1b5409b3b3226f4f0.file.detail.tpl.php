<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-05 12:17:45
         compiled from "Views/Product/templates/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66109207954f82b4fb30ab8-78016024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '316ff5a1b5ab186e8c810be1b5409b3b3226f4f0' => 
    array (
      0 => 'Views/Product/templates/detail.tpl',
      1 => 1425554083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66109207954f82b4fb30ab8-78016024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f82b4fe00a64_34998754',
  'variables' => 
  array (
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f82b4fe00a64_34998754')) {function content_54f82b4fe00a64_34998754($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Views/Shared/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<h6> </h3>
	<div class="details">
		<img class="prod_detailimg" src="/images/<?php echo $_smarty_tpl->tpl_vars['model']->value->getBrandId();?>
/<?php echo $_smarty_tpl->tpl_vars['model']->value->image;?>
" />
		<h4>Specificaties</h4>
		<p> 
			<table>
				<tr>
					<td>Merk</td>
					<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getBrandId();?>
</td>
				</tr>
				<tr>
					<td>Soort</td>
					<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getSortId();?>
</td>
				</tr>
				<tr>
					<td>Inhoud</td>
					<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getContent();?>
</td>
				</tr>
				<tr>
					<td>Alcohol</td>
					<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getPercentage();?>
</td>
				</tr>
				<tr>
					<td>Verpakking</td>
					<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getWrappingId();?>
</td>
				</tr>
				<tr>
					<td>Brouwerij</td>
					<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getBreweryId();?>
</td>
				</tr>
				<tr>
					<td>Land</td>
					<td></td>
				</tr>
			</table>
		</p>
		
		<h4>Omschrijving</h4>
		<p><?php echo $_smarty_tpl->tpl_vars['model']->value->getDescription();?>
</p>    
	</div>
	
	<input class="buttondetail" type="button" value="Bestellen" />
	<input class="buttondetail" type="button" value="Verlanglijstje" />

<?php echo $_smarty_tpl->getSubTemplate ('Views/Shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
