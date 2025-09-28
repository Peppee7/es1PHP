<?php

    $team1 = $_POST['first_name'];
    $team2 = $_POST['second_name'];

    $team1_v = $_POST['v1_number'];
    $team1_s = $_POST['s1_number'];
    $team1_p = $_POST['p1_number'];

    $team2_v = $_POST['v2_number'];
    $team2_s = $_POST['s2_number'];
    $team2_p = $_POST['p2_number'];

    $pts_team1 = ($team1_v * 3) + ($team1_p * 1);
    $pts_team2 = ($team2_v * 3) + ($team2_p * 1);

    if ($pts_team1 == $pts_team2) {
        if ($team1_v == $team2_v) {
            if ($team1_s < $team2_s) {
                $w_team = $team1;
                $d_team = $team2; 
            } else {
                $w_team = $team2;
                $d_team = $team1;
            }
        } elseif ($team1_v > $team2_v) {
            $w_team = $team1;
            $d_team = $team2;
        } else {
            $w_team = $team2;
            $d_team = $team1;
        }
    } elseif ($pts_team1 > $pts_team2) {
        $w_team = $team1;
        $d_team = $team2;
    } else {
        $w_team = $team2;
        $d_team = $team1;
    }

    if ($team1 == $w_team) {
        $w_v = $team1_v;
        $w_s = $team1_s;
        $w_p = $team1_p;

        $d_v = $team2_v;
        $d_s = $team2_s;
        $d_p = $team2_p;

        $w_pts = $pts_team1;
        $d_pts = $pts_team2;
        
    } else {
        $w_v = $team2_v;
        $w_s = $team2_s;
        $w_p = $team2_p;

        $d_v = $team1_v;
        $d_s = $team1_s;
        $d_p = $team1_p;
        
        $w_pts = $pts_team2;
        $d_pts = $pts_team1;
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
            <td width="50%"><strong>PRIMO POSTO</strong></td>
            <td width="50%"><?php echo $w_team; ?>
        <tr>
        <tr> 
            <td width="30%">Vittorie:</td>
            <td width="30%"><?php echo $w_v; ?>
        <tr>
        <tr> 
            <td width="30%">Sconfitte:</td>
            <td width="30%"><?php echo $w_s; ?>
        <tr>
        <tr> 
            <td width="30%">Pareggi:</td>
            <td width="30%"><?php echo $w_p; ?>
        <tr>
        <tr> 
            <td width="40%">Punti:</td>
            <td width="40%"><?php echo $w_pts; ?>
        <tr>
        <tr> 
            <td width="50%"><strong>SECONDO POSTO</strong></td>
            <td width="50%"><?php echo $d_team; ?>
        <tr>
        <tr> 
            <td width="30%">Vittorie:</td>
            <td width="30%"><?php echo $d_v; ?>
        <tr>
        <tr> 
            <td width="30%">Sconfitte:</td>
            <td width="30%"><?php echo $d_s; ?>
        <tr>
        <tr> 
            <td width="30%">Pareggi:</td>
            <td width="30%"><?php echo $d_p; ?>
        <tr>
        <tr> 
            <td width="40%">Punti:</td>
            <td width="40%"><?php echo $d_pts; ?>
        <tr></tr>
        
    </table>
</body>
</html>