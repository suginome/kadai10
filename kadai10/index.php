<?php include('./header.php'); ?>


<main>
  <h1>ログイン画面</h1> 
    <form name="form1" action="login_act_new.php" method="post" style="display:block">
        <label class="label"><input placeholder="ID" type="text" name="lid" /></label>
        <label class="label"><input placeholder="PW" type="password" name="lpw" /></label> 
    <input type="submit" value="ログインする" />
  
</main>

<?php include('./footer.php'); ?>


<!-- lement.style {
    width: 120px;
    height: 50px;
    background: lightskyblue;
    border-radius: 3px;
    padding: 10px;
    text-align: center;
    font-weight: bold;
    color: #444444;
    margin: 20px 0 20px auto;
    display: block;
} -->