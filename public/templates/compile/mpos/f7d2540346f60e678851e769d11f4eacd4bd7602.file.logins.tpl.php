<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:28:23
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/logins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10692054375322bda70fbba0-77509701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7d2540346f60e678851e769d11f4eacd4bd7602' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/logins.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10692054375322bda70fbba0-77509701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_LOGINS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bda7115360_90465270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bda7115360_90465270')) {function content_5322bda7115360_90465270($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Logins</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">24 hours</th>
        <th align="center">7 days</th>
        <th align="center">1 month</th>
        <th align="center">6 months</th>
        <th align="center">1 year</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['24hours'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['7days'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['6month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1year'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
