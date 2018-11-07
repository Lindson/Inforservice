<?php

/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
class Config {
    /***INFORMAÇÃO DO BANCO DE DADOS*/
   const BANCO_HOST = "localhost",
         BANCO_USER = "root",
         BANCO_SENHA = "",
         BANCO_BD = "inforservice",
         BANCO_PREFIX = "tb_",
         BANCO_LIM_PAG= 10;
    
   /***INFORMAÇÃO DO SITE*/
    const SITE_URL = "http://localhost:8080/os";
    const SITE_PASTA = "";
    const SITE_NOME = "Inforservice - inforservice-ce.com.br";
    const SITE_EMAIL_ADM = "lindson@inforservice-ce.com.br";
    const SITE_CEP = '60866520';
    const SITE_ENDERECO = 'Rua 418, 101  -  Jangurussu';
    const SITE_FONE = '(85)3034-3355';


    /***DADOS DO SERVIDOR DE EMAIL*/
     const EMAIL_HOST = "smtp.com.br";
     const EMAIL_USER = "lindson";
     const EMAIL_NOME = "Lindson";
     const EMAIL_SENHA = "*****";
     const EMAIL_PORTA = "587";
     const EMAIL_SMTPAUTH = true;
     const EMAIL_SMTPSECURE = "";
     const EMAIL_COPIA = "helpdesk";


}
