<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
if (!Login::Logado()):

    echo '<div class="alert alert-danger text-center"> Acesso negado, faça o login! <a class="btn btn-facebook" href="' . Rotas::pag_Login() . '"> Login </a></div>';
    Rotas::Redirecionar(2, Rotas::pag_Login());
else:
    $smarty = new Template();
    $clientes = new Clientes();
    $ordensservico = new Ordensservicos();
    $tecnicos = new Tecnicos();
    $prioridades = new Prioridades();
    $servicos = new Servicos();
    $categorias = new Categorias();
    $email = new EnviarEmail();
    
    if (isset($_POST['id_cliente']) && isset($_POST['id_tecnico'])):
       
        $id_servico = $_POST['id_servico'];
        $id_cliente = $_POST['id_cliente'];
        $id_tecnico = $_POST['id_tecnico'];
        $id_usuario = $_POST['id_usuario'];
        $id_prioridade = $_POST['id_prioridade'];
        $id_categoria = $_POST['id_categoria'];
        $descricao = $_POST['descricao'];
        $dt_conclusao = Sistema::DataAtualUS();
        $ordensservico->Preparar($id_cliente, $id_tecnico, $id_usuario, $id_prioridade, $id_categoria, $descricao, $id_servico, $dt_conclusao);
        $ordensservico->Inserir();
        
        
        
    elseif (isset($_POST['id_os']) && isset($_POST['id_prioridade'])):

        $id_chamado = $_POST['id_os'];
        $id_usuario = $_POST['id_usuario'];
        $id_tecnico = $_POST['id_tecnico'];
        $id_servico = $_POST['id_servico'];
        $id_prioridade = $_POST['id_prioridade'];
        $descricao = $_POST['descricao'];
        $id_categoria = $_POST['id_categoria'];
        $id_status = $_POST['id_status'];
        $ordensservico->PrepararAltera($id_chamado, $id_usuario, $id_tecnico, $id_servico, $id_prioridade, $descricao, $id_categoria, $id_status);
        $ordensservico->Altera($id_chamado);

    elseif (isset($_POST['id_os']) && isset($_POST['solucao'])):

        $id_chamado = $_POST['id_os'];
        $id_tecnico = $_POST['id_tecnico'];
        $id_servico = $_POST['id_servico'];
        $id_categoria = $_POST['id_categoria'];
        $descricao = $_POST['descricao'];
        $solucao = $_POST['solucao'];
        $id_status = $_POST['id_status'];
        $dt_conclusao = Sistema::DataAtualUS();
        $tecnico = $ordensservico->GetTecnico($id_tecnico);
       
        $destinatarios = array('lindson@hotmail.com', Config::SITE_EMAIL_ADM);
        $assunto = 'Foi finalizado um chamado nº #0'.$id_chamado.'! - InforService';
        $msg =  '<h1 style="background-color:DodgerBlue;">Chamado nº: #0'.$id_chamado.' [concluido].</h1><br> '
                . '<h3>Olá '.Config::EMAIL_NOME.',</h3> '
                . '<P>Gostariamos de informar que o chamado foi concluido, segue abaixo os dados:</P>'
                . '<p><b>Descrição do Problema: </b> '.$descricao.'</p>'
                . '<p><b>Solução do Problema: </b> '.$solucao.'</p>'
                . '<p><b>Tecnico responsável: </b> '.$tecnico.'</p><br>'
                . '<p>Ficamos a dispor de qualquer esclarecimento, obrigado!</p>'
                . '<div style="text-size-adjust: none !important; -ms-text-size-adjust: none !important; -webkit-text-size-adjust: none !important;">'
                . '<p style="font-family: Helvetica,Arial,sans-serif; font-size: 10px; line-height: 12px; margin-bottom: 10px;">'
                . '<a style="text-decoration: none;" href="https://htmlsig.com/t/000001CQH88E" class="clink logo-container">'
                . '<img src="https://htmlsigs.s3.amazonaws.com/logos/files/000/840/672/landscape/Logo.png" alt="InforService" class="sig-logo" width="93" height="80" border="0"></a></p>'
                . '<p style="font-family: Helvetica,Arial,sans-serif; font-size: 10px; line-height: 12px; color: rgb(33, 33, 33); margin-bottom: 10px;"><span style="font-weight: bold; color: rgb(33, 33, 33); display: inline;" class="txt signature_name-target sig-hide">Lindson Amaro Lemos</span>'
                . '<span class="title-sep sep" style="display: inline;">/</span> <span style="color: rgb(33, 33, 33); display: inline;" class="txt signature_jobtitle-target sig-hide">CEO</span>'
                . '<span class="email-sep break" style="display: inline;"><br></span>'
                . '<a class="link email signature_email-target sig-hide" href="mailto:lindson@inforservice-ce.com.br" style="color: rgb(71, 124, 204); text-decoration: none; display: inline;">lindson@inforservice-ce.com.br</a><span class="signature_email-sep sep" style="display: inline;"> / </span><span style="color: rgb(33, 33, 33); display: inline;" class="txt signature_mobilephone-target sig-hide">(85)98941-4495</span></p>'
                . '<p class="company-info" style="font-family: Helvetica,Arial,sans-serif; font-size: 10px; line-height: 12px; margin-bottom: 10px;">'
                . '<span style="font-weight: bold; color: rgb(33, 33, 33); display: inline;" class="txt signature_companyname-target sig-hide">InforService</span>'
                . '<span class="company-sep break" style="display: inline;"><br></span>'
                . '<span style="color: rgb(33, 33, 33); display: inline;" class="txt signature_officephone-target sig-hide">(85)3034-3355</span>'
                . '<span style="color: #212121;" class="txt signature_fax-target sig-hide"></span>'
                . '<span class="address-sep break" style="display: inline;"><br></span> <span style="color: rgb(33, 33, 33); display: inline;" class="txt signature_address-target sig-hide">Av. Castelo de Castro, 142</span>'
                . '<span class="address2-sep break" style="display: inline;"><br></span> <span style="color: rgb(33, 33, 33); display: inline;" class="txt signature_address2-target sig-hide">Jangurussu - CEP:60866-680</span>'
                . '<span class="website-sep break" style="display: inline;"><br></span>'
                . '<a class="link signature_website-target sig-hide" href="https://inforservice-ce.com.br" style="color: rgb(71, 124, 204); text-decoration: none; display: inline;">https://inforservice-ce.com.br</a></p>'
                . '<p class="social-list" style="font-size: 0px; line-height: 0; font-family: Helvetica,Arial,sans-serif;">'
                . '<a style="text-decoration: none; display: inline;" class="social signature_twitter-target sig-hide" href="https://htmlsig.com/t/000001CR7F6C">'
                . '<img style="margin-bottom:2px; border:none; display:inline;" data-filename="twitter.png" src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png" alt="Twitter" width="16" height="16"></a>'
                . '<span style="white-space: nowrap; display: inline;" class="signature_twitter-sep social-sep">'
                . '<img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>'
                . '<a style="text-decoration: none; display: inline;" class="social signature_facebook-target sig-hide" href="https://htmlsig.com/t/000001CHVF84">'
                . '<img style="margin-bottom:2px; border:none; display:inline;" data-filename="facebook.png" src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png" alt="Facebook" width="16" height="16"></a>'
                . '<span style="white-space: nowrap; display: inline;" class="signature_facebook-sep social-sep">'
                . '<img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>'
                . '<a style="text-decoration: none; display: inline;" class="social signature_linkedin-target sig-hide" href="https://htmlsig.com/t/000001CHE1VM">'
                . '<img style="margin-bottom:2px; border:none; display:inline;" data-filename="linkedin.png" src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png" alt="LinkedIn" width="16" height="16"></a>'
                . '<span style="white-space: nowrap; display: inline;" class="signature_linkedin-sep social-sep">'
                . '<img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>'
                . '<a style="text-decoration: none; display: inline;" class="social signature_instagram-target sig-hide" href="https://htmlsig.com/t/000001CH0NRT">'
                . '<img style="margin-bottom:2px; border:none; display:inline;" data-filename="instagram.png" src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png" alt="Instagram" width="16" height="16"></a>'
                . '<span style="white-space: nowrap; display: inline;" class="signature_instagram-sep social-sep">'
                . '<img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>'
                . '<a style="text-decoration: none; display: inline;" class="social signature_skype-target sig-hide" href="https://htmlsig.com/t/000001CMCJZG">'
                . '<img style="margin-bottom:2px; border:none; display:inline;" data-filename="skype.png" src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png" alt="Skype" width="16" height="16"></a>'
                . '<span style="white-space: nowrap; display: inline;" class="signature_skype-sep social-sep">'
                . '<img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>'
                . '<a style="text-decoration: none; display: inline;" class="social signature_youtube-target sig-hide" href="https://htmlsig.com/t/000001CK0TH0">'
                . '<img style="margin-bottom:2px; border:none; display:inline;" data-filename="youtube.png" src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png" alt="Youtube" width="16" height="16"></a>'
                . '<span style="white-space: nowrap; display: inline;" class="signature_youtube-sep social-sep">'
                . '<img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2"></span>';
    
                
        $email->Enviar($assunto, $msg, $destinatarios);
        
        $ordensservico->PrepararFinaliza($id_chamado, $id_tecnico, $id_servico, $id_categoria, $descricao, $solucao, $id_status);
        $ordensservico->Finaliza($id_chamado);
        
    endif;
    
    $clientes->GetTodosClientes();
    $ordensservico->GetOrdensServicos();
    $tecnicos->GetTecnicos(); 
    $prioridades->GetPrioridades();
    $servicos->GetServicos();
    $categorias->GetCategoria();

    $smarty->assign('PRI', $prioridades->GetItens()); //P
    $smarty->assign('OSS', $ordensservico->GetItens()); //O
    $smarty->assign('CLI', $clientes->GetItens()); //C
    $smarty->assign('TEC', $tecnicos->GetItens());  //F
    $smarty->assign('PAGINAS', $ordensservico->ShowPaginacao());  //
    $smarty->assign('VLR', $ordensservico->GetRegistro()); //V
    $smarty->assign('SER', $servicos->GetItens());  //S
    $smarty->assign('CAT', $categorias->GetItens());  //A
    
//    echo '<pre>';
//    var_dump($ordensservico->GetItens());
//    echo '</pre>';
    $smarty->display('ordensservicos.tpl');

endif;