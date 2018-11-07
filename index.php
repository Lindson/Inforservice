<?php
if(!isset($_SESSION)):
    session_start();
endif;

require './lib/autoload.php';


$smarty = new Template();
$dados = new Dados();

$smarty->assign('LOG', Rotas::pag_Login());
$smarty->assign('GET_TEMA',Rotas::get_SiteTEMA());
$smarty->assign('HOME',Rotas::get_SiteHOME());
$smarty->assign('GET_VIEW',Rotas::get_SiteVIEW());
$smarty->assign('PAG_CLIENTE',Rotas::pag_Clientes());
$smarty->assign('PAG_TECNICO',Rotas::pag_Tecnicos());
$smarty->assign('PAG_SERVICO',Rotas::pag_Servicos());
$smarty->assign('PAG_ORDEMSERVICO',Rotas::pag_OrdensServicos());
$smarty->assign('PAG_DASHBOARD',Rotas::pag_Dashboard());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_RELATORIO', Rotas::pag_Relatorio());

if(Login::Logado()):
   $smarty->assign('USER', $_SESSION['USER']['nome']); 
endif;

$smarty->assign('JAN2017',$dados->ContaChamado2017(1));
$smarty->assign('FEV2017',$dados->ContaChamado2017(2));
$smarty->assign('MAR2017',$dados->ContaChamado2017(3));
$smarty->assign('ABR2017',$dados->ContaChamado2017(4));
$smarty->assign('MAI2017',$dados->ContaChamado2017(5));
$smarty->assign('JUN2017',$dados->ContaChamado2017(6));
$smarty->assign('JUL2017',$dados->ContaChamado2017(7));
$smarty->assign('AGO2017',$dados->ContaChamado2017(8));
$smarty->assign('SET2017',$dados->ContaChamado2017(9));
$smarty->assign('OUT2017',$dados->ContaChamado2017(10));
$smarty->assign('NOV2017',$dados->ContaChamado2017(11));
$smarty->assign('DEZ2017',$dados->ContaChamado2017(12));
$smarty->assign('JAN2018',$dados->ContaChamado2018(1));
$smarty->assign('FEV2018',$dados->ContaChamado2018(2));
$smarty->assign('MAR2018',$dados->ContaChamado2018(3));
$smarty->assign('ABR2018',$dados->ContaChamado2018(4));
$smarty->assign('MAI2018',$dados->ContaChamado2018(5));
$smarty->assign('JUN2018',$dados->ContaChamado2018(6));
$smarty->assign('JUL2018',$dados->ContaChamado2018(7));
$smarty->assign('AGO2018',$dados->ContaChamado2018(8));
$smarty->assign('SET2018',$dados->ContaChamado2018(9));
$smarty->assign('OUT2018',$dados->ContaChamado2018(10));
$smarty->assign('NOV2018',$dados->ContaChamado2018(11));
$smarty->assign('DEZ2018',$dados->ContaChamado2018(12));



$smarty->display('index.tpl');