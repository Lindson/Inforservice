<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class ClienteModal extends Conexao {

    function __construct() {
        parent::__construct();
    }
   
    function GetClientesID($id) {
        $query = "select * from {$this->prefix}clientes where id_cliente = $id";
        $this->ExecuteSQL($query);

        return $this->ListarDados();
    }
     
   function GetListaModal() {
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
                'contrato' => strtoupper($lista['contrato']),
                'dtcadastro' => Sistema::DataAtualBR($lista['dtcadastro']),
                'id_usuario' => $lista['id_usuario'],
                'fantasia' => strtoupper($lista['fantasia']),
            );
            $i++;
        endwhile;
    }
  function GetClientesModal() {
        $query = "select * from {$this->prefix}clientes";
        $this->ExecuteSQL($query);

        $this->GetListaModal();
    }
}
