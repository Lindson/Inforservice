<?php
/* Smarty version 3.1.33, created on 2018-10-26 01:54:58
  from 'C:\xampp\htdocs\os\view\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd257d2648f41_93338012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3818f393fd32093f84b21fb3b726303b12bd4edc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\os\\view\\dashboard.tpl',
      1 => 1540511685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd257d2648f41_93338012 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-signal"></i></span>   
        <div class="info-box-content">
            <span class="info-box-text">Total de Chamados Ano</span>
            <span class="info-box-number total_purchase"><?php echo $_smarty_tpl->tpl_vars['VLR']->value['Auto_increment'];?>
</span>
        </div>
    </div>

</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-stats"></i></span>   
        <div class="info-box-content">
            <span class="info-box-text">Total de Chamados Mês</span>
            <span class="info-box-number total_purchase"><?php echo $_smarty_tpl->tpl_vars['OUT2018']->value;?>
</span>
        </div>
    </div>

</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-blue"><i class="glyphicon glyphicon-equalizer"></i></span>   
        <div class="info-box-content">
            <span class="info-box-text">FATURAMENTO MESAL</span>
            <span class="info-box-number total_purchase">R$ 1.220,00</span>
        </div>
    </div>

</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-maroon"><i class="glyphicon glyphicon-usd"></i></span>   
        <div class="info-box-content">
            <span class="info-box-text">FATURAMENTO ANUAL</span>
            <span class="info-box-number total_purchase">R$ 18.640,00</span>
        </div>
    </div>

</div>
<div class="col-md-2"></div>
<div class="col-md-8"><canvas class="line-chart"></canvas></div>
<div class="col-md-2"></div>

<?php }
}
