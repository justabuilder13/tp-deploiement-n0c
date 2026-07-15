<?php
$nomEtudiant = "Justin Lachapelle-Lévesque";

$titre = "Portfolio";
$sousTitre = "Développeur web en formation - Collège de Maisonneuve";
$statut = "Disponible pour stages et projets";

$competences = [
    "PHP / MySQL",
    "JavaScript",
    "HTML / CSS",
    "Git & GitHub",
    "Déploiement (N0C, SSH)",
    "Shopify Liquid"
];

$projets = [
    [
        "nom" => "Forum PHP",
        "type" => "Application web",
        "description" => "Forum complet en PHP procédural avec MySQL : authentification, CRUD, sessions et protection des entrées."
    ],
    [
        "nom" => "Boutique DTC",
        "type" => "E-commerce",
        "description" => "Sections Shopify sur mesure : hero animé, intégration Klaviyo, pages de conversion pour une marque premium."
    ],
    [
        "nom" => "Jeux JavaScript",
        "type" => "Front-end",
        "description" => "Petits jeux et outils interactifs en JavaScript vanilla : logique DOM, événements, état et scoring."
    ]
];

$contactEmail = "justinlach@icloud.com";
$github = "https://github.com/justabuilder13";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($nomEtudiant) ?> — <?= htmlspecialchars($titre) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;700;800&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <header class="entete">
        <span class="logo">JLL<span class="curseur">_</span></span>
        <span class="statut"><span class="point"></span><?= htmlspecialchars($statut) ?></span>
    </header>

    <main class="page">

        <!-- HERO -->
        <section class="hero">
            <p class="ligne-code">$dev = <span class="valeur">"<?= htmlspecialchars($nomEtudiant) ?>"</span>;</p>
            <h1>
                Je construis des projets web,<br>
                <span class="accent">du code au déploiement.</span>
            </h1>
            <p class="hero-sous"><?= htmlspecialchars($sousTitre) ?></p>
            <div class="hero-actions">
                <a class="bouton" href="#projets">Voir les projets</a>
                <a class="bouton bouton--ligne" href="mailto:<?= htmlspecialchars($contactEmail) ?>">Me contacter</a>
            </div>
        </section>

        <!-- COMPÉTENCES -->
        <section class="section" id="competences">
            <h2 class="section-titre">// Compétences</h2>
            <ul class="grille-competences">
                <?php foreach ($competences as $competence): ?>
                    <li><?= htmlspecialchars($competence) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <!-- PROJETS -->
        <section class="section" id="projets">
            <h2 class="section-titre">// Projets</h2>
            <div class="grille-projets">
                <?php foreach ($projets as $projet): ?>
                    <article class="carte-projet">
                        <p class="carte-type"><?= htmlspecialchars($projet["type"]) ?></p>
                        <h3><?= htmlspecialchars($projet["nom"]) ?></h3>
                        <p class="carte-description"><?= htmlspecialchars($projet["description"]) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="section contact">
            <h2 class="section-titre">// Contact</h2>
            <p class="contact-texte">
                Un projet, un stage, une question&nbsp;?
                <a href="mailto:<?= htmlspecialchars($contactEmail) ?>"><?= htmlspecialchars($contactEmail) ?></a>
            </p>
            <p class="contact-texte">
                GitHub&nbsp;:
                <a href="<?= htmlspecialchars($github) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($github) ?></a>
            </p>
        </section>

    </main>

    <footer class="pied">
        <p>Déployé par <strong><?= htmlspecialchars($nomEtudiant) ?></strong> — <?= date("Y") ?></p>
        <p class="pied-note">PHP <?= PHP_VERSION ?> · Hébergé sur N0C</p>
    </footer>

</body>
</html>