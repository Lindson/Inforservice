<?php
/* Smarty version 3.1.33, created on 2018-11-06 13:49:40
  from 'C:\xampp\htdocs\os\view\carrosel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be18de4985d83_83775803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f53fd40aab0ad134e68eb12e36d689e25b8aa66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\os\\view\\carrosel.tpl',
      1 => 1541507882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be18de4985d83_83775803 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Carousel================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['GET_VIEW']->value;?>
/imagens/helpdesk.jpg" alt="Primeiro Slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Suporte 24 horas 7 dias por semana</h1>
                    <h3>Comprometimento nos serviços prestados através de uma metodologia definida de trabalho, utilizando sempre as melhores práticas existentes no mercado. <a href="http://inforservice-ce.com.br/os"><code>http://inforservice-ce.com.br/os</code></a> Acesse agora mesmo!</h3>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['LOG']->value;?>
" role="button">Acesse agora</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['GET_VIEW']->value;?>
/imagens/parceria1.jpg" alt="Segundo Slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Atendimento</h1>
                    <h3>As consultas técnicas podem ser feitas por Suporte Remoto, E-mail, Telefone ou WhatsApp.</h3>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['LOG']->value;?>
" role="button">Fale conosco</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['GET_VIEW']->value;?>
/imagens/suporte_tecnico.jpg" alt="Terceiro Slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Economise tempo e dinheiro</h1>
                    <h3>Colocamos à disposição de nossos clientes uma equipe de suporte preparada para atender suas necessidades de forma rápida e eficiente  treinada para resolver qualquer tipo de dúvidas que pode ocorrer. Oferecendo um serviço de qualidade para os clientes economizar em tempo e dinheiro.</h3>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['LOG']->value;?>
" role="button">Acesse agora</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->    <?php }
}
