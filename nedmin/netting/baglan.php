<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=busu;charset=utf8", 'root', '');
    //echo "veritabani baglantisi başarili";
} catch (PDOException $e) {
    echo $e->getMessage();
}