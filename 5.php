<?php
function createTriangle(int $awal, int $akhir)
{
    for ($i = $awal; $i <= $akhir; $i = $i + $awal) {
        for ($j = $akhir - 1; $j >= $i; $j = $j - $awal) {
            echo " ";
        }

        for ($k = $awal; $k <= $i; $k = $k + $awal) {
            echo $k;
        }
        echo "\n";
    }
}

createTriangle(2, 10);
