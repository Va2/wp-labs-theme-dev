<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Mail</title>
</head>
<body>
   <div>
   <?php foreach ($mails as $mail): ?>
            <div class="postbox mt-3">
                <div class="inside">
                    <strong>client : </strong><?=$mail->email;?>
                    <a href="<?php menu_page_url('mail-client');?>&action=show&id=<?=$mail->id;?>" class="btn btn-primaty">voir</a>
                </div>
            </div>
            <?php endforeach;?>
   </div>
</body>
</html>