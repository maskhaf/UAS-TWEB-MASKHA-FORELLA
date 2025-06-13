<?php 

use Codeigniter\Codeigniter;

function mutu($nilai) {
    switch($nilai) {
        case '0' : $mutu = "E"; break;
        case '1' : $mutu = "D"; break;
        case '2' : $mutu = "C"; break;
        case '3' : $mutu = "B"; break;
        case '4' : $mutu = "A"; break;
        default: $mutu = "?";
    }
    return $mutu;
}

function status($status) {
    if($status == '1') {
        return "Aktif";
    }
    else {
        return "Nonaktif";
    }
}

function kelulusan($ipk) {
    if($ipk >= 3.51) {
        return "Dengaan Pujian";
    }
    elseif($ipk >= 2.75) {
        return "Sangat Memuaskan";
    }
    else {
        return "Memuaskan";
    }
}

?>