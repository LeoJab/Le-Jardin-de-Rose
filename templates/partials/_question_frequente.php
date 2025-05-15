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