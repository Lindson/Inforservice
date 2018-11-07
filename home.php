<?php

$smarty = new Template();

$smarty->assign('GET_VIEW',Rotas::get_SiteVIEW());
$smarty->assign('GET_VIEW',Rotas::get_SiteVIEW());
$smarty->assign('LOG', Rotas::pag_Login());
$smarty->display('carrosel.tpl');



