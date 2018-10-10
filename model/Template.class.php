<?php

/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Template extends SmartyBC {

    function __construct() {
        parent::__construct();

        $this->setTemplateDir('view/');
        $this->setCompileDir('view/compile/');
        $this->setCacheDir('view/cache/');
    }

}
