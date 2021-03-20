<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/profile.css">
  <title>Document</title>
</head>
<body>
<h1>プロフィール</h1> 

<figure>
		<img src="./images/pic_thumb1.jpg" alt="サムネイル画像">
	</figure>

<form>
  <label>お名前（※必須）</label><br>
  <input type="text" name="first-name" maxlength="10" value="" placeholder="１０文字以内で入力">
</form>

<form>
  <label>ユーザーネーム（※必須）</label><br>
  <input type="text" name="first-name" maxlength="30" value="" placeholder="３０文字以内で入力">
</form>

<form>
  <label>自己紹介</label><br>
  <textarea name="message-body" placeholder="自己紹介を入力"></textarea>
</form>


<form>
  <label>好きな本（複数可）</label><br>
  <input type="text" name="first-name" maxlength="50" value="" placeholder="５０文字以内で入力">
</form>


<a href="" class="btn">完了</a>
<a href="" class="btn">キャンセル</a>

<?php
foreach($items as $item) {
    echo "OK";
    var_dump($item);
}
?>

</body>
</html>