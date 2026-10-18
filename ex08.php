
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
</head>
<body>
    <h1>Fiche étudiant</h1>

    <?php
    $nom = "chrarby";
    $prenom = "kossay";
    $filiere = "Informatique Appliquée";
    $annee = "2026/2027";
    $age = 22;
    ?>

    <ul>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Prénom : <?php echo $prenom; ?></li>
        <li>Filière : <?php echo $filiere; ?></li>
        <li>Année universitaire : <?php echo $annee; ?></li>
    </ul>

    <p>
        Je m'appelle <?php echo $prenom . " " . $nom; ?>,
        j'ai <?php echo $age; ?> ans et je suis étudiant
        en <?php echo $filiere; ?> pour l'année
        <?php echo $annee; ?>.
    </p>
</body>
</html>
