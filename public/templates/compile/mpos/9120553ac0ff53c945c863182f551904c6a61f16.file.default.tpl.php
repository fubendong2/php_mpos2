<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:27
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/dashboard//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16768989105322bd6fb5fe66-87572962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9120553ac0ff53c945c863182f551904c6a61f16' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/dashboard//default.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16768989105322bd6fb5fe66-87572962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6fbc1e09_53158739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6fbc1e09_53158739')) {function content_5322bd6fbc1e09_53158739($_smarty_tpl) {?><?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/system_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/round_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/account_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/js_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/js_static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php }?>
<?php }?>
<?php }} ?>
