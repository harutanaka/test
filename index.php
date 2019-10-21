<!DOCTYPE html>
 <html>
  <head>
   <meta charset="UTF-8">
    <title>practice</title>
    <link rel="stylesheet" href="style.css">
  </head>
     
   <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=tanaka001;host=localhost;","root","mysql");
        $stmt = $pdo->query("select * from 4each_keijiban");
        ?>
     <header>
       <div class="logo"><img src="4eachblog_logo.jpg"></div>
       <ul>
        <li>トップ</li>  
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
       </ul>
     </header>
      <main>
        <div class="main-container">
         <div class="left">
       <h1>プログラミングに役立つ掲示板</h1>
       <form method="post" action="insert.php">
       <h2 class="form">入力フォーム</h2>
            <div>
             <label>ハンドルネーム</label>
             <br>
             <input type="text" class="text" size="35" name="handlename">
            </div>
            
            <div>
             <label>タイトル</label>
             <br>
             <input type="text" class="text" size="35" name="title">
            </div>
　　　       <div>
             <label>コメント</label>
             <br>
             <textarea cols="35" rows="7" name="comments"></textarea>
            </div>
				    <form action="insert.php" method="post">
             <input type="submit" class="button2" value="投稿する">
            </form>
					 </form>
            <?php
            while ($row = $stmt->fetch()) {
            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by ".$row['handlename']."</div>"; echo "</div>";
            echo "</div>";
            }
            ?>

           </div>
          <div class="right">
          <h2>人気の記事</h2>
          <p>PHPオススメ本</p>
          <p>PHP MyAdminの使い方</p>
          <p>いま人気のエディタTop5</p>
          <p>HTMLの基礎</p>
          <h2>オススメリンク</h2>
          <p>インターノウス株式会社</p>
          <p>XAMMPのダウンロード</p>
          <p>Eclipseのダウンロード</p>
          <p>Braketsのダウンロード</p>
          <h2>カテゴリ</h2>
          <p>HTML</p>
          <p>PHP</p>
          <p>MySQL</p>
          <p>JavaScript</p>
          </div>
        </div>
      </main>
<footer>copyright internous | 4each blog is the one which provides A to Z about programing.</footer>
   </body>
 </html>