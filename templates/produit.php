<?php $title = $produit->nom; ?>

<?php ob_start(); ?>

<!-- Informations Produit -->
<div>
    <img src="<?= $produit->photo ?>" alt="Photo du produit">
    <div>
        <h2><?= $produit->nom ?></h2>
        <p><?= $produit->description ?></p>
        <div>
            <?php foreach($tags as $tag) { ?>
                <p><?= $tag->nom ?></p>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Formulaire de Devis -->
<div>
    <h2>Demander un devis pour ce produit</h2>
    <form action="#">
        <div class="mb-3 col-6">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
        </div>
        <div class="mb-3 col-6">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Prenom">
        </div>
        <div class="mb-3 col-6">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
        </div>
        <div class="mb-3 col-6">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Téléphone">
        </div>
        <div class="mb-3 col-12">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Intitulé de votre demande">
        </div>
        <div class="mb-3 col-12">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Instruction à transmettre ?"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
    </form>
</div>

<?php include('templates/partials/_question_frequente.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>