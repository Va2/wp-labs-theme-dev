<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Newsletter</title>
</head>
<body>
   <div>
   <?php foreach ($mails as $mail): ?>
            <div class="postbox mt-3">
                <div class="inside">
                    <strong>client : </strong><?=$mail->email;?>
                    <form action="<?=get_admin_url() . '/?action=delete-news';?>" method="post">
                        <input type="hidden" name="id" value="<?=$mail->id;?>">
                        <input type="hidden" name="action" value="delete-news">
                        <button type="submit" class="button">supprimer</button>
                    </form>
                </div>
            </div>
            <?php endforeach;?>
   </div>
</body>
</html>