<?php
$nama = @$_REQUEST['nama']; 
$tanggal = @$_REQUEST['tanggal']; 

if ($tanggal >= 1944 && $tanggal <= 1964) {
    $generasi ="Baby boomer"; 
    echo "$nama, berdasarkan tahun lahir anda tergolong $generasi";
} else if ($tanggal >= 1965 && $tanggal <= 1979) {
    $generasi ="Generasi X"; 
    echo "$nama, berdasarkan tahun lahir anda tergolong $generasi";
} else if ($tanggal >= 1980 && $tanggal <= 1994) {
    $generasi ="Generasi Y (Millenials)"; 
    echo "$nama, berdasarkan tahun lahir anda tergolong $generasi"; 
} else if ($tanggal >= 1995 && $tanggal <= 2015) {
    $generasi ="Generasi Z";
    echo "$nama, berdasarkan tahun lahir anda tergolong $generasi";
} else {
    echo "$nama, Anda tidak memiliki golongan";
}