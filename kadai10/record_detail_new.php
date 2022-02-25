

<?php

// 関数化
require_once('record_funcs.php');
// DB接続ができます
$pdo = db_conn();


$id = $_GET["id"];
// SQLを準備する
$stmt = $pdo->prepare('SELECT * FROM record_db WHERE id=:id;');

// SQLga安全かチェックする
$stmt->bindValue(':id',$id,PDO::PARAM_INT);

// SQLを実行
$status = $stmt->execute();


$view = '';

if ($status === false) {
   sql_error($status);
} else {
   $result = $stmt->fetch();
}

?>


<?php include('./header.php'); ?>

<h1 class="kihon">基本情報
                  <div class=jouhou>
                        <label>開催日<br><input type="date" name="date" value="<?= $result['date']?>"></label>
                        <p>開催時間<br><input type="time" name="time" value="<?= $result['time']?>"></p>
                        <p>会議ID<br><input type="text" name="kaigi_id" value="<?= $result['kaigi_id']?>"/></p>
                     <fieldset>
                        <legend>会議詳細情報</legend>
                        <p>部門・チーム<br><input type="text" name="team" value="<?= $result['team']?>"></p>                         <p>氏名<br><input type="text" name="name" value="<?= $result['name']?>"></p>
                        <p>議題<br><textarea name="gidai"><?= $result["gidai"]?></textarea></p>
                        <p>記録先ドキュメント<br><input type="URL" name="url" value="<?= $result['url']?>"></input>
                        <!-- ここに一つ追加します -->
                        <input type='hidden' name="id" value="<?=$result["id"]?>">
                        <!-- ここに一つ追加します -->
                     </fieldset>
                  </div>
         <input type="submit" value="登録">
         <input type="button" onclick="history.back()" value="戻る">
      </h1>