<?php
    $localita = $_GET['localita'];
    $altitudine = $_GET['altitudine'];
    $data = $_GET['data'];
    $ora = $_GET['ora'];
    $tipologia = $_GET['tipologia'];
    $umidita = $_GET['umidita'];
    $clima = $_GET['clima'];

    echo "Luogo: ".$localita." all' altitudine: ".$altitudine;
    echo "<br>In data: ".$data." all'orario: ".$ora;
    echo "<br>Tipologia di rilazione: ".$tipologia;
    echo "<br>Umidit&agrave;: ".$umidita." || Clima: ".$clima;
?>