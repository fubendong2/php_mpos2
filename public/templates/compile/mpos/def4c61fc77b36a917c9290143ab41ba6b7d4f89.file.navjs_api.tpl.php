<?php /* Smarty version Smarty-3.1.16, created on 2014-03-14 16:27:22
         compiled from "/home/wwwroot/pool.ivc.com/public/templates/mpos/global/navjs_api.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14359680265322bd6a71f714-47767151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'def4c61fc77b36a917c9290143ab41ba6b7d4f89' => 
    array (
      0 => '/home/wwwroot/pool.ivc.com/public/templates/mpos/global/navjs_api.tpl',
      1 => 1393161770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14359680265322bd6a71f714-47767151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5322bd6a74e5b4_11557491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5322bd6a74e5b4_11557491')) {function content_5322bd6a74e5b4_11557491($_smarty_tpl) {?><script>

$(document).ready(function(){
  var g1, g2;

  // Ajax API URL
  var url = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getnavbardata";

  g1 = new JustGage({
    id: "mr",
    value: parseFloat(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
).toFixed(0),
    min: 0,
    max: Math.round(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
 * 2),
    title: "Miners",
    gaugeColor: '#6f7a8a',
    labelFontColor: '#555',
    titleFontColor: '#555',
    valueFontColor: '#555',
    label: "Active Miners",
    relativeGaugeSize: true,
    showMinMax: true,
    shadowOpacity : 0.8,
    shadowSize : 0,
    shadowVerticalOffset : 10
  });

  g2 = new JustGage({
    id: "hr",
    value: parseFloat(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
).toFixed(2),
    min: 0,
    max: Math.round(<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
 * 2),
    title: "Pool Hashrate",
    gaugeColor: '#6f7a8a',
    labelFontColor: '#555',
    titleFontColor: '#555',
    valueFontColor: '#555',
    label: "<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
",
    relativeGaugeSize: true,
    showMinMax: true,
    shadowOpacity : 0.8,
    shadowSize : 0,
    shadowVerticalOffset : 10
  });

  // Helper to refresh graphs
  function refreshInformation(data) {
    g1.refresh(parseFloat(data.getnavbardata.data.pool.workers).toFixed(0));
    g2.refresh(parseFloat(data.getnavbardata.data.pool.hashrate).toFixed(2));
  }

  // Our worker process to keep gauges and graph updated
  (function worker() {
    $.ajax({
      url: url,
      dataType: 'json',
      success: function(data) {
        refreshInformation(data);
      },
      complete: function() {
        setTimeout(worker, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval']*1000))===null||$tmp==='' ? "1000" : $tmp);?>
)
      }
  });
 })();
});

</script>
<?php }} ?>
