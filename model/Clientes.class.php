<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Clientes extends Conexao {

    private $id_cliente, $razao, $cnpj, $endereco, $bairro, $cidade, $uf, $telefone, $dtcadastro, $contrato, $id_usuario, $fantasia;

    function __construct() {
        parent::__construct();
    }

    function GetClientes() {
        $query = "select * from {$this->prefix}clientes";
        $query .= $this->PaginacaoLinks("id_cliente", $this->prefix . "clientes");
        $this->ExecuteSQL($query);

        $this->GetLista();
    }
    function GetTodosClientes() {
        $query = "select * from {$this->prefix}clientes";
        $this->ExecuteSQL($query);
        $this->GetListaClientes();
    }
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'id_cliente' => $lista['id_cliente'],
                'razao' => strtoupper($lista['razao']),
                'cnpj' => $lista['cnpj'],
                'endereco' => strtoupper($lista['endereco']),
                'bairro' => strtoupper($lista['bairro']),
                'cidade' => strtoupper($lista['cidade']),
                'uf' => $lista['uf'],
                'telefone' => $lista['telefone'],
                'contrato' => $lista['contrato'],
                'dtcadastro' => Sistema::Fdata($lista['dtcadastro']),
                'id_usuario' => $lista['id_usuario'],
                'fantasia' => strtoupper($lista['fantasia']),
            );
            $i++;
        endwhile;
    }

    private function GetListaClientes() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'id_cliente' => $lista['id_cliente'],
                'razao' => strtoupper($lista['razao']),
                'cnpj' => $lista['cnpj'],
                'endereco' => strtoupper($lista['endereco']),
                'bairro' => strtoupper($lista['bairro']),
                'cidade' => strtoupper($lista['cidade']),
                'uf' => $lista['uf'],
                'telefone' => $lista['telefone'],
                'contrato' => $lista['contrato'],
                'dtcadastro' => Sistema::Fdata($lista['dtcadastro']),
                'id_usuario' => $lista['id_usuario'],
                'fantasia' => strtoupper($lista['fantasia']),
            );
            $i++;
        endwhile;
    }
    function Preparar($razao, $cnpj, $endereco, $bairro, $cidade, $uf, $telefone, $contrato, $id_usuario, $fantasia) {

        $this->setRazao($razao);
        $this->setCnpj($cnpj);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setTelefone($telefone);
        $this->setDtcadastro(Sistema::DataAtualUS());
        $this->setContrato($contrato);
        $this->setId_usuario($id_usuario);
        $this->setFantasia($fantasia);
    }

    function Inserir() {
        $query = "INSERT INTO {$this->prefix}clientes(razao,cnpj,endereco,bairro,cidade,uf,telefone,contrato,dtcadastro,id_usuario,fantasia) ";
        $query .= "VALUES(:razao,:cnpj,:endereco,:bairro,:cidade,:uf,:telefone,:contrato,:dtcadastro,:id_usuario,:fantasia)";

        $params = array(
            ':razao' => $this->getRazao(),
            ':cnpj' => $this->getCnpj(),
            ':endereco' => $this->getEndereco(),
            ':bairro' => $this->getBairro(),
            ':cidade' => $this->getCidade(),
            ':uf' => $this->getUf(),
            ':telefone' => $this->getTelefone(),
            ':contrato' => $this->getContrato(),
            ':dtcadastro' => $this->getDtcadastro(),
            ':id_usuario' => $this->getId_usuario(),
            ':fantasia' => $this->getFantasia(),
        );
        $this->ExecuteSQL($query, $params);
    }
    function PrepararAltera($id_cliente, $razao, $cnpj, $endereco, $bairro, $cidade, $uf, $telefone, $contrato, $id_usuario, $fantasia) {
        
        $this->setId_cliente($id_cliente);
        $this->setRazao($razao);
        $this->setCnpj($cnpj);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setTelefone($telefone);
        $this->setContrato($contrato);
        $this->setId_usuario($id_usuario);
        $this->setFantasia($fantasia);
    }

    function Altera($id_cliente) {
        $query = "UPDATE {$this->prefix}clientes SET id_cliente=:id_cliente,razao=:razao,cnpj=:cnpj,endereco=:endereco,bairro=:bairro,cidade=:cidade,uf=:uf,telefone=:telefone,contrato=:contrato,id_usuario=:id_usuario,fantasia=:fantasia ";
        $query .= "WHERE id_cliente = :id_cliente";
        $params = array(
            ':id_cliente' => (int)$id_cliente,
            ':razao' => $this->getRazao(),
            ':cnpj' => $this->getCnpj(),
            ':endereco' => $this->getEndereco(),
            ':bairro' => $this->getBairro(),
            ':cidade' => $this->getCidade(),
            ':uf' => $this->getUf(),
            ':telefone' => $this->getTelefone(),
            ':contrato' => $this->getContrato(),
            ':id_usuario' => $this->getId_usuario(),
            ':fantasia' => $this->getFantasia(),
        );
        $this->ExecuteSQL($query, $params);
    }
    
    function Deleta($id_cliente){
        $query = "DELETE FROM {$this->prefix}clientes WHERE id_cliente = :id_cliente";
        $params = array(':id_cliente' => (int)$id_cliente);
        if($this->ExecuteSQL($query,$params)):
            return TRUE;
        else:
            return FALSE;
        endif;
        
    }
     

    function GetRegistro() {
        $query = "SHOW table status like '{$this->prefix}clientes'";
        $this->ExecuteSQL($query);
        return $this->ListarDados();
    }
    
    function getDtcadastro() {
        return $this->dtcadastro;
    }
    function getId_cliente() {
        return $this->id_cliente;
    }
    function getRazao() {
        return $this->razao;
    }
    function getCnpj() {
        return $this->cnpj;
    }
    function getEndereco() {
        return $this->endereco;
    }
    function getBairro() {
        return $this->bairro;
    }
    function getCidade() {
        return $this->cidade;
    }
    function getUf() {
        return $this->uf;
    }
    function getTelefone() {
        return $this->telefone;
    }
    function getContrato() {
        return $this->contrato;
    }
    function getId_usuario() {
        return $this->id_usuario;
    }
    function getFantasia() {
        return $this->fantasia;
    }
    
    function setDtcadastro($dtcadastro) {
        $this->dtcadastro = $dtcadastro;
    }
        function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }
    function setRazao($razao) {
        $this->razao = $razao;
    }
    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setContrato($contrato) {
        $this->contrato = $contrato;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setFantasia($fantasia) {
        $this->fantasia = $fantasia;
    }

}
