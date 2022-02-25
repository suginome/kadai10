<!-- <?php

// function h($s){
//   return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
// }

// session_start();
// //ログイン済みの場合
// if (isset($_SESSION['EMAIL'])) {
//   echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん<br>";
//   echo "<a href='/logout.php'>ログアウトはこちら。</a>";
//   exit;
// }

?> -->

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
  <title>スギノメモ Login</title>
</head>
<body>
<header></header>
<main>
  <h1>ログイン画面</h1> 
    <form name="form1" action="login_act.php" method="post" style="display:block">
        <label class="label"><input placeholder="ID" type="text" name="lid" /></label>
        <label class="label"><input placeholder="PW" type="password" name="lpw" /></label> 
    <input type="submit" value="ログインする" />
  
</main>
