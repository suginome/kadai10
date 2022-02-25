<?php

//1.対象のIDを取得
$id   = $_GET['id'];


//2.DB接続します
require_once('record_funcs.php');
$pdo = db_conn();

//3.削除SQLを作成
$stmt = $pdo->prepare('DELETE FROM record_db WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行


//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('record_select.php');
}

?>