<?php
include '../../../config/db.php';
include '../../../views/layouts/header.php'; 

$req_etudiant_fiche='SELECT * FROM tb_etudiant WHERE id_etudiant = :paramid';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $req_etudiant_fiche=str_replace(":paramid", $id,$req_etudiant_fiche);
    $eleve = f_execute_query($req_etudiant_fiche);

    if (!$eleve) {
        echo "Etudiant non trouvé.";
        exit;
    } else {

    }
} else {
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo CST_BASE_URL; ?>assets/css/table.css">
    <title>Document</title>
</head>
<body>
<div class="contenu">
    <span  class="page_title">| Fiche de <?php echo $eleve[0]['nom'].' '.$eleve[0]['prenom']; ?></span>
</body>