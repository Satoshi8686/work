<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fav.css">
  <title>Document</title>
</head>
<body>
<h1>お気に入り投稿リスト</h1>

<h3>お気に入り</h3>
<?php foreach ($posts as $post): ?>
<?php foreach ($users as $user): ?>
<article>
<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画">
	</figure>
	<div class="text_content">
	<h4><?php echo $user->name;?></h4>
		<p class="text_date"><time datetime="2021-02-03"><?php echo $post->datetime;?></time></p>
		<h2><?php echo $post->title;?></h2>
		<p class="text_excerpt"><?php echo $post->text;?></p>
	</div>
</article>
<?php endforeach; ?>
<?php endforeach; ?>



<a href="" class="btn">ユーザー画面に戻る</a>
<a href="" class="btn">トップページに戻る</a>


</body>
</html>