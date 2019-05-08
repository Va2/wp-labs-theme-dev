<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="wrap">
    <!-- nous utilisons la fonction get_admin_page_title() pour récupérer le titre de la page admin que l'on a défini lors de l'enregistrement -->
    <h1>Show : </h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="postbox">
                <div class="inside">
                    <div>
                        <strong>E-mail: </strong> <?=$mail->email;?>
                    </div>
                    <div>
                        <strong>Nom: </strong> <?=$mail->lastname;?>
                    </div>
                    <div>
                        <strong>Sujet: </strong> <?=$mail->lsubject;?>
                    </div>
                    <div>
                        <strong>Message: </strong> <br> <?=$mail->content;?>
                    </div>
                </div>
            </div>
            <a href="<?php menu_page_url('mail-client');?>" class="button button-primary my-3">retour</a>
        </div>
    </div>
</div>

</body>
</html>