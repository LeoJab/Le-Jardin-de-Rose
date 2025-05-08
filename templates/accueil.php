<?php $title = "Accueil"; ?>

<?php ob_start(); ?>

<div id="nosCreations">
    <h2>Nos créations</h2>
    <div id="produits">
        <div class="produit">
            <?php foreach($products as $product) { ?>
                <img src="<?= $product->picture; ?>" alt="Photo du produit">
                <p>
                    <?= $product->name; ?>
                </p>
            <?php } ?>
        </div>
    </div>
    <a href="#"><button>Voir plus</button></a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>