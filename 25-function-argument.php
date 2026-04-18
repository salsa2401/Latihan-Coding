<?php

// function checkStatusKelulusan($grade, $remidial){
//     if($grade > 75 && $remidial < 75){
//         echo "anda lulus";
//     } else{
//         echo "tidak lulus";
//     }
//     //kita bisa menjalankan block code
// }

// checkStatusKelulusan(70, 72);

//function LuasPersegiPanjang($panjang, $lebar){
//    $Luas = $panjang * $lebar;
//    return $Luas;
//}


function LuasPersegiPanjang($panjang, $lebar){
    $Luas = $panjang * $lebar;
    return $Luas;
}
$panjang = 10;
$lebar = 5;
$luas = LuasPersegiPanjang($panjang, $lebar);
echo "Luas Persegi Panjang: " . $luas;