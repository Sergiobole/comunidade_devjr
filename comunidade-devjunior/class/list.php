<?php
# Listando publicações
include dirname(__FILE__) . "/../database/db.php";
$sql = $pdo->prepare("SELECT * FROM `posts` ORDER BY created_at DESC");


?>