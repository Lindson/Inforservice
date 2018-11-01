<?php
if(!isset($_SESSION)):
    session_start();
endif;
$smarty = new Template();
$login = new Login();


$smarty->assign('LOGADO',login::Logado());
$smarty->assign('DASH', Rotas::pag_Login());
$smarty->assign('TESTE',  header(Rotas::pag_Login()));

if((isset($_POST['txt_email'])) && (isset($_POST['txt_senha']))):
 $user = $_POST['txt_email'];
 $senha = $_POST['txt_senha']; 
    
 $login->getLogin($user, $senha);
 
endif;

if (Login::Logado()):
    $smarty->assign('USER', $_SESSION['USER']['nome']);
    $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
//    echo '<pre>';
//    var_dump($_SESSION['USER']);
//    echo '</pre>';
endif;






$smarty->display('login.tpl');