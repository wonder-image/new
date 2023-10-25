<section id="contact-form">
    <div class="content mh-12">
        <div class="d-grid col-5 col-p-1 gap-5 w-100">

            <div class="col-3 col-p-1 b-r-5 f-p-3-2 o-hidden">
                <iframe class="bg bg-cover" title="Google Maps" src="https://www.google.com/maps/embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-2 col-p-1">
                <form class="w-100 d-grid col-2 gap-5">
                    <div class="col-2">
                        <div class="subtitle a-c">
                            Hai bisogno di maggiori informazioni?
                        </div>
                        <div class="text mt-3 a-c">
                            Compila il form
                        </div>
                    </div>
                    <?=text('Nome', 'name', '', 'required')?>
                    <?=text('Cognome', 'surname', '', 'required')?>
                    <div class="col-2">
                        <?=number('Cellulare', 'phone', '', 'required')?>
                    </div>
                    <div class="col-2">
                        <?=text('Email', 'email', '', 'required')?>
                    </div>
                    <div class="col-2">
                        <?=textarea('Di cosa hai bisogno?', 'request', '', 'required')?>
                    </div>
                    <div class="col-2">
                        <?=checkbox('', 'privacy', ["true" => ["label" => "Accetto la <a href='$PATH->site/legal/privacy-policy/' target='_blank' rel='noopener noreferrer'>Politica sulla privacy</a> e i <a href='$PATH->site/legal/terms-conditions/' target='_blank' rel='noopener noreferrer'>Termini e Condizioni</a>", "attribute" => "required"]], 'checkbox', '');?>
                    </div>
                    <div class="col-2">
                        <?=submit('INVIA MODULO', 'send', 'btn-primary f-end', "sendForm(this, '$PATH->api/frontend/form.php')")?>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<footer class="mh-12">
    <div class="content">
        <div class="w-100 d-grid col-3 col-p-1 gap-12">
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="text">INDIRIZZO</div>
                <div class="subtitle mt-1">
                    <a href="<?=$SOCIETY->gmaps?>" target="_blank" rel="noopener noreferrer">
                        <?=$SOCIETY->prettyAddress?>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="text">CONTATTI</div>
                <div class="subtitle mt-1">
                    Cel. <a href="tel:<?=$SOCIETY->cel?>"><?=prettyPhone($SOCIETY->cel)?></a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="text">ORARI</div>
                <div class="subtitle mt-1">
                    <?=$SOCIETY->prettyTimeGroup?>
                </div>
            </div>
        </div>
        <div class="text w-100 mt-12 a-c">
            <?=$SOCIETY->prettyLegal?> <br>
            Credit By <a href="https://www.wonderimage.it/" target="_blank" rel="noopener noreferrer">Wonder Image</a>
        </div>
    </div>
</footer>