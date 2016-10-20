<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>생활코딩</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">

	<link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
	<div class="container">
		<header class="jumbotron text-center">
			<a href="http://localhost/index.php"><img src="http://cfile219.uf.daum.net/image/2751C03952B0C8191DBF59" alt="bishojo" id=img_bishojo class="img-circle"/></a>
			<h1><a href="http://localhost/index.php">JavaScript</a></h1>
			<audio controls autoplay>
  <source src="Deemo-Pure White.ogg" type="audio/ogg">
  <source src="Deemo-Pure White.mp3" type="audio/mpeg">
</audio>
		</header>
		<div class="row">
			<nav class="col-md-3">
				<ol class="nav nav-pills nav-stacked">
					<?php
					while($row=mysqli_fetch_assoc($result)){
						echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
					}
					 ?>
				</ol>
			</nav>
			<div class="col-md-9">
				<article>
					<form action="process.php" method="post">

						<div class="form-group">
						    <label for="form-title"></label>
						    <input type="text" class="form-control" name = "nick" id="form-nick" placeholder="닉네임 입력">
						</div>

						<input type="hidden" role="uploadcare-uploader" />
						<input type="submit" name="name" class="btn btn-default btn-lg">
					</form>
				</article>
				<hr>
				<div id="control">
					<div class="btn-group" role="group" aria-label="...">
						<input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
						<input type="button" value="black" onclick="document.getElementById('target').className='black'"/ class="btn btn-default btn-lg">
					</div>
					<a href="http://localhost/write.php" class="btn btn-success btn-lg">쓰기</a>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
