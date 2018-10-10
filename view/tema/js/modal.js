       // ****** Clientes****** //
$('#VisualizarCliente').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Butão que se tornou MODAL
  var recipient_id = button.data('whatever_id') 
  var recipient_razao = button.data('whatever_razao') 
  var recipient_cnpj = button.data('whatever_cnpj') 
  var recipient_endereco = button.data('whatever_endereco') 
  var recipient_bairro = button.data('whatever_bairro') 
  var recipient_cidade = button.data('whatever_cidade') 
  var recipient_uf = button.data('whatever_uf') 
  var recipient_telefone = button.data('whatever_telefone') 
  var recipient_contrato = button.data('whatever_contrato') 
  var recipient_dtcadastro = button.data('whatever_dtcadastro') 
  var recipient_fantasia = button.data('whatever_fantasia') 

  var modal = $(this)
  modal.find('.modal-title').text('Visualizar Cliente nº '+ recipient_id)
  modal.find('#razao').text(recipient_razao)
  modal.find('#cnpj').text(recipient_cnpj)
  modal.find('#endereco').text(recipient_endereco)
  modal.find('#bairro').text(recipient_bairro)
  modal.find('#cidade').text(recipient_cidade)
  modal.find('#uf').text(recipient_uf)
  modal.find('#telefone').text(recipient_telefone)
  modal.find('#contrato').text(recipient_contrato)
  modal.find('#dtcadastro').text(recipient_dtcadastro)
  modal.find('#fantasia').text(recipient_fantasia)

}),
$('#EditarCliente').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Butão que se tornou MODAL
  var recipient_id = button.data('whatever_id') 
  var recipient_idcli = button.data('whatever_idcli') 
  var recipient_razao = button.data('whatever_razao') 
  var recipient_cnpj = button.data('whatever_cnpj') 
  var recipient_endereco = button.data('whatever_endereco') 
  var recipient_bairro = button.data('whatever_bairro') 
  var recipient_cidade = button.data('whatever_cidade') 
  var recipient_uf = button.data('whatever_uf')
  var recipient_telefone = button.data('whatever_telefone') 
  var recipient_contrato = button.data('whatever_contrato') 
  var recipient_dtcadastro = button.data('whatever_dtcadastro') 
  var recipient_fantasia = button.data('whatever_fantasia') 
  var recipient_id_usuario = button.data('whatever_id_usuario') 
  
  var modal = $(this)
  modal.find('#ModalTitle').text('Editar Cliente nº '+ recipient_id)
  modal.find('#idcli').val(recipient_idcli)
  modal.find('#razao').val(recipient_razao)
  modal.find('#cnpj').val(recipient_cnpj)
  modal.find('#endereco').val(recipient_endereco)
  modal.find('#bairro').val(recipient_bairro)
  modal.find('#cidade').val(recipient_cidade)
  modal.find('#uf').val(recipient_uf)
  modal.find('#telefone').val(recipient_telefone)
  modal.find('#contrato').val(recipient_contrato)
  modal.find('#dtcadastro').val(recipient_dtcadastro)
  modal.find('#fantasia').val(recipient_fantasia)
  modal.find('#id_usuario').val(recipient_id_usuario)

}),
$('#DeletarCliente').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Butão que se tornou MODAL
  var recipient_id = button.data('whatever_id') 
  var recipient_idcli_delete = button.data('whatever_idcli_delete') 
  var recipient_razao = button.data('whatever_razao') 
  var recipient_cnpj = button.data('whatever_cnpj') 
  var recipient_endereco = button.data('whatever_endereco') 
  var recipient_bairro = button.data('whatever_bairro') 
  var recipient_cidade = button.data('whatever_cidade') 
  var recipient_uf = button.data('whatever_uf')
  var recipient_telefone = button.data('whatever_telefone') 
  var recipient_contrato = button.data('whatever_contrato') 
  var recipient_dtcadastro = button.data('whatever_dtcadastro') 
  var recipient_fantasia = button.data('whatever_fantasia') 
  var recipient_id_usuario = button.data('whatever_id_usuario') 
  
  var modal = $(this)
  modal.find('#ModalTitle').text('Cliente nº '+ recipient_id)
  modal.find('#idcli_delete').val(recipient_idcli_delete)
  modal.find('#razao').val(recipient_razao)
  modal.find('#cnpj').val(recipient_cnpj)
  modal.find('#endereco').val(recipient_endereco)
  modal.find('#bairro').val(recipient_bairro)
  modal.find('#cidade').val(recipient_cidade)
  modal.find('#uf').val(recipient_uf)
  modal.find('#telefone').val(recipient_telefone)
  modal.find('#contrato').val(recipient_contrato)
  modal.find('#dtcadastro').val(recipient_dtcadastro)
  modal.find('#fantasia').val(recipient_fantasia)
  modal.find('#id_usuario').val(recipient_id_usuario)

}),
       // ****** CHAMADOS****** //
$('#EditarOS').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Butão que se tornou MODAL
  var recipient_id_os = button.data('id_os') 
  var recipient_cliente = button.data('cliente') 
  var recipient_id_tecnico = button.data('id_tecnico') 
  var recipient_id_servico = button.data('id_servico') 
  var recipient_id_usuario = button.data('id_usuario') 
  var recipient_id_prioridade = button.data('id_prioridade') 
  var recipient_id_categoria = button.data('id_categoria') 
  var recipient_descricao = button.data('descricao') 
  var recipient_id_status = button.data('id_status') 
  
  var modal = $(this)
  modal.find('#ModalTitle').text('Editar OS nº '+ recipient_id_os)
  modal.find('#id_os').val(recipient_id_os)
  modal.find('#cliente').val(recipient_cliente)
  modal.find('#id_tecnico').val(recipient_id_tecnico)
  modal.find('#id_servico').val(recipient_id_servico)
  modal.find('#id_usuario').val(recipient_id_usuario)
  modal.find('#id_prioridade').val(recipient_id_prioridade)
  modal.find('#id_categoria').val(recipient_id_categoria)
  modal.find('#descricao').val(recipient_descricao)
  modal.find('#id_status').val(recipient_id_status)
  

}),
$('#Finalizar').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Butão que se tornou MODAL
  var recipient_id_os = button.data('id_os')
  var recipient_cliente = button.data('cliente') 
  var recipient_id_tecnico = button.data('id_tecnico') 
  var recipient_id_categoria = button.data('id_categoria') 
  var recipient_id_servico = button.data('id_servico')
  var recipient_descricao = button.data('descricao') 
  var recipient_solucao = button.data('solucao') 
  var recipient_dt_conclusao = button.data('dt_conclusao') 
 
  
  var modal = $(this)
  modal.find('#ModalTitle').text('Finalizar Ordem de Serviço nº 0'+ recipient_id_os)
  modal.find('#id_os').val(recipient_id_os)
  modal.find('#cliente').val(recipient_cliente)
  modal.find('#id_tecnico').val(recipient_id_tecnico)
  modal.find('#id_categoria').val(recipient_id_categoria)
  modal.find('#id_servico').val(recipient_id_servico)
  modal.find('#descricao').val(recipient_descricao)
  modal.find('#solucao').val(recipient_solucao)
  modal.find('#dt_conclusao').val(recipient_dt_conclusao)
});  

   