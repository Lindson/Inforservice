<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
$smarty = new Template();
$ordensservico = new Ordensservicos();
$dados = new Dados();
$dashboard = new Dashboard();


$smarty->assign('VLR', $ordensservico->GetRegistro());
$smarty->assign('DAS', $dashboard->FaturamentoMes()); //D

$smarty->assign('OUT2018',$dados->ContaChamado2018(10));
//echo '<pre>';
//var_dump($dashboard->FaturamentoMes());
//echo '</pre>';
$smarty->display('dashboard.tpl');