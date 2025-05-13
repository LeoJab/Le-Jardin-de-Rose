<?php $title = "Contact" ?>

<?php ob_start() ?>

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

<!-- Questions Fréquentes -->
<div>
    <?php foreach($questionsFrequentes as $questionFrequente) { ?>
        <div>
            <div>
                <h3><?= $questionFrequente->question ?></h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
            </div>
            <div>
                <p><?= $questionFrequente->reponse ?></p>
            </div>
        </div>
    <?php } ?>
</div>

<img src="#" alt="Carte du magasin">

<?php $content = ob_get_clean() ?>

<?php require('layout.php') ?>