<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
    <header>
    <a href="http://localhost/4eachblog/index.html?#" ><img  src="4eachblog_logo.jpg" ></a>
    </header>

    <form action="mypage.php" method="post">
        <div class="form_contents">
            <div class="error_message">メールアドレスまたはパスワードが間違っています</div>
            <div class="mail">
                <label>メールアドレス</label><br>
                <input type="text" class="formbox" size="40" name="mail">
            </div>
            <div class="password">
                <label>パスワード</label><br>
                <input type="password" class="formbox" size="40" name="password">
            </div>
            <div class="login_chack">
                <label><input type="checkbox" class="formbox" size="40" name="login_keep">ログインを保持する</label>
            </div>
            <div class="loginbutton">
            <input type="submit" class="submit_button" size="35" value="ログイン">
            </div>
        </div>
    </form>
</html>