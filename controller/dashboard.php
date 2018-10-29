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
$val_chamado_mes = $dashboard->FaturamentoMes() * 80.00;
$val_chamado_ano = $dashboard->Chamado2018() * 80.00;




$smarty->assign('VLR', $ordensservico->GetRegistro());
$smarty->assign('DAS', $dashboard->FaturamentoMes()); 
$smarty->assign('VFAT', $dashboard->Chamado2018()); 
$smarty->assign('VMES', number_format($val_chamado_mes,2,",","."));
$smarty->assign('VANO', number_format($val_chamado_ano,2,",","."));

$smarty->assign('RANO', $dashboard->ChamadosRonilsonAno()); 
$smarty->assign('RMES', $dashboard->ChamadosRonilsonMes()); 
$smarty->assign('LANO', $dashboard->ChamadosLindsonAno()); 
$smarty->assign('LMES', $dashboard->ChamadosLindsonMes()); 



$smarty->assign('OUT2018',$dados->ContaChamado2018(10));
//echo '<pre>';
//var_dump($dashboard->ChamadosLindsonAno());
//var_dump($dashboard->ChamadosLindsonMes());
//var_dump($dashboard->ChamadosRonilsonAno());
//var_dump($dashboard->ChamadosRonilsonMes());
//echo '</pre>';
$smarty->display('dashboard.tpl');