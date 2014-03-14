<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:28:23
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19660674695322bda708d5d9-38244046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df92d43dae2e9ff69649a4192aa2489a36292751' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/users.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19660674695322bda708d5d9-38244046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bda70a7024_06878086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bda70a7024_06878086')) {function content_5322bda70a7024_06878086($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Users</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Total</th>
        <th align="center">Active</th>
        <th align="center">Locked</th>
        <th align="center">Admins</th>
        <th align="center">No Fees</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['total'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['active'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['locked'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['admins'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['nofees'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
