<?php 
/*
    MAKDAL MAROUAN
    YOUSFI OUSSAMA
*/
// Déclaration du tableau des données
$etudiants = [
    ["nom" => "MAROUAN", "prenom" => "MAKDAL", "filiere" => "D3SI", "note" => 16],
    ["nom" => "Omari", "prenom" => "Karim", "filiere" => "SMI", "note" => 14],
    ["nom" => "YOUSFI", "prenom" => "OUSSAMA", "filiere" => "D3SI", "note" => 12],
    ["nom" => "Tazi", "prenom" => "Leila", "filiere" => "SMP", "note" => 9],
    ["nom" => "OMARI", "prenom" => "KARIM", "filiere" => "D3SI", "note" => 11]
];

// Déclaration des constantes et fonctions
define('MOY_REUSSITE', 10);

function getListeParFiliere($filiere,$etudiants) {

    $result = [];
    foreach ($etudiants as $etudiant) {
        if ($etudiant['filiere'] == $filiere) {
            $result[] = $etudiant;
        }
    }
    return $result;
}

function getMax($tab) {
    return max($tab);
}

function getMention($note) {
    if ($note >= 16) {
        return "Très Bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez Bien";
    } elseif ($note >= MOY_REUSSITE) {
        return "Passable";
    } else {
        return "Échec";
    }
}

function getMeilleureNoteParFiliere($filiere) {
    $listeEtudiants = getListeParFiliere($filiere);
    $notes = array_column($listeEtudiants, 'note');
    return getMax($notes);
}

// Calcul des valeurs à afficher
$filiere = "D3SI"; // On peut la changer par une autre filière
$langue = "FR"; // On peut la changer par une autre langue comme AR ou EN

$listeEtudiants = getListeParFiliere($filiere);
$nombreEtudiants = count($listeEtudiants);
$maxNote = getMeilleureNoteParFiliere($filiere);
$dateAffiche = date('d/m/Y');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="public/style.css"/>
    <script type="text/javascript" src="public/script.js"></script>
</head>
<body>
<div class="top">
    <img src='public/images/fpbm.jpg' class="small-image image-margin"/>
    <span class="large-text">D3SI</span><br/>
    <span class="small-text">Facult&eacute; Polydisciplinaire B&eacute;ni Mellal</span>
</div>
<h4>&nbsp;<span id="LaDate"></span></h4>
<br/><br/>
<h1>Liste des étudiants réussis de la filière <?php echo $filiere; ?></h1>
<hr/>
<b>Nombre des étudiants : <?php echo $nombreEtudiants; ?> </b><br/>
<b>Meilleure note : <?php echo $maxNote; ?></b> <br/>
<b>Date: <?php echo $dateAffiche; ?></b>
<hr/>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Note</th>
        <th>Mention</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listeEtudiants as $etudiant): ?>
    <tr>
      <td><?php echo $etudiant['nom']; ?></td>
      <td><?php echo $etudiant['prenom']; ?></td>
      <td><?php echo $etudiant['note']; ?></td>
      <td><?php echo getMention($etudiant['note']); ?></td>
      
      
    </tr>
    <?php endforeach; ?>
</table>
<br/>
<hr/>
<a href="accueil.php">Accueil</a> |
<a href="liste.php">Liste de étudiants</a> |
<a href="form.php">Ajouter un étudiant</a>
<br/>
<hr/>
<br/>
<div class="bas">&copy; copyright: D3SI 2024<br/>Facult&eacute; Polydisciplinaire B&eacute;ni Mellal </br>d3si@usms.ma
</div>
</body>
</html>
