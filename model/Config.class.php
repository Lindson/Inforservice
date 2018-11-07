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
<<<<<<< HEAD
<<<<<<< HEAD
     const EMAIL_HOST = "smtp.inforservice-ce.com.br";
     const EMAIL_USER = "lindson@inforservice-ce.com.br";
     const EMAIL_NOME = "Lindson Amaro";
     const EMAIL_SENHA = "ll313131";
     const EMAIL_PORTA = "587";
     const EMAIL_SMTPAUTH = true;
     const EMAIL_SMTPSECURE = "";
     const EMAIL_COPIA = "helpdesk@inforservice-ce.com.br";
=======
     const EMAIL_HOST = "";
     const EMAIL_USER = "";
     const EMAIL_NOME = "";
     const EMAIL_SENHA = "";
     const EMAIL_PORTA = "";
     const EMAIL_SMTPAUTH = "";
     const EMAIL_SMTPSECURE = "";
>>>>>>> parent of a8ee426... Instalando e configurando o PHPMailer
=======
     const EMAIL_HOST = "smtp.com.br";
     const EMAIL_USER = "lindson";
     const EMAIL_NOME = "Lindson";
     const EMAIL_SENHA = "*****";
     const EMAIL_PORTA = "587";
     const EMAIL_SMTPAUTH = true;
     const EMAIL_SMTPSECURE = "";
     const EMAIL_COPIA = "helpdesk";
>>>>>>> 85f021ab9218d5598c27e5455b254f82703517e9


}
