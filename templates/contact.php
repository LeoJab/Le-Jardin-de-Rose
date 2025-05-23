<?php $title = "Contact" ?>

<?php ob_start() ?>

<!-- Formulaire de Contact -->
<div>
    <h2>Contact</h2>
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
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message.."></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
    </form>
</div>

<?php include('templates/partials/_question_frequente.php'); ?>

<img src="#" alt="Carte du magasin">

<?php $content = ob_get_clean() ?>

<?php require('layout.php') ?>