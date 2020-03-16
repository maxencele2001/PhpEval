<?php
function getPrix(): float
{
    require_once 'pdo.php';
    if ($nb_km> 100000){
        $prix=$nb_km/12;
        return $prix;
    }
    else{
        $prix = 15000;
        return $prix;
    }
}