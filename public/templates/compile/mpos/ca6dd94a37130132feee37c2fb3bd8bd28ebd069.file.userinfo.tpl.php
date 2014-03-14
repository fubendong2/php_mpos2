<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:22
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/global/userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1291362185322bd6a50fd54-45404946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca6dd94a37130132feee37c2fb3bd8bd28ebd069' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/global/userinfo.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1291362185322bd6a50fd54-45404946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6a524855_68637559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6a524855_68637559')) {function content_5322bd6a524855_68637559($_smarty_tpl) {?>    <div class="user">
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)) {?>
            <p>欢迎 <?php echo htmlspecialchars($_SESSION['USERDATA']['username'], ENT_QUOTES, 'UTF-8', true);?>
</p>
<?php } else { ?>
            <p>欢迎 </p>
<?php }?>
    </div>
<?php }} ?>
