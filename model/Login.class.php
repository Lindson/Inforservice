<?php

/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Login extends Conexao {

    private $user;
    private $senha;

    function __construct() {
        parent::__construct();
    }

    /**
     * 
     * @param String $user
     * @param String $senha
     */
    function GetLogin($user, $senha) {

        $this->getUser($user);
        $this->getSenha($senha);

        $query = "SELECT * FROM {$this->prefix}tecnicos WHERE email ='$user' AND senha = '$senha'";

        $this->ExecuteSQL($query);

        if ($this->TotalDados() > 0):

            $lista = $this->ListarDados();
            $_SESSION['USER']['id_tecnico'] = $lista['id_tecnico'];
            $_SESSION['USER']['nome'] = $lista['nome'];
            $_SESSION['USER']['email'] = $lista['email'];


        else :

            echo 'Erro no Login';

        endif;
    }

    /**
     * @return boolean
     */
    static function Logado() {

        if (count($_SESSION['USER']) > 2):
            return TRUE;

        else:
            return FALSE;

        endif;
    }

    private function setUser($user) {
        $this->user = $user;
    }

    private function setSenha($senha) {
        $this->senha = $senha;
    }
    function getUser() {
        return $this->user;
    }

    function getSenha() {
        return $this->senha;
    }



    
    
}
