<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/search.css">
  <title>Search</title>
</head>
<body>
<h1>検索</h1> 

<form id="form5" action="自分のサイトのURL">
<input id="sbox5"  id="s" name="s" type="text" placeholder="フリーワードを入力" />
<input id="sbtn5" type="submit" value="検索" />
</form>

<div class="flex_test-box">
    <div class="flex_test-item">
        <button>雑誌</button>
    </div>
    <div class="flex_test-item">
        <button>コミック</button>
    </div>
    <div class="flex_test-item">
        <button>文学・小説</button>
    </div>
    <div class="flex_test-item">
        <button>社会・ビジネス</button>
    </div>
    <div class="flex_test-item">
        <button>趣味</button>
    </div>
    <div class="flex_test-item">
        <button>実用・教育</button>
    </div>
    <div class="flex_test-item">
        <button>アート・エンタメ</button>
    </div>
    <div class="flex_test-item">
        <button>辞書・図鑑</button>
    </div>
    <div class="flex_test-item">
        <button>子供</button>
    </div>

</div>

<a href="top" class="btn">トップページに戻る</a>

<?php
/*foreach($items as $item) {
    echo "OK";
    var_dump($item);
}*/
?>
</body>
</html>
