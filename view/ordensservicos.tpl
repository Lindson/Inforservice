<div class="container">
    <ol class="breadcrumb">
        <li><a href="">Início</a></li>
        <li><a href="">Ordens de Serviço</a></li>
        <li class="active">Pesquisa</li>
    </ol>

    <div class="row cabecalho">
         
        <div class="col-xs-12 col-md-6">
           
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
        <div class="col-xs-12 col-md-6">
            <h1>Ordens de Serviço</h1>
        </div>
        
    </div>
    <div class="table-responsive">
        <table class="dados-os table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>OS</th>
                    <th>Data abertura</th>
                    <th>Cliente</th>
                    <th>Categoria</th>
                    <th>Solicitante</th>
                    <th>Tecnico</th>                   
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                {foreach from = $OSS item = O}
                    <tr>
                        <td>{$O.cod_os}</td>
                        <td>{$O.dt_abertura}</td>
                        <td>{$O.cliente}</td>
                        <td>{$O.tipo}</td>
                        <td>{$O.usuario}</td>
                        <td>{$O.tecnico}</td>
                        <td><span class="label label-{$O.cor}">{$O.status}</span></td>
                        <td class="text-center">

                            <a href="" data-toggle="modal" data-target="#Finalizar" 
                               data-id_os="{$O.cod_os}"
                               data-cliente="{$O.cliente}"
                               data-id_tecnico="{$O.id_tecnico}"
                               data-id_categoria="{$O.id_categoria}"
                               data-id_servico="{$O.id_servico}"
                               data-descricao="{$O.descricao}"
                               data-solucao="{$O.solucao}"
                               data-dt_conclusao="{$O.dt_conclusao}"
                               title="Finalizar"><span class="glyphicon glyphicon-ok text-success"></span>&nbsp </a>

                            <a href="" data-toggle="modal" data-target="#EditarOS" 
                               data-id_os="{$O.cod_os}"
                               data-cliente="{$O.cliente}"
                               data-id_tecnico="{$O.id_tecnico}"
                               data-id_usuario="{$O.id_usuario}"
                               data-id_servico="{$O.id_servico}"
                               data-id_prioridade="{$O.id_prioridade}"
                               data-id_categoria="{$O.id_categoria}"
                               data-descricao="{$O.descricao}"
                               data-id_status="{$O.id_status}"
                               title="EditarOS"><span class="glyphicon glyphicon-pencil text-warning"></span>&nbsp </a>

                        </td>
                    </tr>
                {/foreach}

            </tbody>
        </table>
    </div>
    <footer class="row">
        <div class="col-sm-6">
            <button class="btn btn-primary" data-toggle="modal" data-target="#NovaOS">Nova Ordem de Serviço</button>
        </div>
        <div class="col-sm-6 paginacao text-right">
            {$PAGINAS}
        </div>
    </footer>
</div>

<div class="modal fade" id="NovaOS">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" class="close">
                    <span>&times;</span>
                </button>
                <h4 class="modal-title">Nova Ordem de Serviço</h4>
            </div>
            <form name="frm_ordemservico" method="post" action="">
                <div class="modal-body">

                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        Não esqueça de prencher todos os campos!
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label for="disabledTextInput">Código da OS</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="00{$VLR['Auto_increment']}" disabled>
                        </div>
                        <div class="form-group has-success col-xs-6">
                            <label class="control-label" for="servico">Serviço</label>
                            <select id="servico" name="id_servico" class="form-control" required>
                                <option value="">Selecione...</option>
                                {foreach from =$SER  item = S}
                                    <option value="{$S.id_servico}">{$S.tipo}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label class="control-label" for="cliente">Cliente</label>
                            <select id="cliente" name="id_cliente" class="form-control selectpicker" data-live-search="true" required>
                                <option  value="" >Selecione...</option>
                                {foreach from = $CLI item = C}
                                    <option value="{$C.id_cliente}">{$C.razao}</option>
                                {/foreach}                          
                            </select>
                        </div>
                        <div class="form-group has-warning col-sm-4">
                            <label class="control-label" for="Tecnico">Técnico</label>
                            <select id="tecnico" name="id_tecnico" class="form-control" required>
                                <option value="">Selecione...</option>
                                {foreach from =$TEC  item = F}
                                    <option value="{$F.id_tecnico}">{$F.nome}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label class="control-label" for="Usuario">Usuário</label>
                            <select id="usuario" name="id_usuario" class="form-control" required>

                                <option value="">Selecione...</option>
                                <option value="1"> Thiago Santiago </option>
                                <option value="2"> Paulo jucá </option>
                                <option value="3"> Vinicius Saraiva </option>
                                <option value="4"> Ary Junior</option>
                                <option value="5"> Junior </option>
                                <option value="6"> Edimar </option>


                            </select>
                        </div>
                        <div class="form-group has-warning col-sm-3">
                            <label class="control-label" for="Prioridade">Prioridade</label>
                            <select id="prioridade" name="id_prioridade" class="form-control" required>
                                <option value="">Selecione...</option>
                                <option value="1"> Alta </option>
                                <option value="2"> Altíssima </option>
                                <option value="3"> Muito Baixa </option>
                                <option value="4"> Baixa </option>
                                <option value="5"> Média </option>

                            </select>
                        </div>
                        <div class="form-group has-warning col-sm-5">
                            <label class="control-label" for="categoria">Categoria do Serviço</label>
                            <select id="categoria" name="id_categoria" class="form-control" required>
                                <option value="">Selecione...</option>
                                {foreach from =$CAT  item = A}
                                    <option value="{$A.id_categoria}">{$A.categoria}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>        
                    <div class="row">
                        <div class="form-group has-error col-xs-12">
                            <label class="control-label" for="descricao">Problema Relatado</label>
                            <textarea id="descricao" name="descricao" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input name="id_status" type="hidden" id="id_status" value="1"></input>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="Finalizar">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="frm_ordemservico" method="post" action="">
                <div class="modal-body">
                    <div class="row">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" class="close">
                                <span>&times;</span>
                            </button>
                            <h2 class="modal-title" id="ModalTitle"></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-success col-xs-8">
                            <label for="disabledTextInput">Cliente</label>
                            <input type="text" id="cliente" class="form-control" disabled>
                        </div>
                        <div class="form-group has-success col-xs-4">
                            <label class="control-label" for="Tecnico">Técnico</label>
                            <select type="text" name="id_tecnico" id="id_tecnico" class="form-control" required>
                                <option value="">Selecionar...</option>
                                {foreach from =$TEC  item = F}
                                    <option value="{$F.id_tecnico}">{$F.nome}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-success col-xs-6">
                            <label class="control-label" for="servico">Serviço</label>
                            <select id="id_servico" name="id_servico" class="form-control" required>
                                <option value="">Selecione...</option>
                                {foreach from =$SER  item = S}
                                    <option value="{$S.id_servico}">{$S.tipo}</option>
                                {/foreach}

                            </select>
                        </div>
                        <div class="form-group has-success col-sm-6">
                            <label class="control-label" for="categoria">Categoria do Serviço</label>
                            <select id="id_categoria" name="id_categoria" class="form-control" required>
                                <option value="">Selecione...</option>
                                {foreach from =$CAT  item = A}
                                    <option value="{$A.id_categoria}">{$A.categoria}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="form-group has-warning col-xs-12">
                            <label class="control-label" for="descricao">Problema relatado</label>
                            <textarea id="descricao" name="descricao" class="form-control" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-warning col-xs-12">
                            <label class="control-label" for="solucao">Solução</label>
                            <textarea id="solucao" name="solucao" class="form-control" rows="3" required></textarea>
                          
                        </div>
                    </div>
                </div>
                <div class="modal-footer">  
                    <input name="id_status" type="hidden" id="id_status" value="2"></input>
                    <input name="id_os" type="hidden" id="id_os"></input>
                    <input name="dt_conclusao" type="hidden" id="dt_conclusao"></input>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Finalizar</button>
                </div>
            </form>
        </div>

    </div>
