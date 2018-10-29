<?php
/* Smarty version 3.1.33, created on 2018-10-28 04:16:00
  from 'C:\xampp\htdocs\os\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd529f0c8b1c9_62692120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd571660cb259550efe556cc61aaba958eb17228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\os\\view\\login.tpl',
      1 => 1540696547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd529f0c8b1c9_62692120 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login-form col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
    <header>
        
        <h3 class="text-center">Entre com seu <b>usuário</b> e <b>senha</b></h3>
    </header>
    <form name="login" action="" method="post">
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
        </div>

        <footer>
            <div class="checkbox pull-left">
                <label><input type="checkbox" name="lembrar">Lembrar de mim</label>
            </div>
            <button class="btn btn-primary pull-right">Entrar</button>
        </footer>
    </form>
</div>
<?php }
}
