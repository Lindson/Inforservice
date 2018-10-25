<?php
/* Smarty version 3.1.33, created on 2018-10-25 04:01:44
  from 'C:\xampp\htdocs\os\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd12408c66389_72831346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0d9ba7239d37bc8e280f28f2f825ecab211d024' => 
    array (
      0 => 'C:\\xampp\\htdocs\\os\\view\\index.tpl',
      1 => 1540432884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd12408c66389_72831346 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InforService</title>

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap-select.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/index.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/teste.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand logotipo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_VIEW']->value;?>
/imagens/inforservice.png" alt="InforService">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DASHBOARD']->value;?>
">Dashboard</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ORDEMSERVICO']->value;?>
">Ordens de Serviço</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE']->value;?>
">Clientes</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_TECNICO']->value;?>
">Técnicos</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SERVICO']->value;?>
">Serviços</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Minha Conta
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu perfil">
                                <div class="col-sm-4 hidden-xs">
                                    <img class="img-responsive img-rounded" src="">
                                </div>
                                <ul class="list-unstyled col-sm-8">
                                    <li>Lindson Amaro</li>
                                    <li><a href="">Alterar Perfil</a></li>
                                    <li><a href="">Sair</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <?php 
       Rotas::get_Pagina();
        ?> 
       
    <footer class="footer">
        <div class="row">
            <div class="container">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <small>
                        InforService - V1.1.0 | Copyright © 2018 All rights reserved.
                    </small>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </footer>  

    </body>
   
  
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/Chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap-select.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap-select.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/modal.js"><?php echo '</script'; ?>
> 

        <?php echo '<script'; ?>
>
            var ctx = document.getElementsByClassName("line-chart");
            var MyChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["JAN", "FEV", "MAR", "ABR", "MAI", "JUN", "JUL", "AGO", "SET", "OUT", "NOV", "DEZ"],
                    datasets: [{
                            label: 'ATENDIMENTO CHAMADOS EM 2017',
                            data: [<?php echo $_smarty_tpl->tpl_vars['JAN2017']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['FEV2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['MAR2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ABR2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['MAI2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['JUN2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['JUL2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['AGO2017']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['SET2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['OUT2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['NOV2017']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['DEZ2017']->value;?>
],
                            borderWidth: 6,
                            borderColor: 'rgba(77, 166, 253, 0.85)',
                            backgroundColor: 'transparent',
                        },
                        {
                            label: 'ATENDIMENTO CHAMADOS EM 2018',
                            data: [<?php echo $_smarty_tpl->tpl_vars['JAN2018']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['FEV2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['MAR2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ABR2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['MAI2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['JUN2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['JUL2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['AGO2018']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['SET2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['OUT2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['NOV2018']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['DEZ2018']->value;?>
],
                            borderWidth: 6,
                            borderColor: 'rgba(6, 204, 6, 0.85)',
                            backgroundColor: 'transparent',
                        },
                    ]
                },
                options: {
                    title: {
                        display: true,
                        fontSize: 20,
                        text: "Relatório de atendimento Anual"
                    }
                }
            });
        <?php echo '</script'; ?>
>
</html><?php }
}
