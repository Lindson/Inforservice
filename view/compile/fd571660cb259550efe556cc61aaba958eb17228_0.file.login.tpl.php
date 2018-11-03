<?php
/* Smarty version 3.1.33, created on 2018-11-03 04:24:30
  from 'C:\xampp\htdocs\os\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdd14ee699776_50336888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd571660cb259550efe556cc61aaba958eb17228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\os\\view\\login.tpl',
      1 => 1541215469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdd14ee699776_50336888 (Smarty_Internal_Template $_smarty_tpl) {
?><h3></h3>
<br>
<br>
<?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == false) {?>
<section class="row" id="fazerlogin">
    <div class="login-form col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <header>

            <h3 class="text-center">Entre com seu <b>e-mail</b> e <b>senha</b></h3>
        </header>
        <form name="loginn" class="form-signin" method="POST" action="">
            
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </div>                
                    <input type="email" class="form-control input-lg" name="txt_email" value="" placeholder="Digite seu e-mail" required>                
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-option-horizontal"></span>
                    </div>
                    <input type="password" class="form-control input-lg" name="txt_senha" value="" placeholder="Digite sua senha" required>

                </div>
                <div class="form-group">                         
                    <div class="input-group">
                        <div class="input-lg">
                        <button class="btn btn-facebook btn-block" type="submit">Acessar</button>                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>


<?php } else { ?>    
    <section class="row">
        <h4 class="text-center text-green">Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, Seja bem vindo!</h4>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <a href="#" class="btn btn-default btn-block"> Painel do cliente </a>
                <a href="#" class="btn btn-default btn-block"> Alterar Senha </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger btn-block"> sair </a>

            </div>
            <div class="col-md-4"></div>
        </div>
    </section>
<?php }
}
}
