<?php

/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Tecnicos extends Conexao{
    function __construct() {
        parent::__construct();
    }
    function GetTecnicos() {
        $query = "select * from tb_tecnicos";
        $this->ExecuteSQL($query);

        $this->GetLista();
    }
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'id_tecnico' => $lista['id_tecnico'],
                'nome' => $lista['nome'],
                'celular' => $lista['celular'],
                'email' => $lista['email'],
                'especialidade' => $lista['especialidade'],
                'dt_admissao' => $lista['dt_admissao'],
                'senha' => $lista['senha'],
                
            );
            $i++;
        endwhile;
        
    }
}
