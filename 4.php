<?php

function usernameValidity($data,$cari){
    echo substr_count($data,$cari);
}

echo usernameValidity("banananana","nana");
