<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
if (!Login::Logado()):

    echo '<div class="alert alert-danger"> Acesso negado, faça o login! <a class="btn btn-danger" href="' . Rotas::pag_Login() . '"> Login </a></div>';
    Rotas::Redirecionar(0.5, Rotas::pag_Login());

else:
    $smarty = new Template();
    $ordensservico = new Ordensservicos();
    $dados = new Dados();
    $dashboard = new Dashboard();
    $val_chamado_mes = $dashboard->FaturamentoMes() * 80.00;
    $val_chamado_ano = $dashboard->Chamado2018() * 80.00;




    $smarty->assign('VLR', $ordensservico->GetRegistro());
    $smarty->assign('DAS', $dashboard->FaturamentoMes());
    $smarty->assign('VFAT', $dashboard->Chamado2018());
    $smarty->assign('VMES', number_format($val_chamado_mes, 2, ",", "."));
    $smarty->assign('VANO', number_format($val_chamado_ano, 2, ",", "."));

    $smarty->assign('RANO', $dashboard->ChamadosRonilsonAno());
    $smarty->assign('RMES', $dashboard->ChamadosRonilsonMes());
    $smarty->assign('LANO', $dashboard->ChamadosLindsonAno());
    $smarty->assign('LMES', $dashboard->ChamadosLindsonMes());



    $smarty->assign('MES_ATUAL', $dados->ContaChamado2018(date("m")));

    $smarty->display('dashboard.tpl');
endif;