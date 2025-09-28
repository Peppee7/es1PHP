<?php

    $nome = $_POST['first_name'];
    $cognome = $_POST['last_name'];
    $prodotto = $_POST['products'];
    $quantita = $_POST['products_number'];

    $prezzo = 0;

    if ($prodotto == "mela") {
        $prezzo = 1;
    } elseif ($prodotto == "banana") {
        $prezzo = 2;
    } else {
        $prezzo = 3;
    }

    $prezzo_totale = $prezzo * $quantita;
    
    $iva = 4;
    $sconto = 0.90;

    $iva = ($prezzo_totale * $iva) / 100;
    $prezzo_totale = $prezzo_totale + $iva;

    if ($quantita >= 10) {
        $prezzo_sconto = $prezzo_totale * $sconto;
    } else {
        $prezzo_sconto = $prezzo_totale;
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
            <td width="50%">Somma totale</td>
            <td width="50%"><?php echo $prezzo_totale." euro"; ?>
        <tr>
        <tr> 
            <td width="50%">Somma scontata</td>
            <td width="50%"><?php echo $prezzo_sconto." euro"; ?>
        <tr></tr>
    </table>
</body>
</html>
