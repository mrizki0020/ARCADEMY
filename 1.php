<?php

function biodata(string $nama, int $umur)
{
    $biodata =(object) array();
    $biodata->name = $nama;
    $biodata->age = $umur;
    $biodata->address = "Jl. Len Pipa Desa Aluelim, Kota Lhokseumawe, Aceh";
    $biodata->hobbies = ["NONTON","MAKAN","NGODING"];
    $biodata->is_married = FALSE;
    $biodata->list_school = (object) array("name"=>"POLITEKNIK NEGERI LHOKSEUMAWE", "year_in" => "2016" , "year_out" => "2020", "major" => "TEKNIK INFORMATIKA");
    $biodata->skills = (object) array("skill_name" => "programming", "level" => "beginner");
    $biodata->interest_in_coding = TRUE;
    
    $biodata = json_encode($biodata);

    return $biodata;
}

biodata("Muhammad Rizki", 4);