</div>                            
<div class="modal fade" id="EditarOS">
    <div class="modal-dialog">
        <div class="modal-content">

            <form name="frm_ordemservico" method="post" action="">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <br>
                            <h3 class="modal-title" id="ModalTitle"></h3>
                        </div>
                        <div class="form-group has-error col-xs-6">
                            <label class="control-label" for="Status">Status do Chamado</label>
                            <select name="id_status" id="id_status" class="form-control" required>
                                <option value="">Selecionar...</option>
                                <option value="1">ABERTO</option>
                                <option value="3">EM ANDAMENTO</option>
                                <option value="4">AGUARDANDO AUTORIZAÇÃO</option>
                                <option value="5">CANCELADO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-8">
                            <label for="disabledTextInput">Cliente</label>
                            <input type="text" id="cliente" class="form-control" disabled>
                        </div>
                        <div class="form-group has-success col-xs-4">
                            <label class="control-label" for="Tecnico">Técnico</label>
                            <select type="text" name="id_tecnico" id="id_tecnico" class="form-control" required>
                                <option value="">Selecionar...</option>
                                {foreach from =$TEC  item = F}
                                    <option value="{$F.id_tecnico}">{$F.nome}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group has-success col-xs-7">
                            <label class="control-label" for="servico">Serviço</label>
                            <select id="id_servico" name="id_servico" class="form-control" required>
                                <option value="">Selecione...</option>
                                {foreach from =$SER  item = S}
                                    <option value="{$S.id_servico}">{$S.tipo}</option>
                                {/foreach}

                            </select>
                        </div>
                        <div class="form-group has-success col-sm-5">
                            <label class="control-label" for="usuario">Usuário</label>
                            <select id="id_usuario" name="id_usuario" class="form-control" required>

                                <option value="">Selecione...</option>

                                <option value="1"> Thiago Santiago </option>
                                <option value="2"> Paulo jucá </option>
                                <option value="3"> Vinicius Saraiva </option>
                                <option value="4"> Ary Junior</option>
                                <option value="5"> Junior </option>
                                <option value="6"> Edimar </option>

                            </select>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="form-group has-warning col-sm-4">
                            <label class="control-label" for="Prioridade">Prioridade</label>
                            <select id="id_prioridade" name="id_prioridade" class="form-control" required>
                                <option value="">Selecione...</option>
                                {foreach from =$PRI  item = P}
                                    <option value="{$P.id_prioridade}">{$P.status}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="form-group has-warning col-sm-8">
                            <label class="control-label" for="categoria">Categoria do Serviço</label>
                            <select id="id_categoria" name="id_categoria" class="form-control" required>
                                <option value="">Selecione...</option>
                                {foreach from =$CAT  item = A}
                                    <option value="{$A.id_categoria}">{$A.categoria}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="form-group has-warning col-xs-12">
                            <label class="control-label" for="descricao">Problema relatado</label>
                            <textarea id="descricao" name="descricao" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">  
                    <input name="id_os" type="hidden" id="id_os"></input>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-warning">Alterar</button>
                </div>
            </form>
        </div>

    </div>
                           
</div> 
                          
<div class="row">

</div>
