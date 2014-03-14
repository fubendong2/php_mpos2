<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:28:22
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18332224095322bda6f11f68-52581683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1da9f8f22bec51fae64aef4e7d4781c928d2b4b2' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/default.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18332224095322bda6f11f68-52581683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bda702ade9_97190179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bda702ade9_97190179')) {function content_5322bda702ade9_97190179($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/version.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/users.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations'])===null||$tmp==='' ? "0" : $tmp)==0) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/invitations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/logins.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
