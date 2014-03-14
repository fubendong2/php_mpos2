<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:27
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/dashboard/network_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14620041225322bd6fd300d2-13319667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e91fa92d77edbe535812cc5e3fa72239dd272b01' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/dashboard/network_info.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14620041225322bd6fd300d2-13319667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NETWORK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6fd52745_25860949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6fd52745_25860949')) {function content_5322bd6fd52745_25860949($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include '/home/wwwroot/pool.ivc.com/public/include/smarty/libs/plugins/modifier.seconds_to_words.php';
?>         <tr>
           <td colspan="2"><b><u>全网信息</u></b></td>
         </tr>
         <tr>
           <td><b>难度</b></td>
           <td id="b-diff" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'],"8");?>
</td>
         </tr>
         <tr>
           <td><b>预计下次难度</b></td>
           <td id="b-nextdiff" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'],"8");?>
 (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</td>
         </tr>
         <tr>
           <td><b>平均区块产生时间</b></td>
           <td id="b-esttimeperblock" class="right"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</td>
         </tr>
         <tr>
           <td><b>当前区块</b></td>
           <td id="b-nblock" class="right"><?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['block'];?>
</td>
         </tr>
<?php }} ?>
