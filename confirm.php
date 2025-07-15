<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MAIL FORM</title>
   <link rel="stylesheet" href="/u/p223C7953/20250715/style.css">
</head>
<body>
   <div class="form-wrapper"> 

  <form method="POST" action="index.php">
    名前: 
    <?php makeConfirm('name') ?>
    <br>
    性別:
   <?php makeConfirm('gender') ?>
    <br>
    年齢:
    <?php makeConfirm('age') ?>
   <br>
    e-mail:
    <?php makeConfirm('email') ?>
    <br>
    件名:
    <?php makeConfirm('title') ?>
    <br>
    <?php makeConfirm('msg') ?>
    <br>

    <input type="hidden" name="csrf" value="<?php makeCsrf(); ?>">
    
    <input type="submit" name="back" value="もどる">
    <input type="submit" name="send" value="送信">

  </form>
  </div>
</body>
</html>
