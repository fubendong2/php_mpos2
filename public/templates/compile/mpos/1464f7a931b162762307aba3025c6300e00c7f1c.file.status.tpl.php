<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:28:23
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5716682785322bda70aaa50-80592702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1464f7a931b162762307aba3025c6300e00c7f1c' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/status.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5716682785322bda70aaa50-80592702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CRON_ERROR' => 0,
    'CRON_DISABLED' => 0,
    'WALLET_ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bda70e0849_73296011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bda70e0849_73296011')) {function content_5322bda70e0849_73296011($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>MPOS Status</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th colspan="2" align="center">Cronjobs</th>
        <th align="center">Wallet</th>
      </tr>
      <tr>
        <th align="center"><strong>Errors</strong></th>
        <th align="center"><strong>Disabled</strong></th>
        <th align="center"><strong>Errors</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_ERROR']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_ERROR']->value;?>
<?php }?></a>
        </td>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_DISABLED']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_DISABLED']->value;?>
<?php }?></a>
        </td>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['WALLET_ERROR']->value)===null||$tmp==='' ? "None - OK" : $tmp);?>
</a>
        </td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
