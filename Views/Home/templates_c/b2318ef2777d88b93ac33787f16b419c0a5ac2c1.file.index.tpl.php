<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-04 13:53:02
         compiled from "Views/Home/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204260238454f6f0d7778c94-28311163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2318ef2777d88b93ac33787f16b419c0a5ac2c1' => 
    array (
      0 => 'Views/Home/templates/index.tpl',
      1 => 1425473581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204260238454f6f0d7778c94-28311163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f6f0d77bccf8_53082444',
  'variables' => 
  array (
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6f0d77bccf8_53082444')) {function content_54f6f0d77bccf8_53082444($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('Views/Shared/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


Hello <?php echo $_smarty_tpl->tpl_vars['model']->value->title;?>
, welcome to Smarty!
<b>asdasd</b>



<?php echo $_smarty_tpl->getSubTemplate ('Views/Shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
