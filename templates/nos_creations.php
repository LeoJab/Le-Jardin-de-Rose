<?php $title = "Nos créations"; ?>

<?php ob_start(); ?>

<div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
    <div>
        <?php foreach($categories as $categorie) { ?>
            <a href="#"><?= $categorie->nom ?></a>
        <?php } ?>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
</div>

<div class="text-center">
    <h2>Nos créations</h2>
    <div class="row justify-content-center">
        <?php foreach($produits as $produit) { ?>
            <div class="col-4">
                <img class="img-fluid" src="<?= $produit->photo; ?>" alt="Photo du produit">
                <p>
                    <?= $produit->nom; ?>
                </p>
            </div>
        <?php } ?>
    </div>
    <a href="#"><button>Voir plus</button></a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>

