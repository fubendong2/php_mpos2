<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:25
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/statistics/pool/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14999020145322bd6d630611-98171401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d890ba27ec9e861b4d831ae0ab3049135e5a1f' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/statistics/pool/default.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14999020145322bd6d630611-98171401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6d689999_70475549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6d689999_70475549')) {function content_5322bd6d689999_70475549($_smarty_tpl) {?><!-- Wrapper -->
<div style="overflow: auto">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_hashrate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/general_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/small_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar_api']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
