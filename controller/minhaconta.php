<?php
if(!Login::Logado()):
    
    echo '<div class="alert alert-danger"> Acesso negado, faça o login! <a class="btn btn-danger" href="'.Rotas::pag_Login().'"> Login </a></div>';
    Rotas::Redirecionar(0.5, Rotas::pag_Login());
else:
$smarty = new Template();
$smarty->display('minhaconta.tpl');

endif;