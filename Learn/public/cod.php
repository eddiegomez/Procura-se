<?php

//require("conexao.php");
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "procura-se";


// Criar Conexao


$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
function parseToXML($htmlStr)
{
    $xmlStr = str_replace('<', '&lt;', $htmlStr);
    $xmlStr = str_replace('>', '&gt;', $xmlStr);
    $xmlStr = str_replace('"', '&quot;', $xmlStr);
    $xmlStr = str_replace("'", '&#39;', $xmlStr);
    $xmlStr = str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}


$resultado_markers = "SELECT * FROM localizacao";
$resultado_markers = mysqli_query($conn, $resultado_markers);

header("Content-type: text/xml");

echo '<localizacao>';

while ($row_markes = mysqli_fetch_assoc($resultado_markers)) {
    // Add to XML document node
    echo '<marker ';
    echo 'nome="' . parseToXML($row_markes['nome']) . '" ';
    echo 'adress="' . parseToXML($row_markes['adress']) . '" ';
    echo 'lat="' . $row_markes['lat'] . '" ';
    echo 'lng="' . $row_markes['lng'] . '" ';
    echo 'type="' . $row_markes['type'] . '" ';
    echo '/>';
}

echo '</localizacao>';


