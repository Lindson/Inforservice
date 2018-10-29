<?php
/* Smarty version 3.1.33, created on 2018-10-27 03:19:40
  from 'C:\xampp\htdocs\os\view\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd3bd2c5692b6_96358754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3818f393fd32093f84b21fb3b726303b12bd4edc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\os\\view\\dashboard.tpl',
      1 => 1540603152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd3bd2c5692b6_96358754 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-signal"></i></span>   
            <div class="info-box-content">
                <span class="info-box-text">Total de Chamados Ano</span>
                <span class="info-box-number total_purchase"><?php echo $_smarty_tpl->tpl_vars['VFAT']->value;?>
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
                <span class="info-box-number total_purchase">R$ <?php echo $_smarty_tpl->tpl_vars['VMES']->value;?>
</span>
            </div>
        </div>

    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-maroon"><i class="glyphicon glyphicon-usd"></i></span>   
            <div class="info-box-content">
                <span class="info-box-text">FATURAMENTO ANUAL</span>
                <span class="info-box-number total_purchase">R$ <?php echo $_smarty_tpl->tpl_vars['VANO']->value;?>
</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3 col-xs-6">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="glyphicon glyphicon-user"></i></span>   
            <div class="info-box-content">
                <span class="info-box-text">ATENDIMENTO RONILSON(ANO)</span>
                <span class="info-box-number total_purchase"><?php echo $_smarty_tpl->tpl_vars['RANO']->value;?>
</span>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="glyphicon glyphicon-user"></i></span>   
            <div class="info-box-content">
                <span class="info-box-text">ATENDIMENTO RONILSON(MÊS)</span>
                <span class="info-box-number total_purchase"><?php echo $_smarty_tpl->tpl_vars['RMES']->value;?>
</span>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="info-box">
            <span class="info-box-icon bg-olive"><i class="glyphicon glyphicon-user"></i></span>   
            <div class="info-box-content">
                <span class="info-box-text">ATENDIMENTO LINDSON(ANO)</span>
                <span class="info-box-number total_purchase"><?php echo $_smarty_tpl->tpl_vars['LANO']->value;?>
</span>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="info-box">
            <span class="info-box-icon bg-fuchsia-active"><i class="glyphicon glyphicon-user"></i></span>   
            <div class="info-box-content">
                <span class="info-box-text">ATENDIMENTO LINDSON(MÊS)</span>
                <span class="info-box-number total_purchase"><?php echo $_smarty_tpl->tpl_vars['LMES']->value;?>
</span>
            </div>
        </div>
    </div>
</div>
<div class="row">     
    <div class="col-md-2"></div>
    <div class="col-md-8"><canvas class="line-chart"></canvas></div>
    <div class="col-md-2"></div>
</div>   <?php }
}
