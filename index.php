<?php 
	session_start();
	if(isset($_COOKIE['login'])){
		if($_COOKIE['login']=='true'){
			$_SESSION['login']==true;
		}
	}

	if($_SESSION['login']!=true){
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>192410101126</title>
<body>
	<nav class="navbar navbar-dark bg-primary" style="color:white;margin-bottom: 20px;">
        <div>
        <h1>WELLCOME TO MAIN PAGE</h1>
        </div>
    </nav>
	<div class="container" style="text-align: center;	">
		<h1>WELL DONE, <?php echo $_SESSION['username'] ?>! ANDA TELAH BERHASIL LOGIN</h1>
		<h1>klik <a href="logout.php">di sini</a> jika anda ingin logout</h1>
	</div>
	
</body>
</html>