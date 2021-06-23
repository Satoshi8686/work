<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/search_2.css">
  <title>Search_2</title>
</head>
<body>
<h1>検索一覧</h1> 

<h3>ジャンル - 全て</h3>
<?php foreach($books as $book) : ?>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
		<p><?php echo $book->writer;?></p>
		<h2><a href="#"><?php echo $book->name;?></a></h2>
		<p class="text_excerpt"><?php echo $book->text;?></p>
	</div>
</article>
<?php endforeach; ?>
<article>
	<figure>
		<img src="./images/pic_thumb2.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>
<article>
	<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
	</figure>
	<div class="text_content">
	<p class="text_date"><time datetime="2021-02-03">2021年2月3日</time></p>
		<h2><a href="#">タイトル</a></h2>
		<p class="text_excerpt">コメント</p>
	</div>
</article>

<a href="sea" class="btn">ジャンル別に戻る</a>
<a href="top" class="btn">トップページに戻る</a>

<?php


?>
</body>
</html>