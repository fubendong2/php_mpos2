<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:28:23
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/invitations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18066086125322bda70e4fd9-44464894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbbaed1388b2ffae7d810bd76b7bb0745a8956de' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/admin/dashboard/invitations.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18066086125322bda70e4fd9-44464894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INVITATION_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bda70f82a7_48783559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bda70f82a7_48783559')) {function content_5322bda70f82a7_48783559($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Invitations</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Total</th>
        <th align="center">Activated</th>
        <th align="center">Outstanding</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['total'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['activated'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['outstanding'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
