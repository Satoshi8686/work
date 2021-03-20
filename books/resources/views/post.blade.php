<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/post.css">
  <title>Document</title>
</head>
<body>
 <h1>投稿</h1>

 <div><label for="bookname">本のタイトル</label></div>

<input type="text" name="yourname" placeholder="">

<div><label for="comment">本のジャンル</label></div>
<div>
<select zyanru="">
  <option value="za">雑誌</option>
  <option value="comic">コミック</option>
  <option value="bunngaku.syousetu">文学・小説</option>
  <option value="syakai.bizinesu">社会・ビジネス</option>
  <option value="syumi">趣味</option>
  <option value="zituyou.kyouiku">実用・教育</option>
  <option value="art.entame">アート・エンタメ</option>
  <option value="zisyo.zukan">辞書・図鑑</option>
  <option value="kodomo">子供</option>
</select>
</div>
<div><label for="comment">コメント</label></div>
<div>
<textarea id="comment" name="comment" placeholder="本の感想を自由に記入してください"></textarea>
</div>
<figure>
		<img src="./images/pic_thumb1.jpg" alt="本サムネイル画像">
  </figure>
  

  
  <a href="" class="btn">確認画面へ</a>
<a href="" class="btn">トップページへ戻る</a>

<?php
foreach($items as $item) {
    echo "OK";
    var_dump($item);
}
?>

</body>

</html>