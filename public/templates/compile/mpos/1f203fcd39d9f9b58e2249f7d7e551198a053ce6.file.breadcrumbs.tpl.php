<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:22
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/global/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19040847825322bd6a527ea2-91240699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f203fcd39d9f9b58e2249f7d7e551198a053ce6' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/global/breadcrumbs.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19040847825322bd6a527ea2-91240699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
    'ACTION' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6a59fb45_42058035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6a59fb45_42058035')) {function content_5322bd6a59fb45_42058035($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/wwwroot/pool.ivc.com/public/include/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) include '/home/wwwroot/pool.ivc.com/public/include/smarty/libs/plugins/modifier.capitalize.php';
?>    <div class="breadcrumbs_container">
    <?php if (count($_smarty_tpl->tpl_vars['PAGE']->value)==0) {?><?php $_smarty_tpl->tpl_vars["PAGE"] = new Smarty_variable($_REQUEST['page'], null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["PAGE"] = new Smarty_variable("home", null, 0);?><?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['ACTION']->value)==0) {?><?php $_smarty_tpl->tpl_vars["ACTION"] = new Smarty_variable($_REQUEST['action'], null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["ACTION"] = new Smarty_variable('', null, 0);?><?php }?>
      <article class="breadcrumbs"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</a> <div class="breadcrumb_divider"></div> <a class="<?php if (!(($tmp = @$_smarty_tpl->tpl_vars['ACTION']->value)===null||$tmp==='' ? '' : $tmp)) {?>current<?php }?>" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['ACTION']->value)===null||$tmp==='' ? '' : $tmp)) {?>href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo smarty_modifier_replace(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['PAGE']->value)===null||$tmp==='' ? "home" : $tmp), ENT_QUOTES, 'UTF-8', true),'"','');?>
"<?php }?>><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_capitalize((($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['PAGE']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Home" : $tmp)), ENT_QUOTES, 'UTF-8', true),'"','');?>
</a><?php if ((($tmp = @$_smarty_tpl->tpl_vars['ACTION']->value)===null||$tmp==='' ? '' : $tmp)) {?> <div class="breadcrumb_divider"></div> <a class="current"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_capitalize(htmlspecialchars($_smarty_tpl->tpl_vars['ACTION']->value, ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8', true),'"','');?>
</a><?php }?></article>
    </div>
<?php }} ?>
