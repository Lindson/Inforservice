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
    function getLogin($user, $senha) {

        $this->getUser($user);
        $this->getSenha($senha);

        $query = "SELECT * FROM {$this->prefix}tecnicos WHERE email = :email AND senha = :senha";
        $params = array(':email'=>$user,':senha'=>$senha);
        $this->ExecuteSQL($query,$params);        
        
        if ($this->TotalDados() > 0):

            $lista = $this->ListarDados();
            $_SESSION['USER']['id_tecnico'] = $lista['id_tecnico'];
            $_SESSION['USER']['nome'] = $lista['nome'];
            $_SESSION['USER']['celular'] = $lista['celular'];
            $_SESSION['USER']['especialidade'] = $lista['especialidade'];
            $_SESSION['USER']['dt_admissao'] = $lista['dt_admissao'];
            $_SESSION['USER']['email'] = $lista['email'];
            $_SESSION['USER']['senha'] = $lista['senha'];
            Rotas::Refresh(1);
        else :
           
            echo 'Erro ao efetuar o Login';

        endif;
    }
    
    /**
     * @return boolean
     */
    static function Logado() {

        if ((isset($_SESSION['USER']['id_tecnico'])) && (isset($_SESSION['USER']['nome']))):
            
            return TRUE;
            
        else:
            return FALSE;

        endif;
        
    }
    /**
     * faz o logoff do usuário
     */
    static function Logoff(){
        unset($_SESSION['USER']);
        Rotas::Redirecionar(0.1, Rotas::pag_Login());
       
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
