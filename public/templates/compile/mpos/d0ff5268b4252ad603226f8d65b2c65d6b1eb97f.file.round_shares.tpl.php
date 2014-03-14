<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:27
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/dashboard/round_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7793392855322bd6fc60033-56342211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ff5268b4252ad603226f8d65b2c65d6b1eb97f' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/dashboard/round_shares.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7793392855322bd6fc60033-56342211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'ESTIMATES' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6fcc3fd2_87111296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6fcc3fd2_87111296')) {function content_5322bd6fcc3fd2_87111296($_smarty_tpl) {?>         <tr>
           <td colspan="2"><b><u>当前 Shares</u></b> <span id='tt'><img src='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/questionmark.png' height='15px' width='15px' title='Submitted shares since last found block (ie. round shares)'></span></td>
         </tr>
         <tr>
           <td><b>预计的Shares</b></td>
           <td id="b-target" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['ESTIMATES']->value['shares']);?>
 (done: <?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'];?>
%)</td>
         </tr>
         <tr>
           <td><b>矿池 Shares</b></td>
           <td id="b-pvalid" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']);?>
</td>
         </tr>
         <tr>
           <td><b>我的 Shares<b></td>
           <td id="b-yvalid" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
</td>
         </tr>
         <tr>
           <td><b>矿池无效Shares </b></td>
           <td id="b-pivalid" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']);?>
 <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?>(<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%)<?php } else { ?>(0.00%)<?php }?></td></td>
         </tr>
         <tr>
           <td><b>我的 Shares</b></td>
           <td id="b-yivalid" class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']);?>
 <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']>0) {?>(<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid'])*100),"2");?>
%)<?php } else { ?>(0.00%)<?php }?></td>
         </tr>
<?php }} ?>
