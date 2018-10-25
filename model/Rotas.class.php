<?php

/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Rotas {

    private static $pasta_controller = 'controller/';
    private static $pasta_tema = 'view/tema';
    private static $pasta_view = 'view';
    public static $pag;

    /**
     * Trata as paginas e parametros da URL
     */
    static function get_Pagina() {
        // verifico se passou parametros na URL
        if (isset($_GET['pag'])):

            $pagina = $_GET['pag'];
            // separa a URL pela barra e gera os parametros
            
            self::$pag = explode('/', $pagina);

            $pagina = self::$pasta_controller . self::$pag[0] . '.php';
            // verifico se existe a pagina com nome passado na URL
            if (file_exists($pagina)):
                include $pagina;
               
            // se não existe o arquivo mostra erro
            else:
                
                include 'erro.php';
            endif;


        endif;
    }

    static function get_SiteHOME() {
        return Config::SITE_URL;
    }

    static function get_SiteRAIZ() {
        return $_SERVER['DOCUMENT_ROOT'] . '/';
    }

    static function get_SiteTEMA() {
        return self::get_SiteHOME() . '/' . self::$pasta_tema;
    }

    static function get_SiteVIEW() {
        return self::get_SiteHOME() . '/' . self::$pasta_view;
    }

    static function pag_Login() {
        return self::get_SiteHOME() . '/login';
    }

    static function pag_Clientes() {
        return self::get_SiteHOME() . '/clientes';
    }

    static function pag_Tecnicos() {
        return self::get_SiteHOME() . '/tecnicos';
    }

    static function pag_Servicos() {
        return self::get_SiteHOME() . '/servicos';
    }
     static function pag_OrdensServicos() {
        return self::get_SiteHOME() . '/ordensservicos';
    }
    static function pag_Dashboard() {
        return self::get_SiteHOME() . '/dashboard';
    }
}
