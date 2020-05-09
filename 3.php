<?php

function count_vowels($inputan){
    $data = str_split(strtolower($inputan));
    $acuan = ['a','i','u','e','o'];
    $temukan = array_intersect($acuan,$data);
    $data = array_count_values($data);
    $hasil=0;
    foreach ($temukan as $item) {
        $hasil = $hasil + $data[$item];
    }

    return $hasil;
}

echo count_vowels("Programmer");
