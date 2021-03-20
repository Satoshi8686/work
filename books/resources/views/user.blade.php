
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/user.css">
  <script src="public/js/jquery-3.5.1.min .js"></script>
  <title>Document</title>
</head>
<body>
<h1>ユーザーページ</h1>  

<label for="avatar">Choose a profile picture:</label>



<form enctype="multipart/form-data" method="post">
<input type="file" name="userfile" accept="image/*">
</form>



<p class="line2">プロフィール</p>
<p class="line2">お気に入り投稿リスト</p>
<p class="line2">フォローリスト</p>
<p class="line2">フォロワーリスト</p>
<p class="line2">投稿履歴</p>

<?php
foreach($items as $item) {
    echo "OK";
    var_dump($item);
}
?>

</body>
</html>