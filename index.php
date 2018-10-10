<?php
if(!isset($_SESSION)):
    session_start();
endif;
require './lib/autoload.php';

$jan = 1;
$fev = 2;
$mar = 3;
$abr = 4;
$mai = 5;
$jun = 6;
$jul = 7;
$ago = 8;
$set = 9;
$out = 10;
$nov = 11;
$dez = 12;

$smarty = new Template();
$dados = new Dados();
$smarty->assign('GET_TEMA',Rotas::get_SiteTEMA());
$smarty->assign('GET_VIEW',Rotas::get_SiteVIEW());
$smarty->assign('PAG_CLIENTE',Rotas::pag_Clientes());
$smarty->assign('PAG_TECNICO',Rotas::pag_Tecnicos());
$smarty->assign('PAG_SERVICO',Rotas::pag_Servicos());
$smarty->assign('PAG_ORDEMSERVICO',Rotas::pag_OrdensServicos());

$smarty->assign('JAN2017',$dados->ContaChamado2017($jan));
$smarty->assign('FEV2017',$dados->ContaChamado2017($fev));
$smarty->assign('MAR2017',$dados->ContaChamado2017($mar));
$smarty->assign('ABR2017',$dados->ContaChamado2017($abr));
$smarty->assign('MAI2017',$dados->ContaChamado2017($mai));
$smarty->assign('JUN2017',$dados->ContaChamado2017($jun));
$smarty->assign('JUL2017',$dados->ContaChamado2017($jul));
$smarty->assign('AGO2017',$dados->ContaChamado2017($ago));
$smarty->assign('SET2017',$dados->ContaChamado2017($set));
$smarty->assign('OUT2017',$dados->ContaChamado2017($out));
$smarty->assign('NOV2017',$dados->ContaChamado2017($nov));
$smarty->assign('DEZ2017',$dados->ContaChamado2017($dez));
$smarty->assign('JAN2018',$dados->ContaChamado2018($jan));
$smarty->assign('FEV2018',$dados->ContaChamado2018($fev));
$smarty->assign('MAR2018',$dados->ContaChamado2018($mar));
$smarty->assign('ABR2018',$dados->ContaChamado2018($abr));
$smarty->assign('MAI2018',$dados->ContaChamado2018($mai));
$smarty->assign('JUN2018',$dados->ContaChamado2018($jun));
$smarty->assign('JUL2018',$dados->ContaChamado2018($jul));
$smarty->assign('AGO2018',$dados->ContaChamado2018($ago));
$smarty->assign('SET2018',$dados->ContaChamado2018($set));
$smarty->assign('OUT2018',$dados->ContaChamado2018($out));
$smarty->assign('NOV2018',$dados->ContaChamado2018($nov));
$smarty->assign('DEZ2018',$dados->ContaChamado2018($dez));



$smarty->display('index.tpl');