<?php

    $FRONTEND = true;
    $PRIVATE = false;
    $PERMIT = [];

    $ROOT = $_SERVER['DOCUMENT_ROOT'];
    require_once $ROOT."/vendor/wonder-image/app/wonder-image.php";

    $NAME = (object) [];
    $NAME->table = 'form';
    $NAME->folder = 'form';

    if ($_POST['post']) { 

        # Sanifico i valori
            $VALUES = formToArray($NAME->table, $_POST, $TABLE->FORM);
        
        # Allegati 
            $ATTACHMENT = [];
            
            if (isset($_FILES) && !empty($_FILES)) {
                foreach ($_FILES as $key => $value) {

                    $VALUES[$key] = uploadFiles($value, $TABLE->FORM[$key]['input']['format'], "$PATH->rUpload/$NAME->folder/");
                    
                    foreach (json_decode($VALUES[$key]) as $key => $file) {
                        array_push($ATTACHMENT, "$PATH->rUpload/$NAME->folder/$file");
                    }

                }
            }

        # Inserisco la richiesta
            $SQL = sqlInsert('form', $VALUES);
            $REQUEST_ID = $SQL->insert_id;

        # Invio l'email
            if (isset($VALUES['email']) && !empty($VALUES['email'])) {

                $BODY_SOCIETY = "Ecco i dettagli:<br>";
                $BODY_SOCIETY .= "Nome: <b>{$VALUES['name']} {$VALUES['surname']}</b><br>";
                $BODY_SOCIETY .= "Email: <b>{$VALUES['email']}</b><br>";
                $BODY_SOCIETY .= "Cellulare: <b>{$VALUES['phone']}</b><br>";
                $BODY_SOCIETY .= "Dettagli: <br>{$VALUES['request']}";
                $BODY_SOCIETY .= "<br><br><br><a href='$PATH->backend/form/view.php?id=$REQUEST_ID'>Clicca qui</a> per vedere la richiesta.";
                $BODY_SOCIETY .= "<br><br><br>Link invio richiesta:<br><a href='{$VALUES['request_url']}'>{$VALUES['request_url']}</a>.";
                
                $BODY_CLIENT = "Buongiorno {$VALUES['name']}<br>La tua richiesta a $SOCIETY->name è stata inviata correttamente!";

                sendMail($SOCIETY->email, $SOCIETY->email, "Nuovo contatto dal sito", $BODY_SOCIETY, $ATTACHMENT);
                sendMail($SOCIETY->email, $VALUES['email'], "Richiesta inviata", $BODY_CLIENT);

            }
        
        #

    }