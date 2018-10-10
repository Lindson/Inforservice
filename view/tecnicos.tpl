<div class="container">
    <ol class="breadcrumb">
        <li><a href="">Início</a></li>
        <li><a href="">Técnicos</a></li>
        <li class="active">Pesquisa</li>
    </ol> 
    <div class="row cabecalho">

        <div class="col-xs-12 col-md-6">

        </div>
        <div class="col-xs-12 col-md-4 col-md-offset-2 busca">
            <div class="input-group">
                <input type="text" name="busca" class="form-control" placeholder="Pesquisar por nome do Técnico">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <h1>Técnico</h1>
        </div>

    </div>
    <div class="table-responsive">
        <table class="dados-os table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>E-mail</th>
                    <th>Especialidades</th>
                    <th>Data de Admissão</th>                   
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                {foreach from = $TEC item = T}
                    <tr>
                        <td>{$T.id_tecnico}</td>
                        <td>{$T.nome}</td>
                        <td>{$T.celular}</td>
                        <td>{$T.email}</td>
                        <td>{$T.especialidade}</td>
                        <td>{$T.dt_admissao}</td>
                        <td><span class="label label-success">Ativo</span></td>

                    </tr>
                {/foreach}

            </tbody>
        </table>
    </div>
</div>