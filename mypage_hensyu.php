<?php
mb_internal_encoding("utf8");
session_start();

?>

<!DOCTYPE HTML>
<html lamg="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    <body>
        <header>
                <img src="4eachblog_logo.jpg">
                <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>
        <div class="form">
            <h2>会員情報</h2>
            <div class="hello">
                <?php echo "こんにちは！".$_SESSION['name']."さん"; ?>
            </div>
            <form action="mypage_update.php"action="mypage.php" method="post">
                <div class="profile_pic">
                     <img src="<?php echo $_SESSION['picture']; ?>">
                </div>

                <div class="basic_info">
                    <p>氏名：<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name">
                    </p>
                    <p>メール：<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail">
                    </p>
                    <p>パスワード：<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>"name ="password">
                     </p>
                </div>
                <div class="comments">
                    <textarea row="5" cols="70" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                </div>    
                <div class="form_center">

                    <input type="submit" class="submit_button" size="35"value="この内容に変更する">
                </div>
                
            </form>
        </div> 
        <footer>
            ©2018 interNous.inc All rights reserved
        </footer>
    </body>
</html>
