<div class="login-form col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
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
