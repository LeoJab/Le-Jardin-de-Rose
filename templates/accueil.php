<?php $title = "Accueil"; ?>

<?php ob_start(); ?>

<!-- Qui sommes nous ? -->
<div>
    <h2>Qui sommes nous ?</h2>
    <img src="ASSET/img/site/pexels-cottonbro-4270183.jpg" alt="Photo de présentation">
    <div>
        <p>
            Je m'appelle Élodie Martin, et depuis 12 ans, je vis et respire la passion des fleurs. Mon parcours a commencé bien avant que je ne devienne fleuriste professionnelle. 
            Enfant déjà, j'étais fascinée par la beauté des jardins, l'harmonie des couleurs et le pouvoir des fleurs à évoquer des émotions. Cette passion m'a poussée à me former dans 
            l'art floral à l'École des Arts Botaniques de Lyon, où j'ai eu la chance d'apprendre auprès des meilleurs artisans floraux.
        </p>
        <p>
            Après plusieurs années d’expérience dans différentes boutiques florales à travers la France, j’ai ouvert mon propre atelier, L'Atelier d'Élodie, en 2016 avec une mission simple: 
            créer des compositions uniques qui apportent joie, élégance et sérénité à chaque occasion.
        </p>
        <p>
            Mon style se caractérise par un mélange d’influences : des compositions modernes et épurées aux arrangements plus classiques et romantiques, toujours en accord avec les tendances 
            actuelles. Je privilégie les fleurs de saison et travaille étroitement avec des produiteurs locaux de la région Auvergne-Rhône-Alpes pour garantir fraîcheur et qualité. Chaque bouquet 
            est conçu avec soin, en tenant compte des souhaits de mes clients et de l'émotion que je veux transmettre.
        </p>
        <p>
            Que ce soit pour un mariage, un événement professionnel, ou simplement pour offrir un peu de beauté à quelqu'un de spécial, je m'engage à vous offrir des créations qui racontent une 
            histoire, celle qui est la vôtre. Merci de votre confiance, et au plaisir de composer pour vous les plus belles fleurs de vos moments précieux.
        </p>
    </div>
</div>

<!-- Nos Créations -->
<div class="text-center">
    <h2>Nos créations</h2>
    <div class="row justify-content-center">
        <?php foreach($produits as $produit) { ?>
            <div class="col-4">
                <img class="img-fluid" src="<?= $produit->photo; ?>" alt="Photo du produit">
                <p><?= $produit->nom; ?></p>
                <button>
                    <a href="index.php?action=produit&idProduit=<?= $produit->id ?>">Voir le produit</a>
                </button>
            </div>
        <?php } ?>
    </div>
    <a href="#"><button>Voir plus</button></a>
</div>

<?php include('templates/partials/_question_frequente.php'); ?>

<img src="#" alt="Carte du magasin">

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>