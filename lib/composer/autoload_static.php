<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdef0b5187e22a9c63dca4d271d80364e
{
    public static $files = array (
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Mpdf\\' => 5,
        ),
        'D' => 
        array (
            'DeepCopy\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/mpdf/src',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
    );

    public static $classMap = array (
        'Categorias' => __DIR__ . '/../..' . '/model/Categorias.class.php',
        'Clientes' => __DIR__ . '/../..' . '/model/Clientes.class.php',
        'Conexao' => __DIR__ . '/../..' . '/model/Conexao.class.php',
        'Config' => __DIR__ . '/../..' . '/model/Config.class.php',
        'Dados' => __DIR__ . '/../..' . '/model/Dados.class.php',
        'Dashboard' => __DIR__ . '/../..' . '/model/Dashboard.class.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'EnviarEmail' => __DIR__ . '/../..' . '/model/EnviarEmail.class.php',
        'FPDF_TPL' => __DIR__ . '/..' . '/setasign/fpdi/fpdf_tpl.php',
        'FPDI' => __DIR__ . '/..' . '/setasign/fpdi/fpdi.php',
        'FilterASCII85' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCII85.php',
        'FilterASCIIHexDecode' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCIIHexDecode.php',
        'FilterLZW' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterLZW.php',
        'Login' => __DIR__ . '/../..' . '/model/Login.class.php',
        'Ordensservicos' => __DIR__ . '/../..' . '/model/Ordensservicos.class.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'Paginacao' => __DIR__ . '/../..' . '/model/Paginacao.class.php',
        'Prioridades' => __DIR__ . '/../..' . '/model/Prioridades.class.php',
        'Relatorios' => __DIR__ . '/../..' . '/model/Relatorios.class.php',
        'Rotas' => __DIR__ . '/../..' . '/model/Rotas.class.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'Servicos' => __DIR__ . '/../..' . '/model/Servicos.class.php',
        'Sistema' => __DIR__ . '/../..' . '/model/Sistema.class.php',
        'Tecnicos' => __DIR__ . '/../..' . '/model/Tecnicos.class.php',
        'Template' => __DIR__ . '/../..' . '/model/Template.class.php',
        'fpdi_pdf_parser' => __DIR__ . '/..' . '/setasign/fpdi/fpdi_pdf_parser.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'pdf_context' => __DIR__ . '/..' . '/setasign/fpdi/pdf_context.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdef0b5187e22a9c63dca4d271d80364e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdef0b5187e22a9c63dca4d271d80364e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdef0b5187e22a9c63dca4d271d80364e::$classMap;

        }, null, ClassLoader::class);
    }
}
