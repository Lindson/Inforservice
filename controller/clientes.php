<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
$smarty = new Template();

if (isset($_POST['idcli']) >= 1):


    $id_cliente = $_POST['idcli'];
    $razao = $_POST['razao'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $telefone = $_POST['telefone'];
    $contrato = $_POST['contrato'];
    $id_usuario = $_POST['id_usuario'];
    $fantasia = $_POST['fantasia'];

    $alterar = new Clientes();
    $alterar->PrepararAltera($id_cliente, $razao, $cnpj, $endereco, $bairro, $cidade, $uf, $telefone, $contrato, $id_usuario, $fantasia);
    $alterar->Altera($_POST['idcli']);

elseif (count($_POST) == 10) :
    $razao = $_POST['razao'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $telefone = $_POST['telefone'];
    $contrato = $_POST['contrato'];
    $id_usuario = $_POST['id_usuario'];
    $fantasia = $_POST['fantasia'];

    $gravar = new Clientes();
    $gravar->Preparar($razao, $cnpj, $endereco, $bairro, $cidade, $uf, $telefone, $contrato, $id_usuario, $fantasia);
    $gravar->Inserir();

elseif (isset($_POST['idcli_delete']) && isset($_POST['idcli_apagar'])):
    $delete = new Clientes();
    $delete->Deleta($_POST['idcli_delete']);
    
endif;



$clientes = new Clientes();

$clientes->GetClientes();
$clientes->GetRegistro();


$smarty->assign('CLIE', $clientes->GetItens());
$smarty->assign('VLR', $clientes->GetRegistro());
$smarty->assign('PAGINAS', $clientes->ShowPaginacao());
//echo '<pre>';
//var_dump($clientes->GetClientes());
//echo '</pre>';
$smarty->display('clientes.tpl');
