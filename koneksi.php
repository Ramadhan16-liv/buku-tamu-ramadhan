<?php

$koneksi= mysqli_connect('localhost' , 'root' ,'', 'db_mramadhan');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}