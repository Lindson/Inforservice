<?php

$smarty = new Template();
$login = new Login();


$smarty->assign('LOGADO',login::Logado());

if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])):
 
    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $login->GetLogin($user, $senha);
//    echo '<pre>';
//    var_dump($_SESSION);
//    echo '</pre>';
endif;
    




$smarty->display('login.tpl');