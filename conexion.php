<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=matricula;host=68.183.131.91';
$user = 'root';
$password = 'W1234567890d1998';
$pdo = null;
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>