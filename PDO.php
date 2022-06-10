<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=GBAF;charset=utf8', 'root', 'Algerie1612062000');
}

catch (\Exception $e) {
    die('Erreur : ' . $e -> getMessage());
}
