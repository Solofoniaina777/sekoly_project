<?php
include 'constante.php';

function f_execute_query($sqlcode)
{
    // Connexion à la base de données avec PDO
    
$host = CST_DB_HOST;
$dbname = CST_DB_NAME;
$user = CST_DB_USER;
$password = CST_DB_PASSWORD;
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
    $retval="";
    $stmt = $pdo->query($sqlcode);
    $retval = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $retval;
}
?>
