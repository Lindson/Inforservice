<?php
/* Smarty version 3.1.33, created on 2018-10-10 23:44:56
  from 'C:\xampp\htdocs\os\view\tecnicos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe72d8126071_10823509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4ec870533ff44a63a2a248fbcbca62171245f11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\os\\view\\tecnicos.tpl',
      1 => 1539207882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbe72d8126071_10823509 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
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

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEC']->value, 'T');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['T']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['T']->value['id_tecnico'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['T']->value['nome'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['T']->value['celular'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['T']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['T']->value['especialidade'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['T']->value['dt_admissao'];?>
</td>
                        <td><span class="label label-success">Ativo</span></td>

                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>
    </div>
</div><?php }
}
