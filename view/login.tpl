<h3>Tela de Login</h3>

{if $LOGADO == false}
<section class="row" id="fazerlogin">
    <div class="login-form col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <header>

            <h3 class="text-center">Entre com seu <b>e-mail</b> e sua <b>senha</b></h3>
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


{else}    
    <section class="row">
        <h4 class="text-center text-green">Olá <b>{$USER}</b>, Seja bem vindo!</h4>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <a href="#" class="btn btn-default btn-block"> Painel do cliente </a>
                <a href="#" class="btn btn-default btn-block"> Alterar Senha </a>
                <a href="{$PAG_LOGOFF}" class="btn btn-danger btn-block"> sair </a>

            </div>
            <div class="col-md-4"></div>
        </div>
    </section>
{/if}