<?php

session_start();
$name = $_SESSION['name'];
$lid = $_SESSION['lid'];
$lpw = $_SESSION['lpw'];
$kanri_flg = $_SESSION['kanri_flg'];
$life_flg = $_SESSION['life_flg'];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <link href="css/record.css" rel="stylesheet">
  <link href="css/eset.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta charset="utf-8">
  <title>スギノメモトップページ</title>
</head>
<body>
<header>
<?= $_SESSION['name'].'さん'?>

<div>
  <p>予約済みの会議IDで行う</p>
    <form name="kaigi_id" action="record_detail_new.php" method="post" style="display:block">
        <label class="label">id<input type="text" name="kid" /></label> 
    <input type="submit" value="開く" />
  

</div>


<div>
    <button type="button" class="sinki_touroku" onclick="location.href='./record_index.php'">
    新規会議IDで行う
    </button>
  </div>




</body>
