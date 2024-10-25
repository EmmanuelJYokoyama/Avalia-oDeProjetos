<?php
require_once('libs/qrlib.php');
$idTrabalho = $_GET['idTrabalho'];
$caminhoServidor = "http://estanovale.hospedagemdesites.ws/professor/feira/";
$caminhoArquivo = $caminhoServidor."../user_actions/avaliar.php?idTrabalho=$idTrabalho";
//echo $caminhoArquivo;
QRcode::png($caminhoArquivo);

?>