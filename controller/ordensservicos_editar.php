<?php

$smarty = new Template();
$ordensservico = new Ordensservicos();
$cliente = new Clientes();
$funcionarios = new Funcionarios();
$prioridades = new Prioridades();
$clientemodal = new ClienteModal();


if (isset($_POST['id_cliente']) && isset($_POST['id_tecnico'])):

    $id_servico = $_POST['id_servico'];
    $id_cliente = $_POST['id_cliente'];
    $id_tecnico = $_POST['id_tecnico'];
    $id_usuario = $_POST['id_usuario'];
    $id_prioridade = $_POST['id_prioridade'];
    $id_categoria = $_POST['id_categoria'];
    $descricao = $_POST['descricao'];
    $id_status = '1';
    $dt_conclusao = Sistema::DataAtualUS();
    $ordensservico->Preparar($id_cliente, $id_tecnico, $id_usuario, $id_prioridade, $id_categoria, $descricao, $id_servico, $dt_conclusao, $id_status);
    $ordensservico->Inserir();
endif;
//       echo '<pre>';
//print_r($_POST);
//   echo '</pre>'; 
$ordensservico->GetOrdensServicos();
$clientemodal->GetClientesModal();
$cliente->GetClientes();
$funcionarios->GetFuncionarios();
$prioridades->GetPrioridades();

$smarty->assign('PRI', $prioridades->GetItens());
$smarty->assign('OSS', $ordensservico->GetItens());
$smarty->assign('CLIM',$clientemodal->GetItens());
$smarty->assign('CLI', $cliente->GetItens());
$smarty->assign('FUN', $funcionarios->GetItens());
$smarty->assign('PAGINAS', $ordensservico->ShowPaginacao());
$smarty->assign('VLR', $ordensservico->GetRegistro());

$smarty->display('ordensservicos.tpl');
