<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */

class Categorias extends Conexao{
    
    function __construct() {
        parent::__construct();
    }
    function GetCategoria() {
        $query = "select * from tb_categorias";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }
    private function GetLista(){
        $i=1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
        'id_categoria' => $lista['id_categoria'],
        'categoria' => $lista['categoria'],
                );
            $i++;
        endwhile;
    }
}
