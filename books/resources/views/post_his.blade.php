<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/post_his.css">
  <title>Post_his</title>
</head>
<body>
<h1>投稿履歴</h1>
<?php foreach($posts as $post) : ?>
<ul>
    <li>
        <div class="example">
            <p><?php echo $post->title;?></p>   
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
<?php endforeach; ?>
    <li>
        <div class="example">
            <p>ハリーポッター</p>  
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
</ul>
<ul>
    <li>
        <div class="example">
            <p>ハリーポッター</p>   
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
    <li>
        <div class="example">
            <p>ハリーポッター</p>  
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
</ul>
<ul>
    <li>
        <div class="example">
            <p>ハリーポッター</p>   
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
    <li>
        <div class="example">
            <p>ハリーポッター</p>  
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
</ul>
<ul>
    <li>
        <div class="example">
            <p>ハリーポッター</p>   
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
    <li>
        <div class="example">
            <p>ハリーポッター</p>  
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
</ul>
<ul>
    <li>
        <div class="example">
            <p>ハリーポッター</p>   
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
    <li>
        <div class="example">
            <p>ハリーポッター</p>  
            <img src="img/IMG_1462.jpg" alt="木もれ日" >   
        </div>
    </li>
</ul>

<a href="user" class="btn">ユーザーページに戻る</a>
<a href="top" class="btn">トップページに戻る</a>

<?php //var_dump($items); ?>  
<?php
/*foreach($items as $item) {
    echo "OK";
    var_dump($item);
}*/
?>

</body>
</html>