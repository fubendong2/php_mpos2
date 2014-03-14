<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:44
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/statistics/blocks/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16190761715322bd801a3798-40574369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8d62cad5a65006da09f6513f848fed29c219fb4' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/statistics/blocks/default.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16190761715322bd801a3798-40574369',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd801e1411_71929047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd801e1411_71929047')) {function content_5322bd801e1411_71929047($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_shares_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_overview_time.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/blocks_found_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
