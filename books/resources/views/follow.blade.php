<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/follow.css">
  <title>Document</title>
</head>
<body>
<h1>フォロー</h1> 


	<figure>
    <img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
    
	</figure>
  <?php foreach($users as $user) : ?>
  <p class="line2"><?php echo $user->name; ?></p>
  
  <figure>
    <img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
    
	</figure>
  <?php endforeach; ?>
  <p class="line2">satoshi_tsuzaki</p>
  
  <figure>
    <img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
    
	</figure>
  <p class="line2">satoshi_tsuzaki</p>
  
  <figure>
    <img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
    
	</figure>
  <p class="line2">satoshi_tsuzaki</p>
  
  <figure>
    <img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
    
	</figure>
  <p class="line2">satoshi_tsuzaki</p>
  

  <a href="" class="btn">ユーザーページに戻る</a>
<a href="" class="btn">トップページに戻る</a>

<?php
/*foreach($items as $item) {
    echo "OK";
    var_dump($item);
}*/
?>
</body>
</html>