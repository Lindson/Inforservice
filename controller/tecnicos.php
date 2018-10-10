<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
$smarty = new Template();
$tecnicos = new Tecnicos();
$tecnicos->GetTecnicos();
$smarty->assign('TEC',$tecnicos->GetItens());

$smarty->display('tecnicos.tpl');
