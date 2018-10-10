<div class="container">
    <ol class="breadcrumb">
        <li><a href="">Início</a></li>
        <li><a href="">Cliente</a></li>
        <li class="active">Pesquisa</li>
    </ol>

    <div class="row cabecalho">
        <div class="col-xs-12 col-md-6">
            <h1>Clientes</h1>
        </div>
        <div class="col-xs-12 col-md-4 col-md-offset-2 busca">
            <div class="input-group">
                <input type="text" name="busca" class="form-control" placeholder="Pesquisar por nome do cliente">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="dados-os table table-striped table-bordered table-hover">
            <thead>
                <tr>                     
                    <th>Cod.</th>
                    <th>Cliente</th>
                    <th>Endereço</th>
                    <th>Bairro</th>                   
                    <th>Telefone</th>
                    <th>Contrato</th>
                    <th>Data cadastro</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach from = $CLIE item = C}
                    <tr>
                        <td>{$C.id_cliente}</td>
                        <td>{$C.razao}</td>
                        <td>{$C.endereco}</td>
                        <td>{$C.bairro}</td>
                        <td>{$C.telefone}</td>
                        <td>{$C.contrato}</td>
                        <td>{$C.dtcadastro}</td>
                        <td class="text-center">

                            <a href="" data-target="#VisualizarCliente" 
                               data-toggle="modal" 
                               data-whatever_id="{$C.id_cliente}" 
                               data-whatever_razao="{$C.razao}" 
                               data-whatever_cnpj="{$C.cnpj}"
                               data-whatever_endereco="{$C.endereco}"
                               data-whatever_bairro="{$C.bairro}"
                               data-whatever_cidade="{$C.cidade}"
                               data-whatever_uf="{$C.uf}"
                               data-whatever_telefone="{$C.telefone}"
                               data-whatever_contrato="{$C.contrato}"
                               data-whatever_dtcadastro="{$C.dtcadastro}"
                               data-whatever_fantasia="{$C.fantasia}"
                               title="Visualizar"><span class="glyphicon glyphicon-eye-open text-success"></span>&nbsp </a>
                               
                            <a href="" data-toggle="modal" data-target="#EditarCliente" 
                               data-whatever_id="{$C.id_cliente}"
                               data-whatever_idcli="{$C.id_cliente}"
                               data-whatever_razao="{$C.razao}" 
                               data-whatever_cnpj="{$C.cnpj}"
                               data-whatever_endereco="{$C.endereco}"
                               data-whatever_bairro="{$C.bairro}"
                               data-whatever_cidade="{$C.cidade}"
                               data-whatever_uf="{$C.uf}"
                               data-whatever_telefone="{$C.telefone}"
                               data-whatever_contrato="{$C.contrato}"
                               data-whatever_dtcadastro="{$C.dtcadastro}"
                               data-whatever_fantasia="{$C.fantasia}"
                               data-whatever_id_usuario="{$C.id_usuario}"
                               title="Editar"><span class="glyphicon glyphicon-pencil text-warning"></span>&nbsp </a>
                               
                            <a href="" data-toggle="modal" data-target="#DeletarCliente"
                               data-whatever_id="{$C.id_cliente}"
                               data-whatever_idcli_delete="{$C.id_cliente}"
                               data-whatever_razao="{$C.razao}" 
                               data-whatever_cnpj="{$C.cnpj}"
                               data-whatever_endereco="{$C.endereco}"
                               data-whatever_bairro="{$C.bairro}"
                               data-whatever_cidade="{$C.cidade}"
                               data-whatever_uf="{$C.uf}"
                               data-whatever_telefone="{$C.telefone}"
                               data-whatever_contrato="{$C.contrato}"
                               data-whatever_dtcadastro="{$C.dtcadastro}"
                               data-whatever_fantasia="{$C.fantasia}"
                               data-whatever_id_usuario="{$C.id_usuario}"
                               title="Deletar"><span class="glyphicon glyphicon-trash text-danger"></span>&nbsp </a>
                        </td>
                    </tr>
                {/foreach}  
            </tbody>
        </table>
    </div>
    <footer class="row">
        <div class="col-sm-6">
            <button class="btn btn-primary" data-toggle="modal" data-target="#NovoCliente">Novo Cliente</button>
        </div>
        <div class="col-sm-6 paginacao text-right">
            {$PAGINAS}
        </div>
    </footer>
