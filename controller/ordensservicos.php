<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br - Lindson Amaro Lemos
 */
$smarty = new Template();
$clientes = new Clientes();
$ordensservico = new Ordensservicos();
$tecnicos = new Tecnicos();
$prioridades = new Prioridades();
$servicos = new Servicos();
$categorias = new Categorias();

if (isset($_POST['id_cliente']) && isset($_POST['id_tecnico'])):

    $id_servico = $_POST['id_servico'];
    $id_cliente = $_POST['id_cliente'];
    $id_tecnico = $_POST['id_tecnico'];
    $id_usuario = $_POST['id_usuario'];
    $id_prioridade = $_POST['id_prioridade'];
    $id_categoria = $_POST['id_categoria'];
    $descricao = $_POST['descricao'];
    $dt_conclusao = Sistema::DataAtualUS();
    $ordensservico->Preparar($id_cliente, $id_tecnico, $id_usuario, $id_prioridade, $id_categoria, $descricao, $id_servico, $dt_conclusao);
    $ordensservico->Inserir();
    
    elseif (isset($_POST['id_os']) && isset($_POST['id_prioridade'])):
    
    $id_chamado = $_POST['id_os']; 
    $id_usuario = $_POST['id_usuario'];
    $id_tecnico = $_POST['id_tecnico'];
    $id_servico = $_POST['id_servico'];
    $id_prioridade = $_POST['id_prioridade'];
    $descricao = $_POST['descricao'];
    $id_categoria = $_POST['id_categoria'];
    $id_status = $_POST['id_status'];
    $ordensservico->PrepararAltera($id_chamado, $id_usuario, $id_tecnico, $id_servico, $id_prioridade, $descricao, $id_categoria, $id_status);
    $ordensservico->Altera($id_chamado);

    elseif (isset($_POST['id_os']) && isset($_POST['solucao'])):
                 
    $id_chamado = $_POST['id_os']; 
    $id_tecnico = $_POST['id_tecnico'];
    $id_servico = $_POST['id_servico'];
    $id_categoria = $_POST['id_categoria'];
    $descricao = $_POST['descricao'];
    $solucao = $_POST['solucao'];
    $id_status = $_POST['id_status'];
   
    $ordensservico->PrepararFinaliza($id_chamado, $id_tecnico, $id_servico, $id_categoria, $descricao, $solucao, $id_status);
    $ordensservico->Finaliza($id_chamado);
    
endif;


$clientes->GetTodosClientes();
$ordensservico->GetOrdensServicos();
$tecnicos->GetTecnicos();
$prioridades->GetPrioridades();
$servicos->GetServicos();
$categorias->GetCategoria();

$smarty->assign('PRI', $prioridades->GetItens()); //P
$smarty->assign('OSS', $ordensservico->GetItens()); //O
$smarty->assign('CLI', $clientes->GetItens()); //C
$smarty->assign('TEC', $tecnicos->GetItens());  //F
$smarty->assign('PAGINAS', $ordensservico->ShowPaginacao());  //
$smarty->assign('VLR', $ordensservico->GetRegistro()); //V
$smarty->assign('SER', $servicos->GetItens());  //S
$smarty->assign('CAT', $categorias->GetItens());  //A

//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
$smarty->display('ordensservicos.tpl');

