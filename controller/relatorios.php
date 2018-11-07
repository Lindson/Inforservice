<?php
/**
 * Sistema de Ordem de Serviço
 *
 * @author inforservice-ce.com.br
 */
$smarty = new Template();
$relatorios = new Relatorios();
$mpdf = new \Mpdf\Mpdf();
$relatorios->GetChamados();
$listar = $relatorios->GetItens();

    $html = '<style type="text/css">@page { sheet-size: A4-L; } .tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}.tg td{font-family:Arial, sans-serif;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}.tg .tg-hmp3{background-color:#D2E4FC;text-align:left;vertical-align:top}.tg .tg-baqh{text-align:center;vertical-align:top}.tg .tg-mb3i{background-color:#D2E4FC;text-align:right;vertical-align:top}.tg .tg-lqy6{text-align:right;vertical-align:top}.tg .tg-0lax{text-align:left;vertical-align:top}</style>';
    $html .= '<h2>Relatorio InforService - 2018</h2>';
    $html .= '<table class="tg" border=1>';
    $html .= '<thead>';
    $html .= '<tr class="tg-baqh" colspan="6">';
    $html .= '<th>ID #</th>';
    $html .= '<th>DATA</th>';
    $html .= '<th>CLIENTE</th>';
    $html .= '<th>PROBLEMA</th>';
    $html .= '<th>SOLUÇÃO</th>';
    $html .= '<th>TECNICO</th> ';
    $html .= '<th>TIPO</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
foreach ($listar as $liste)  :    

$html .= '<tr><td >'.$liste['cod_os'].'</td>';
$html .= '<td>'.$liste['dt_abertura'].'</td>';
$html .= '<td>'.$liste['cliente'] . '</td>';
$html .= '<td>'.$liste['descricao'] . '</td>';
$html .= '<td>'.$liste['solucao'] . '</td>';
$html .= '<td>'.$liste['tecnico'] . '</td>';
$html .= '<td>'.$liste['tipo'] . '</td></tr>';
endforeach; 

$html .= '</tbody>';
$html .= '</table>';
$mpdf->WriteHTML($html);
$mpdf->SetDisplayMode('fullpage');
$mpdf->setFooter('{PAGENO}');


$mpdf->Output('','I');

//var_dump($html);
$smarty->display('relatorios.tpl');

