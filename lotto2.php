<?php
	require("config/config.php");
	require("lib/db.php");
	$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
	$result = mysqli_query($conn, "SELECT * FROM topic");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>생활코딩</title>
	<link rel="stylesheet" type="text/css" href="/style.css">

	<link href="/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
		<header class="jumbotron text-center">
			<a href="/index.php"><img src="/kdence.gif" alt="bishojo" id=img_bishojo class="img-circle"/></a>
			<h1><a href="/index.php">JavaScript</a></h1>
			<audio controls>
				<source src="01. Blossom.mp3" type="audio/mpeg">
			</audio>
		</header>
		<div class="container">
		<div class="row">
			<nav class="col-md-3">
				<ol class="nav nav-pills nav-stacked">
					<?php
					while($row=mysqli_fetch_assoc($result)){
						echo '<li><a href="/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
					}
					 ?>
				</ol>
			</nav>
			<div class="col-md-9">
				<article>
					<?php
					if(empty($_GET['id']) === false ) {
					  	$sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author=user.id WHERE topic.id=".$_GET['id'];
					    $result = mysqli_query($conn, $sql);
					    $row = mysqli_fetch_assoc($result);
					    echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
							echo '<p>'.'<h2>'.htmlspecialchars($row['name']).'</h2>'.'</p>';
					    echo strip_tags($row['description'],'<a><h1><h2><h3><h4><h5><ul><ol><li>');
					}
					?>
					<script>
						var lotto = {
							'a':Math.round(Math.random()*45),
							'b':Math.round(Math.random()*45),
							'c':Math.round(Math.random()*45),
							'd':Math.round(Math.random()*45),
							'e':Math.round(Math.random()*45),
							'f':Math.round(Math.random()*45),
						}
						if(lotto.a === lotto.b ||
							lotto.a === lotto.c ||
							lotto.a === lotto.d ||
						 	lotto.a === lotto.e ||
							lotto.a === lotto.f ||
							lotto.b === lotto.c ||
						 	lotto.b === lotto.d ||
							lotto.b === lotto.e ||
							lotto.b === lotto.f ||
							lotto.c === lotto.d ||
							lotto.c === lotto.e ||
							lotto.c === lotto.f ||
							lotto.d === lotto.e ||
							lotto.d === lotto.f ||
							lotto.e === lotto.f ||
							lotto.a === 0 ||
							lotto.b === 0 ||
						 	lotto.c === 0 ||
							lotto.d === 0 ||
						 	lotto.e === 0 ||
							lotto.f === 0){
								document.write("중복발생")

							} else {
								for(key in lotto){
									document.write(lotto[key]+" ")
								}
							}
					</script>

				</article>
				<hr>
				<div id="control" class="text-right">
					<div class="btn-group" role="group" aria-label="...">
						<input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
						<input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
					</div>
					<input type="button" value="share" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
		'facebook-share-dialog',
		'width=626,height=436');
	return false;" title="페이스북 쉐어 버튼" class="btn btn-primary btn-lg"/>
	<a href="/lotto.php" class="btn btn-default btn-lg" />lotto</a>
	<a href="/write.php" class="btn btn-success btn-lg">쓰기</a>

				</div>
			</div>
		</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
