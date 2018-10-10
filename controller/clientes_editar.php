<?php
$smarty = new Template();

if(isset($_POST['razao']) && isset($_POST['endereco'])):
   
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
    

endif;


$clientes = new Clientes();

//echo '<pre>';
//echo print_r($clientemodal->GetItens());
//echo '</pre>';

$smarty->display('clientes.tpl');
