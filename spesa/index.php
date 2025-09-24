<?php

    $nome = $_POST['first_name'];
    $cognome = $_POST['last_name'];
    $prodotto = $_POST['products'];
    $quantita = $_POST['products_number'];

    $prezzo = 0;
    if ($prodotto == "mela")
    {
        $prezzo = 1;
    } elseif ($prodotto == "banana")
    {
       $prezzo = 2;
    } else {
        $prezzo = 3;
    }

    $iva = 4;
    $sconto = 0.30;

    $prezzo_totale = $prezzo + ($prezzo * $iva) / 100;

    if($quantita >= 10) {
        $prezzo_totale = $prezzo_totale - $sconto;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table WIDTH="45%" BORDER="1" CELLSPACING="1" CELLPADDING="1">
        <tr> 
            <td width="50%">Nome</td>
            <td width="50%"><?php echo $nome; ?>
        <tr>
        <tr> 
            <td width="50%">Cognome</td>
            <td width="50%"><?php echo $cognome; ?>
        <tr>
        <tr> 
            <td width="50%">Quantità</td>
            <td width="50%"><?php echo $quantita; ?>
        <tr>
        <tr> 
            <td width="50%">Somma da pagare</td>
            <td width="50%"><?php echo $prezzo_totale." euro"; ?>
        <tr>
    </table>
</body>
</html>
