<?php

function rupiah($angka)
{
    return "Rp. " . number_format($angka, 0, ',', '.');
}

function tanggal($timestamp, $date_only = true, $time_only = false)
{
    if($timestamp == NULL || 
        $timestamp == '0000-00-00 00:00:00' || 
        $timestamp == '0000-00-00' || 
        $timestamp == '-') {
        return '-';
    }

    $date = explode(' ', $timestamp)[0];
    $clock = explode(' ', $timestamp)[1];

    if($time_only){
        return $clock;
    }
    
    switch (explode('-', $date)[1]) {
        case '01': $month = 'Januari'; break;
        case '02': $month = 'Februari'; break;
        case '03': $month = 'Maret'; break;
        case '04': $month = 'April'; break;
        case '05': $month = 'Mei'; break;
        case '06': $month = 'Juni'; break;
        case '07': $month = 'Juli'; break;
        case '08': $month = 'Agustus'; break;
        case '09': $month = 'September'; break;
        case '10': $month = 'Oktober'; break;
        case '11': $month = 'November'; break;
        case '12': $month = 'Desember'; break;
        default: $month = '00'; break;
    }

    if ($date_only) {
        return explode('-', $date)[2] . ' ' . $month . ' ' . explode('-', $date)[0];
    }

    return explode('-', $date)[2] . ' ' . $month . ' ' . explode('-', $date)[0] . ' | ' . $clock;
}