<?php 

	session_start();
	if(isset($_COOKIE['login'])){
		if($_COOKIE['login']=='true'){
			$_SESSION['login']=true;
		}
	}
	if(isset($_SESSION["login"])){
		if($_SESSION["login"] == true){
			header("location:index.php");
		}
	}

	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "
                <script>
                    alert('Login gagal! username dan password salah!');
                </script>";
		}else if($_GET['pesan'] == "logout"){
			echo "
                <script>
                    alert('Anda telah melakukan logout');
                </script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Quiz2</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary" style="color:white;margin-bottom: 20px;">
        <div>
        <h1>WELLCOME TO LOGIN PAGE</h1>
        </div>
    </nav>
	<form class="container" method="post" action="validasi.php">
		<div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Username :</label>
				<div>
				<input type="text" class="form-control" name="username" placeholder="futakih">
				</div>
			</div>
			<div class="form-group row">
				<label for='password' class="col-sm-2 col-form-label">Password :</label>
				<div>
				<input class="form-control" type="password" name="password" placeholder="123">
				</div>
			</div>
			<div>
			<label for="rememb">remember me</label>
				<input type="checkbox" name="rememb" id="rememb">
			</div>
			<br>
			<div>
				<input class="btn btn-primary" type="submit" value="LOGIN"></td>
			</div>
		</div>			
	</form>
</body>
</html>