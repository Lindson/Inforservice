<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InforService</title>

        <link rel="stylesheet" href="{$GET_TEMA}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{$GET_TEMA}/css/bootstrap-select.css">
        <link rel="stylesheet" href="{$GET_TEMA}/css/index.css">
        <link rel="stylesheet" href="{$GET_TEMA}/css/teste.css">
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
                        <img src="{$GET_VIEW}/imagens/inforservice.png" alt="InforService">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li><a href="{$PAG_DASHBOARD}"><i class="glyphicon glyphicon-signal"></i> Dashboard</a></li>
                        <li><a href="{$PAG_ORDEMSERVICO}"><i class="glyphicon glyphicon-time"></i> Ordens de Serviço</a></li>
                        <li><a href="{$PAG_CLIENTE}"><i class="glyphicon glyphicon-user"></i> Clientes</a></li>
                        <li><a href="{$PAG_TECNICO}"><i class="glyphicon glyphicon-wrench"></i> Técnicos</a></li>
                        <li><a href="{$PAG_SERVICO}"><i class="glyphicon glyphicon-cog"></i> Serviços</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Minha Conta
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu perfil">
                                <div class="col-sm-4 hidden-xs">
                                    <img class="img-responsive img-rounded" src="{$GET_VIEW}/imagens/{$USER}.jpg">
                                </div>
                                <ul class="list-unstyled col-sm-8">
                                    {if $LOGADO == true}
                                    <li>Olá {$USER}</li>
                                    <li><a href="">Alterar Perfil</a></li>
                                    <li><a href="{$PAG_LOGOFF}">Sair</a></li>
                                    {/if}
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        {php}
       Rotas::get_Pagina();
        {/php} 
       
    <footer class="footer">
        <div class="row">
            <div class="container">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <center>
                        <small>
                        InforService - V1.1.0 | Copyright © 2018 All rights reserved. &nbsp Hoje é {$DATA}
                    </small>
                    </center>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </footer>  

    </body>
   
  
    <script src="{$GET_TEMA}/js/Chart.min.js"></script>
    <script src="{$GET_TEMA}/js/jquery-2.2.4.min.js"></script>
    <script src="{$GET_TEMA}/js/bootstrap.js"></script>    
    <script src="{$GET_TEMA}/js/bootstrap-select.min.js"></script>
    <script src="{$GET_TEMA}/js/loader.js"></script> 
    <script src="{$GET_TEMA}/js/modal.js"></script> 
    <script src="{$GET_TEMA}/js/main.js"></script> 
    
<script>
    var ctx = document.getElementsByClassName("line-chart");
    var MyChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["JAN", "FEV", "MAR", "ABR", "MAI", "JUN", "JUL", "AGO", "SET", "OUT", "NOV", "DEZ"],
            datasets: [{
                    label: 'ATENDIMENTO CHAMADOS EM 2017',
                    data: [{$JAN2017},{$FEV2017}, {$MAR2017}, {$ABR2017}, {$MAI2017}, {$JUN2017}, {$JUL2017}, {$AGO2017},{$SET2017}, {$OUT2017}, {$NOV2017}, {$DEZ2017}],
                    borderWidth: 6,
                    borderColor: 'rgba(77, 166, 253, 0.85)',
                    backgroundColor: 'transparent',
                },
                {
                    label: 'ATENDIMENTO CHAMADOS EM 2018',
                    data: [{$JAN2018},{$FEV2018}, {$MAR2018}, {$ABR2018}, {$MAI2018}, {$JUN2018}, {$JUL2018}, {$AGO2018},{$SET2018}, {$OUT2018}, {$NOV2018}, {$DEZ2018}],
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
</script>

</html>