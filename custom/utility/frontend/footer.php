<section id="contact-form">
    <div class="content mh-12">
        <div class="d-grid col-5 col-p-1 gap-5 w-100">

            <div class="col-3 col-p-1 b-r-5 f-p-3-2 o-hidden">
                <iframe class="bg bg-cover skeleton" title="Google Maps" src="https://www.google.com/maps/embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-2 col-p-1">
                <form class="w-100 d-grid col-2 gap-5 gap-p-3 r-gap-p-5">
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
                        <?=phone('Cellulare', 'phone', '', 'required')?>
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
                        <?=submit('INVIA MODULO', 'send', 'btn-primary f-end', "formUpload(this.form, '$PATH->api/frontend/form.php')")?>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<footer>
    <div class="content mh-10 mh-p-0">
        <div class="w-100 d-grid col-3 col-p-1 gap-12">

            <div>
                <img src="<?=$PATH->logoWhite?>" alt="Logo <?=$SOCIETY->name?>" class="p-r f-start w-80">
                <div class="text w-100 mt-6">
                    <b><?=$SOCIETY->legal_name?></b> <br>
                    P.Iva: <a class="tx-none"><b><?=$SOCIETY->pi?></b></a> <br>
                    C.Fiscale: <a class="tx-none"><b><?=$SOCIETY->cf?></b></a> <br>
                </div>
            </div>

            <div>
                <div class="w-100">
                    <div class="subtitle">INDIRIZZO</div>
                    <div class="text mt-1">
                        <a href="<?=$SOCIETY->gmaps?>" target="_blank" rel="noopener noreferrer" class="tx-none">
                            <?=$SOCIETY->prettyAddress?>
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <div class="w-100">
                    <div class="subtitle">CONTATTI</div>
                    <div class="text mt-1">
                        Cel. <a href="tel:<?=$SOCIETY->cel?>" class="tx-none"><?=prettyPhone($SOCIETY->cel)?></a> <br>
                        Mail. <a href="maiilto:<?=$SOCIETY->email?>" class="tx-none"><?=$SOCIETY->email?></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="text w-100 mt-10">
            <div class="w-50 w-p-100">
                <a href="<?=$PATH->site?>/legal/privacy-policy/" class="tx-none">Privacy Policy</a> - <a href="<?=$PATH->site?>/legal/cookie-policy/" class="tx-none">Cookie Policy</a> - <a href="<?=$PATH->site?>/legal/terms-conditions/" class="tx-none">Termini e Condizioni</a>
            </div>
            <div class="w-50 a-r w-p-100 mt-p-10">
                Credit By <a href="https://www.wonderimage.it/" target="_blank" rel="noopener noreferrer">Wonder Image</a>
            </div>
        </div>

    </div>
</footer>