<?php

/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Ordensservicos extends Conexao {

    private $id_chamado, $id_cliente, $id_tecnico, $id_usuario, $id_prioridade, $id_categoria, $descricao, $id_servico, $dt_abertura, $dt_conclusao, $id_status, $solucao, $tecnico;

    function __construct() {
        parent::__construct();
    }
   function GetTecnico($id_tecnico){
        
        if($id_tecnico  == 1):
           $tecnico = $this->setTecnico('Lindson');
        else:
           $tecnico = $this->setTecnico('Ronilson');
        
        endif;
        return $this->tecnico; 
    }
    function GetOrdensServicos() {
        $query = "select * from v_ordensservicos ORDER BY `id_chamado` DESC";
        $query .= $this->PaginacaoLinks("id_chamado", "v_ordensservicos");
        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    function GetRegistro() {
        $query = "SHOW table status like '{$this->prefix}chamados'";
        $this->ExecuteSQL($query);
        return $this->ListarDados();
    }

    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cod_os' => $lista['id_chamado'],
                'dt_abertura' => Sistema::Fdata($lista['dt_abertura']),
                'cliente' => $lista['cliente'],
                'tipo' => $lista['tipo'],
                'id_prioridade' => $lista['id_prioridade'],
                'prioridade' => strtoupper($lista['prioridade']),
                'id_categoria' => $lista['id_categoria'],
                'categoria' => strtoupper($lista['categoria']),
                'descricao' => strtoupper($lista['descricao']),
                'id_servico' => $lista['id_servico'],
                'id_tecnico' => $lista['id_tecnico'],
                'tecnico' => $lista['tecnico'],
                'id_status' => $lista['id_status'],
                'status' => $lista['status'],
                'solucao' => $lista['solucao'],
                'id_usuario' => $lista['id_usuario'],
                'usuario' => $lista['usuario'],
                'cor' => $lista['cor'],
            );
            $i++;
        endwhile;
    }
    function Preparar($id_cliente, $id_tecnico, $id_usuario, $id_prioridade, $id_categoria, $descricao, $id_servico){
        $this->setId_servico($id_servico);
        $this->setId_cliente($id_cliente);
        $this->setId_tecnico($id_tecnico);
        $this->setId_usuario($id_usuario);
        $this->setId_prioridade($id_prioridade);
        $this->setId_categoria($id_categoria);
        $this->setDescricao($descricao);
        $this->setDt_abertura(Sistema::DataAtualUS());
        $this->setId_status($id_status=1);
        
    }
    
    function Inserir(){
        $query = "INSERT INTO tb_chamados(id_cliente, id_tecnico, id_usuario, id_prioridade, id_categoria, descricao, id_servico, dt_abertura, id_status) ";
        $query .= "VALUES (:id_cliente, :id_tecnico, :id_usuario, :id_prioridade, :id_categoria, :descricao, :id_servico, :dt_abertura, :id_status)";
        
        $params = array(
            ':id_cliente'=> $this->getId_cliente(),
            ':id_tecnico'=> $this->getId_tecnico(),
            ':id_usuario'=> $this->getId_usuario(),
            ':id_prioridade'=> $this->getId_prioridade(),
            ':id_categoria'=> $this->getId_categoria(),
            ':descricao' => $this->getDescricao(),
            ':id_servico' => $this->getId_servico(),
            ':dt_abertura' => $this->getDt_abertura(),
            ':id_status' => $this->getId_status()
        );
        
        $this->ExecuteSQL($query,$params);
        
    }
     function PrepararAltera($id_chamado, $id_usuario, $id_tecnico, $id_servico, $id_prioridade, $descricao, $id_categoria, $id_status) {
        
        $this->setId_chamado($id_chamado);
        $this->setId_usuario($id_usuario);
        $this->setId_tecnico($id_tecnico);
        $this->setId_servico($id_servico);
        $this->setId_prioridade($id_prioridade);
        $this->setDescricao($descricao);
        $this->setId_categoria($id_categoria);
        $this->setId_status($id_status);
        
    }
     
    function Altera($id_chamado){
        $query = "UPDATE {$this->prefix}chamados SET id_chamado=:id_chamado,id_usuario=:id_usuario,id_tecnico=:id_tecnico,id_servico=:id_servico,id_prioridade=:id_prioridade,descricao=:descricao,id_categoria=:id_categoria,id_status=:id_status ";
        $query .= "WHERE id_chamado = :id_chamado";
        
        $params = array(
            ':id_chamado' => (int)$id_chamado,
            ':id_usuario' => $this->getId_usuario(),
            ':id_tecnico' => $this->getId_tecnico(),
            ':id_servico' => $this->getId_servico(),
            ':id_prioridade' => $this->getId_prioridade(),
            ':descricao' => $this->getDescricao(),
            ':id_categoria' => $this->getId_categoria(),
            ':id_status' => $this->getId_status(),
          );
        $this->ExecuteSQL($query, $params);   
    }
    
    function PrepararFinaliza($id_chamado, $id_tecnico, $id_servico, $id_categoria, $descricao, $solucao, $id_status) {
        $this->setId_chamado($id_chamado);
        $this->setId_tecnico($id_tecnico);
        $this->setId_servico($id_servico);
        $this->setId_categoria($id_categoria);
        $this->setDescricao($descricao);
        $this->setSolucao($solucao);
        $this->setId_status($id_status);
        $this->setDt_conclusao(Sistema::DataAtualUS());
    }
    function Finaliza($id_chamado){
        $query = "UPDATE {$this->prefix}chamados SET id_chamado=:id_chamado,id_tecnico=:id_tecnico,id_servico=:id_servico,id_categoria=:id_categoria,descricao=:descricao,solucao=:solucao,id_status=:id_status,dt_conclusao=:dt_conclusao ";
        $query .= "WHERE id_chamado = :id_chamado";
        
        $params = array(
            ':id_chamado' => (int)$id_chamado,
            ':id_tecnico' => $this->getId_tecnico(),
            ':id_servico' => $this->getId_servico(),
            ':id_categoria' => $this->getId_categoria(),
            ':descricao' => $this->getDescricao(),
            ':solucao' => $this->getSolucao(),
            ':id_status' => $this->getId_status(),
            ':dt_conclusao' => $this->getDt_conclusao(),
          );
        $this->ExecuteSQL($query, $params);   
    }

    function setTecnico($tecnico) {
        $this->tecnico = $tecnico;
    }    
    function getId_chamado() {
        return $this->id_chamado;
    }
    function getDt_abertura() {
        return $this->dt_abertura;
    }
    function getSolucao() {
        return $this->solucao;
    }
    function getId_servico() {
        return $this->id_servico;
    }
    function getId_cliente() {
        return $this->id_cliente;
    }
    function getId_tecnico() {
        return $this->id_tecnico;
    }
    function getId_usuario() {
        return $this->id_usuario;
    }
    function getId_prioridade() {
        return $this->id_prioridade;
    }
    function getId_categoria() {
        return $this->id_categoria;
    }
    function getDescricao() {
        return $this->descricao;
    }
    function getDt_conclusao() {
        return $this->dt_conclusao;
    }
    function getId_status() {
        return $this->id_status;
    }
    
    function setId_chamado($id_chamado) {
        $this->id_chamado = $id_chamado;
    }

    function setSolucao($solucao) {
        $this->solucao = $solucao;
    }
    function setDt_abertura($dt_abertura) {
        $this->dt_abertura = $dt_abertura;
    }
    function setId_servico($id_servico) {
       $this->id_servico = $id_servico;
    }
    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }
    function setId_tecnico($id_tecnico) {
        $this->id_tecnico = $id_tecnico;
    }
    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    function setId_prioridade($id_prioridade) {
        $this->id_prioridade = $id_prioridade;
    }
    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }
    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    function setDt_conclusao($dt_conclusao) {
        $this->dt_conclusao = $dt_conclusao;
    }
    function setId_status($id_status) {
        $this->id_status = $id_status;
    }


}
