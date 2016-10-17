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
	<script type="text/javascript" src="jquery-3.1.0.js">	</script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>생활코딩</title>
	<link rel="stylesheet" type="text/css" href="/style.css">

	<link href="/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
	<script>
		var user_pwd = prompt('비밀번호');
		if(user_pwd != 123123){
			location.reload();
		}
	</script>
		<header class="jumbotron text-center">
			<a href="/index.php"><img src="/kdence.gif" alt="bishojo" id=img_bishojo class="img-circle"/></a>
			<h1><a href="/index.php">JavaScript</a></h1>
			<audio controls >
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
					<script type="text/javascript">
						/*
						var t = new Date();
						var nowYear = t.getFullYear();

						var theDate = new Date(nowYear,8,28);

						var diffDate = theDate - t ;

						var result1 = Math.floor(diffDate/(1000*60*60*24));
						var result2 = Math.floor(diffDate/(1000*60*60)-result1*24);
						var result3 = Math.floor(diffDate/(1000*60)-result1*24*60-result2*60);


						document.write("<h1>"+"전역일까지 "+result1+"일 "+result2+"시간 "+result3+"분 남았슴다 ^^"+"</h1>");
						*/
					</script>

					<p id='calendar'></p>

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
	<a href="/bgm.php" class="btn btn-success btn-lg">브금</a>

				</div>
			</div>
		</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
		<hr>
		<address>
			바지사장 겸 엔지니어 : 펑크린 <br>
			정보담당 겸 세일즈맨 : 곽병장<br>
			주소 : 대한민국의 중심 대구/경북<br>
			copyright 'Punkryn' All right reserved.
		</address>
	<script type="text/javascript" src="index_js.js"></script>
</body>
</html>
