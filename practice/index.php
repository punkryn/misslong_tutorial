<?php
require_once('conn.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>연습</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
  </head>
  <body class="" id="body">
    <header>
      <h1><a href="/practice/index.php">생활코딩 Javascript</a></h1>
    </header>
    <nav>
      <ol>
<?php
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){
echo '<li><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
}
 ?>
      </ol>
    </nav>
  <div id="content">
    <article class="">
      <?php
      if(empty($_GET['id'])){
        echo "welcome" ;
      } else {
        $id = mysqli_real_escape_string($conn, $_GET['id']) ;
        $sql2 = "SELECT topic.id, topic.title, topic.description, user.name, topic.created FROM `topic` LEFT JOIN user ON topic.author=user.id WHERE topic.id=".$id ;
        $result2 = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_assoc($result2);
        ?>
        <h2><?=htmlspecialchars($row['title'])?></h2>
        <div class="">
          <?=htmlspecialchars($row['created'])?> | <?=htmlspecialchars($row['name'])?>
        </div>
        <div class="">
          <?=htmlspecialchars($row['description'])?>
        </div>
        <?php
      }
      ?>
    </article>
    <input type="button" name="name" value="white" onclick="document.getElementById('body').className=''">
    <input type="button" name="name" value="black" onclick="document.getElementById('body').className='black'">
    <a href="write.php"><input type="button" name="name" value="쓰기"></a>
  </div>
  </body>
</html>