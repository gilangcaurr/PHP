<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'fajarsadboi@gmail.com') {
  die("Email tidak terdaftar!");
}

if ($password !== 'fajarsukamenak') {
  die("Password salah!");
}

# jika lolos alias email dan password nya benar
echo "Selamat {$email}, anda berhasil login! :)";
