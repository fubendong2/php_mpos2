<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:27
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/dashboard/system_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11557453445322bd6fc0d172-67962679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92c0abd8e907f6123048c1c7c957f13be48b2adb' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/dashboard/system_stats.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11557453445322bd6fc0d172-67962679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6fc5b5d1_47375570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6fc5b5d1_47375570')) {function content_5322bd6fc5b5d1_47375570($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/wwwroot/pool.ivc.com/public/include/smarty/libs/plugins/modifier.capitalize.php';
?> <article class="module width_quarter">
   <header><h3><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']);?>
 Stats</h3></header>
   <div class="module_content">
     <table width="100%">
       <tbody>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
         <tr>
           <td><b>PPLNS Target</b></td>
           <td id="b-pplns" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['pplns']['target'];?>
</td>
         </tr>
<?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pps') {?>
        <tr>
          <td><b>Unpaid Shares</b></td>
          <td id="b-ppsunpaid"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['pps']['unpaidshares'];?>
</td>
        </tr>
        <tr>
          <td><b>Baseline PPS Rate</b></td>
          <td><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['ppsvalue'],"12");?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
</td>
        </tr>
        <tr>
          <td><b>Pools PPS Rate</b></td>
          <td><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['poolppsvalue'],"12");?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
</td>
        </tr>
        <tr>
          <td><b>PPS Difficulty</b></td>
          <td id="b-ppsdiff"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['sharedifficulty'],"2");?>
</td>
        </tr>
<?php }?>
         <tr><td colspan="2">&nbsp;</td></tr>
         <?php echo $_smarty_tpl->getSubTemplate ("dashboard/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

         <tr><td colspan="2">&nbsp;</td></tr>
         <?php echo $_smarty_tpl->getSubTemplate ("dashboard/payout_estimates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

         <tr><td colspan="2">&nbsp;</td></tr>
         <?php echo $_smarty_tpl->getSubTemplate ("dashboard/network_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

         <tr><td colspan="2">&nbsp;</td></tr>
       </tbody>
      </table>
    </div>
 </article>

<?php }} ?>