</div>
<!-- ****** MODAL DO CLIENTE NOVO ****** -->  
<div class="modal fade" id="NovoCliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" class="close">
                    <span>&times;</span>
                </button>
                <h4 class="modal-title">Novo Cliente</h4>
            </div>
            <form name="novo_cliente" method="post" action="">
                <div class="modal-body">

                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        <b>Ocorreu um erro!</b> Confira se você preencheu todos os campos.
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-12">
                            <label class="control-label">Código Cliente</label>
                            <h4 class="form-control-static">00{$VLR['Auto_increment']}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-9">
                            <label class="control-label" for="razao">Razão Social</label>
                            <input type="text" name="razao" id="razao" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-3">
                            <label class="control-label" for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label class="control-label" for="endereco">Endereço</label>
                            <input type="text" name="endereco" id="endereco" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" required>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label" for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-2">
                            <label class="control-label" for="uf">UF</label>
                            <input type="text" name="uf" id="uf" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" required>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="radio-inline col-sm-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="contrato" id="contrato" value="SIM" checked> <p> Contrato </p> </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="contrato" id="contrato" value="NAO"> <p> Avulso </p> </label>
                            </div>
                        </div>
                        <div class="form-group selectpicker col-sm-4">
                            <label class="control-label" for="id_usuario">Usuario</label>
                            <select name="id_usuario" id="id_usuario" class="form-control" required>
                                <option value="">Selecione...</option>
                                <option value="1">Thiago Santiago</option> 
                                <option value="2">Paulo Jucá</option>
                                <option value="3">Vinicius Saraiva</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="fantasia">Fantasia</label>
                            <input type="text" name="fantasia" id="fantasia" class="form-control" required>                           
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Limpar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- ****** MODAL DO CLIENTE VISUALIZAR ****** -->     
<div class="modal fade" id="VisualizarCliente">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" class="close">
                    <span>&times;</span>
                </button>
                <h3 class="modal-title" id="ModalLabel"></h3>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-9">
                            <div class="panel-heading"><b> Razão Social </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="razao"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-3">
                            <div class="panel-heading"><b> Telefone </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="telefone"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <div class="panel-heading"><b> Endereço </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="endereco"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <div class="panel-heading"><b> Bairro </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="bairro"></span>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="panel-heading"><b> Cidade </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="cidade"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-2">
                            <div class="panel-heading"><b> UF </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="uf"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <div class="panel-heading"><b> CNPJ </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="cnpj"></span>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="form-group has-success col-sm-3">
                            <div class="panel-heading"><b> Contrato </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="contrato"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-success col-sm-4">
                            <div class="panel-heading"><b> Data Cadastro </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="dtcadastro"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-5">
                            <div class="panel-heading"><b> Nome Fantasia </b></div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <span id="fantasia"></span>
                                </div>
                            </div>                   
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
        </div>
    </div>
</div>
</div>    
<!-- ****** MODAL DO CLIENTE EDITAR ****** -->                       
<div class="modal fade" id="EditarCliente">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" class="close">
                    <span>&times;</span>
                </button>
                <h3 class="modal-title" id="ModalTitle"></h3>
            </div>

            <div class="modal-body">
                <form name="edita_cliente" method="post" action="">
                    <div class="row">
                        <div class="form-group col-sm-9">
                            <label class="control-label" for="razao"> Razão Social </label>
                            <input type="text" name="razao" id="razao" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-3">
                            <label class="control-label" for="telefone"> Telefone </label>
                            <input type="text" name="telefone" id="telefone" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label class="control-label" for="endereco"> Endereço </label>
                            <input type="text" name="endereco" id="endereco" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="bairro"> Bairro </label>
                            <input type="text" name="bairro" id="bairro" class="form-control" required>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label" for="cidade"> Cidade </label>
                            <input type="text" name="cidade" id="cidade" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-2">
                            <label class="control-label" for="uf"> UF </label>
                            <input type="text" name="uf" id="uf" class="form-control"required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="uf"> CNPJ </label>
                            <input type="text" name="cnpj" id="cnpj" class="form-control" required>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label class="control-label" for="contrato"> Contrato </label>
                            <select name="contrato" id="contrato" class="form-control" required>
                                <option value="SIM"> SIM </option> 
                                <option value="NAO"> NÃO </option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="id_usuario">Usuario</label>
                            <select name="id_usuario" id="id_usuario" class="form-control" required>
                                <option value="1">Thiago Santiago</option> 
                                <option value="2">Paulo Jucá</option>
                                <option value="3">Vinicius Saraiva</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-5">
                            <label class="control-label" for="fantasia">Fantasia</label>
                            <input type="text" name="fantasia" id="fantasia" class="form-control" required>                         
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input name="idcli" type="hidden" id="idcli"></input>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-warning">Alterar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
<!-- ****** MODAL DO CLIENTE DELETAR ****** -->                       
<div class="modal fade" id="DeletarCliente">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        <h4><b>Atenção!</b> &nbsp  Deseja realmente deletar esse Cliente?</h4>
                </div>
                <h3 class="modal-title" id="ModalTitle"></h3>
            </div>

            <div class="modal-body">
                <form name="deletaCliente" method="post" onSubmit="return validaRadio();" >
                    <div class="row">
                        <div class="form-group col-sm-9">
                            <label class="control-label" for="razao"> Razão Social </label>
                            <input type="text" name="razao" id="razao" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-3">
                            <label class="control-label" for="telefone"> Telefone </label>
                            <input type="text" name="telefone" id="telefone" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label class="control-label" for="endereco"> Endereço </label>
                            <input type="text" name="endereco" id="endereco" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="bairro"> Bairro </label>
                            <input type="text" name="bairro" id="bairro" class="form-control" required>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label" for="cidade"> Cidade </label>
                            <input type="text" name="cidade" id="cidade" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-2">
                            <label class="control-label" for="uf"> UF </label>
                            <input type="text" name="uf" id="uf" class="form-control"required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="uf"> CNPJ </label>
                            <input type="text" name="cnpj" id="cnpj" class="form-control" required>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label class="control-label" for="contrato"> Contrato </label>
                            <select name="contrato" id="contrato" class="form-control" required>
                                <option value="">Selecione...</option>
                                <option value="SIM"> SIM </option> 
                                <option value="NAO"> NÃO </option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="id_usuario">Usuario</label>
                            <select name="id_usuario" id="id_usuario" class="form-control" required>
                                <option value="">Selecione...</option>
                                <option value="1">Thiago Santiago</option> 
                                <option value="2">Paulo Jucá</option>
                                <option value="3">Vinicius Saraiva</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-5">
                            <label class="control-label" for="fantasia">Fantasia</label>
                            <input type="text" name="fantasia" id="fantasia" class="form-control" required>                         
                        </div>

                    </div>
                    <div class="modal-footer">
                        * Depois de excluido não tera mais como recuperar!&nbsp ->
                        <input name="idcli_delete" type="hidden" id="idcli_delete">
                        <input name="idcli_apagar" type="hidden" value="SIM">
                        <input name="tipoConfirma" type="radio" value="SIM" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-warning">Deletar</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 