<?php
include '../../../config/db.php'; 
include '../../../config/functions.php'; 
include '../../../views/layouts/header.php'; 

$req_etudiant='SELECT * FROM tb_etudiant ORDER BY id_etudiant';
$req_classe='SELECT * FROM tb_classe ORDER BY code';

$eleves = f_execute_query($req_etudiant);
$classe = f_execute_query($req_classe);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo CST_BASE_URL; ?>assets/css/table.css">
    <title>Document</title>
    <script src="<?php echo CST_BASE_URL; ?>assets/js/function.js"></script>
</head>
<body>

    <div class="contenu">
    <span  class="page_title">| Liste des étudiants</span>
    <div>
    <input class="champ_saisie" type="text" id="recherche" placeholder="Rechercher...">
    <select class="select-wrapper" id="niveau" name="niveau">
  <option value="">-- Classe --</option>
  <?php 
   echo f_select_content_value($classe,"id_classe","code");
?>
</select>
    <a class="btn-simple">Rechercher</a>
    <a href="student_fiche.php?id=0" class="btn-nouveau">Nouveau</a>
    </div>
    <table id="table_etudiant" class="table">
        <thead>
            <tr>
                <th >Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eleves as $eleve): ?>
            <tr>
                <td class="col_center"><?= htmlspecialchars($eleve['id_etudiant']) ?></td>
                <td><?= htmlspecialchars($eleve['nom']) ?></td>
                <td><?= htmlspecialchars($eleve['prenom']) ?></td>
                <td><?= htmlspecialchars($eleve['adresse']) ?></td>
                <td class="col_center">
                <a href="student_fiche.php?id=<?= $eleve['id_etudiant'] ?>" title="Éditer">
                    <img src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt="Éditer" width="20" height="20">
                </a>
                <a href="delete.php?id=1" title="Supprimer" onclick="return confirm('Supprimer cet enregistrement ?');">
                    <img src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt="Supprimer" width="20" height="20">
                </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
</body>

<script>
  setColumnWidths("table_etudiant", ["20%", "30%", "20%","20%","10%"]);
</script>
</html>