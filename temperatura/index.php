<?php
    $localita = $_POST['localita'];
    $altitudine = $_POST['altitudine'];
    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $tipologia = $_POST['tipologia'];
    $umidita = $_POST['umidita'];
    $clima = $_POST['clima'];

    echo "Luogo: ".$localita." all' altitudine: ".$altitudine;
    echo "<br>In data: ".$data." all'orario: ".$ora;
    echo "<br>Tipologia di rilazione: ".$tipologia;
    echo "<br>Umidit&agrave;: ".$umidita." || Clima: ".$clima;
?>