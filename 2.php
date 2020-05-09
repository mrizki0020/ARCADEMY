<?php

function usernameValidity($username){
    $jml = strlen($username);
    $uppercase = preg_match('@[A-Z]@', $username);
    $angka = preg_match('@[0-9]@', $username);
    $underscore = preg_match('@[_]@', $username);
    $titik = preg_match('@[.]@', $username);

    if(!$uppercase && ($angka||  $underscore ||  $titik ) && ($jml >= 8 || $jml <= 12)){
        return true;
    }else{
        return false;
    }
}

function passwordValidity($password){
    $jml = strlen($password);
    $angka = preg_match('@[0-9]@', $password);
    $spesial_carakter = preg_match('/[^A-Za-z0-9\  ]/',$password);

    if($spesial_carakter && $angka && $jml == 9){
        return true;
    }else{
        return false;
    }
}



passwordValidity("johnsmith26");
passwordValidity("j0hn5m!th");
