<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/top.css">
  <title>Top</title>
</head>
<body>
<h1>カワウソ文庫
<li id="header_tel">
		<span class="number">℡ 0120-00-0000</span>
</li>
</h1>

<h2>a</h2>

<p><img src="img/top_img.jpg" alt="本棚" class="example1"> </p>

	
	
<ul id="menubar">
<li class="template"><a href="sea"><span class="title"></span><span class="sub-title"></span>
検索<br></a>
</li>

<li class="cms"><a href="post"><span class="title"></span><span class="sub-title"></span>
投稿</a>
</li>

<li class="others"><a href="user"><span class="title"></span>
ﾕｰｻﾞｰ</a>
</li>
</ul>

<?php foreach ($posts as $post): ?>
<?php foreach ($users as $user): ?>
<div class="cb">

	<figure>
		<img src="./images/pic_thumb1.jpg" alt="サムネイル画像">
  </figure>
  
</div>


<ul class="col3">
  <li></li>
  <li><?php echo $user->name;?></li>
  <li><?php echo $post->title;?></li>
</ul>

<hr>

  <p><img src="img/cafe.png" alt="cafe" class="example2"> </p>

<hr>
  

<ul class="col3">
  <li><?php echo $post->datetime;?></li>
  <li><?php echo $post->text;?></li>
  <li></li>
</ul>
<?php endforeach; ?>
<?php endforeach; ?>
<div class="cb">

	<figure>
		<img src="./images/pic_thumb1.jpg" alt="サムネイル画像">
  </figure>
  
</div>


<ul class="col3">
  <li></li>
  <li>ユーザー</li>
  <li>本タイトル</li>
</ul>

<hr>

  <p><img src="img/cafe.png" alt="cafe" class="example2"> </p>

<hr>
  

<ul class="col3">
  <li>更新日時</li>
  <li>コメントする</li>
  <li></li>
</ul>

<div class="cb">

	



</body>
</html>