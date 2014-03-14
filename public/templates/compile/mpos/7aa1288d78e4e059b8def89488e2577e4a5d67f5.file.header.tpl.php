<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:22
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/global/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7861934665322bd6a4dcde1-82514417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa1288d78e4e059b8def89488e2577e4a5d67f5' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/global/header.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7861934665322bd6a4dcde1-82514417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6a50b6a6_02050146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6a50b6a6_02050146')) {function content_5322bd6a50b6a6_02050146($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/wwwroot/pool.ivc.com/public/include/smarty/libs/plugins/modifier.capitalize.php';
?>    <hgroup>
      <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><h1 class="site_title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</h1></a>
      <h2 class="section_title"><?php if ((($tmp = @htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp)) {?><?php echo smarty_modifier_capitalize(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true));?>
<?php } else { ?><?php echo smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "home" : $tmp));?>
<?php }?></h2>
    </hgroup><?php }} ?>
