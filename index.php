<!DOCTYPE html>
<html>
<head>
	<title> Membuat Form Login dengan Javascript</title>
	<link rel ="stylesheet" type = "text/css" href = "style.css">
</head>
<body>
</br>
<br/>
<center><h1>FORM LOGIN</h1></center>
</br>
<div class ="login">
	<br/>
	<form action = "login.php" method = "post" onSubmit = "return validasi()">
		<div>
			<label>Username:</label><br>
			<input type="text" name="username" id="username" placeholder=" Masukkan Username"/>
		</div>
		<div>
			<label>Password:</label><br>
			<input type="password" name="password" id="password"  placeholder="Masukkan Password"/>
		</div>
		<div>
			<input type="submit" value="Login" id="tombol"/>
		</div>
	</form>
</div>
</body>
<script type = "text/javascript">
	function validasi () {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if(username!= "" && password!=""){
			return true;
		} else {
			alert('Username dan Password harus diisi') ;

		return false;} }
	</script>
</html>