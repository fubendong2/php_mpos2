<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:25
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/statistics/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5392187245322bd6d97d236-09000208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d9afbbdf4aac21a2c2e970fbebbd09f808bb14' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/statistics/js.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5392187245322bd6d97d236-09000208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6d994925_19798025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6d994925_19798025')) {function content_5322bd6d994925_19798025($_smarty_tpl) {?><script>

$(document).ready(function(){

  // Ajax API URL
  var url = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getnavbardata";

  function refreshStaticData(data) {
     $('#b-workers').html((parseFloat(data.getnavbardata.data.pool.workers).toFixed(0)));
     $('#b-hashrate').html((parseFloat(data.getnavbardata.data.pool.hashrate).toFixed(3)));
     $('#b-target').html(data.getnavbardata.data.pool.estimated + " (done: " + data.getnavbardata.data.pool.progress + "%)");
     $('#b-diff').html(data.getnavbardata.data.network.difficulty);
  }

  // Our worker process to keep gauges and graph updated
  (function worker() {
    $.ajax({
      url: url,
      dataType: 'json',
      success: function(data) {
        refreshStaticData(data);
      },
      complete: function() {
        setTimeout(worker, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval']*1000))===null||$tmp==='' ? "10000" : $tmp);?>
)
     }
   });
 })();
});

</script>
<?php }} ?>
