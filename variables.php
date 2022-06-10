<?php

include_once('PDO.php');

$accountsBDD = $db -> prepare('SELECT * FROM accounts');
$accountsBDD -> execute();
$accounts = $accountsBDD -> fetchAll();

$acteursBDD = $db -> prepare('SELECT * FROM acteurs');
$acteursBDD -> execute();
$acteurs = $acteursBDD -> fetchAll();

$postsBDD = $db -> prepare('SELECT * FROM posts');
$postsBDD -> execute();
$posts = $postsBDD -> fetchAll();

$votesBDD = $db -> prepare('SELECT * FROM votes');
$votesBDD -> execute();
$votes = $votesBDD -> fetchAll();