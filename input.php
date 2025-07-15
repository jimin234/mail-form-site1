<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>MAIL FORM</title>
 <link rel="stylesheet" href="/u/p223C7953/20250715/style.css">
</head>
<body>
  <form method="POST" action="index.php">
    名前:<input type="text" name="name" required value="<?php makeBackform('name'); ?>"><br>
    性別: 
<select name="gender">
  <option value="男性" <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] === '男性') echo 'selected'; ?>>男性</option>
  <option value="女性" <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] === '女性') echo 'selected'; ?>>女性</option>
  <option value="その他" <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] === 'その他') echo 'selected'; ?>>その他</option>
</select>
<br>
   年齢:<input type="number" name="age" value="<?php makeBackform('age'); ?>"><br>
    e-mail:<input type="email" name="email" required value="<?php makeBackform('email'); ?>"><br>
    件名:<input type="text" name="title" required value="<?php makeBackform('title'); ?>"><br>
  

   
    <textarea name="msg" required><?php makeBackform('msg'); ?></textarea>
   <br>

   <input type="submit" name="confirm" value="確認画面へ">
 </form>
</body>
</html>

