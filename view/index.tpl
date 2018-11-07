<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InforService</title>
        <link rel="stylesheet" href="{$GET_TEMA}/css/teste.css">  
        <link rel="stylesheet" href="{$GET_TEMA}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{$GET_TEMA}/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="{$GET_TEMA}/css/index.css">
        <link rel="icon" href="{$GET_VIEW}/imagens/favicon.ico">
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
                        <img class="navbar-brand logotipo" src="{$GET_VIEW}/imagens/inforservice.png" alt="InforService">
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    {if $LOGADO == true}

                        <ul class="nav navbar-nav">
                            <li><a href="{$HOME}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                            <li><a href="{$PAG_DASHBOARD}"><i class="glyphicon glyphicon-signal"></i> Dashboard</a></li>
                            <li><a href="{$PAG_ORDEMSERVICO}"><i class="glyphicon glyphicon-time"></i> Ordens de Serviço</a></li>
                            <li><a href="{$PAG_CLIENTE}"><i class="glyphicon glyphicon-user"></i> Clientes</a></li>
                            <li><a href="{$PAG_TECNICO}"><i class="glyphicon glyphicon-wrench"></i> Técnicos</a></li>
                            <li><a href="{$PAG_SERVICO}"><i class="glyphicon glyphicon-cog"></i> Serviços</a></li>
                            <li><a href="{$PAG_RELATORIO}"><i class="glyphicon glyphicon-list-alt"></i> Relatórios</a></li>
                        </ul>
                    {else}
                        <ul class="nav navbar-nav">
                            <li><a href="{$HOME}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-time"></i> Sobre</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Depoimentos</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-camera"></i> Fotos</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-phone-alt"></i> Contato</a></li>


                        </ul> 
                    {/if}
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Minha Conta
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu perfil">
                                {if $LOGADO == true}
                                <div class="col-sm-4 hidden-xs">
                                    <img class="img-responsive img-rounded" src="{$GET_VIEW}/imagens/{$USER}.jpg">
                                </div>
                                <ul class="list-unstyled col-sm-8">
                                    
                                        <li>Olá {$USER}</li>
                                        <li><a href="">Alterar Perfil</a></li>
                                        <li><a href="{$PAG_LOGOFF}">Sair</a></li>
                                        </ul>
                                        {else}
                                        <ul class="list-unstyled col-sm-8 text-center">
                                        <li><a class="btn btn-facebook" href="{$LOG}">Acessar</a></li>
                                        </ul>
                                        {/if}
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 

        {php}
       Rotas::get_Pagina();
        {/php} 
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="jumbotron" style="background-color: #222">
            <div class="container">
                <div class="container marketing ">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 style="color:#CCC">InforService</h2>
                            <a style="color:#CCC" href="#">Home</a><br><br>
                            <a style="color:#CCC" href="#">Sobre</a><br><br>
                            <a style="color:#CCC" href="#">Depoimentos</a><br><br>
                            <a style="color:#CCC" href="#">Fotos</a><br><br>
                            <a style="color:#CCC" href="#">Contato</a><br><br>
                            <a style="color:#CCC" href="{$LOG}">Área do cliente</a>
                        </div>
                        <div class="col-lg-4" style="color:#CCC">
                            <h2 style="color:#CCC">Contato</h2>
                            <p class="lead">
                            <address>
                                <strong>InforService</strong><br>
                                Av. Castelo de Castro, 142 - Conjunto São Cristovão<br>
                                CEP 60866-400 - Fortaleza / CE<br>
                                <span class="glyphicon glyphicon-phone-alt"> Celular/WhatsApp</span> (85) 9 8941-4495
                            </address>
                            <address>
                                <strong>Lindson Amaro (CEO)</strong><br>
                                <a href="mailto:lindson@inforservice-ce.com.br">lindson@inforservice-ce.com.br</a>
                            </address>
                            <address>
                                <strong>HelpDesk (Suporte)</strong><br>
                                <a href="mailto:helpdesk@inforservice-ce.com.br">helpdesk@inforservice-ce.com.br</a>
                            </address>
                            <address>
                                <strong>RH (Setor Pessoal)</strong><br>
                                <a href="mailto:rh@inforservice-ce.com.br">rh@inforservice-ce.com.br</a>
                            </address>
                            </p>
                        </div>
                        <div class="col-lg-3" style="color:#CCC">
                            <h2 style="color:#CCC">Rede Sociais</h2>                           
                            <a style="text-decoration: none; display: inline;" class="social signature_twitter-target sig-hide" href="https://htmlsig.com/t/000001CR7F6C">
                                <img style="margin-bottom:2px; border:none; display:inline;" data-filename="twitter.png" src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png" alt="Twitter" width="35" height="35"></a>
                                <span style="white-space: nowrap; display: inline;" class="signature_twitter-sep social-sep"> <b> &nbsp;Twitter</b>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>
                            <a style="text-decoration: none; display: inline;" class="social signature_facebook-target sig-hide" href="https://htmlsig.com/t/000001CHVF84"><br><br>
                                <img style="margin-bottom:2px; border:none; display:inline;" data-filename="facebook.png" src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png" alt="Facebook" width="35" height="35"></a>
                            <span style="white-space: nowrap; display: inline;" class="signature_facebook-sep social-sep"><b> &nbsp;Facebook</b>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>
                            <a style="text-decoration: none; display: inline;" class="social signature_linkedin-target sig-hide" href="https://htmlsig.com/t/000001CHE1VM"><br><br>
                                <img style="margin-bottom:2px; border:none; display:inline;" data-filename="linkedin.png" src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png" alt="LinkedIn" width="35" height="35"></a>
                            <span style="white-space: nowrap; display: inline;" class="signature_linkedin-sep social-sep"><b> &nbsp;Linkedin</b>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>
                            <a style="text-decoration: none; display: inline;" class="social signature_instagram-target sig-hide" href="https://htmlsig.com/t/000001CH0NRT"><br><br>
                                <img style="margin-bottom:2px; border:none; display:inline;" data-filename="instagram.png" src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png" alt="Instagram" width="35" height="35"></a>
                            <span style="white-space: nowrap; display: inline;" class="signature_instagram-sep social-sep"><b> &nbsp;Instagram</b>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>
                            <a style="text-decoration: none; display: inline;" class="social signature_skype-target sig-hide" href="https://htmlsig.com/t/000001CMCJZG"><br><br>
                                <img style="margin-bottom:2px; border:none; display:inline;" data-filename="skype.png" src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png" alt="Skype" width="35" height="35"></a>
                            <span style="white-space: nowrap; display: inline;" class="signature_skype-sep social-sep"><b> &nbsp;Skype</b>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>
                            <a style="text-decoration: none; display: inline;" class="social signature_youtube-target sig-hide" href="https://htmlsig.com/t/000001CK0TH0"><br><br>
                                <img style="margin-bottom:2px; border:none; display:inline;" data-filename="youtube.png" src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png" alt="Youtube" width="35" height="35"></a>
                            <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep social-sep"><b> &nbsp;Youtube</b>
                                <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
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
    </body>
</html>