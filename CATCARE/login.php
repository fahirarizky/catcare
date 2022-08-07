<?php 
// session_start();
require('function.php');

// if ( isset($_SESSION["login"]) ) {
//   header("Location: index.php");
//   exit;
// }

if(isset($_POST["login"])) {

  $email_member = $_POST["email_member"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM member WHERE Email_member = '$email_member' AND Password = '$password'");

  //cek username
  if(mysqli_num_rows($result) === 1){
      echo "<script> 
        alert('SELAMAT ANDA TELAH MENJADI MEMBER KUCING'); 
        document.location.href = 'index.php';
              </script>";

    // set session
    // $_SESSION["login"] = true;
    // header("Location: index.php");
    // exit;

  }
  $error = true;
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title>CATCARE - Login</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <style></style>
 </head>
 <body>
 	<div class="social-container">
			<a href="index.php"><img src="images/logob.png" alt="avatar"></a>
		</div>
 	<div id="card">
 		<div id="card-content">
  			<div id="card-title">
    			<h2>LOGIN</h2>
    			<div class="underline-title"></div>
  			</div>
  		<form method="POST" action="" class="form"> 
  			<label for="username" style="padding-top:13px">&nbsp;Email</label>
  			<input
   				id="user"
   				class="form-content"
   				type="email_member"
   				name="email_member"
   				autocomplete="on"
   				required />
  				<div class="form-border"></div>
			<label for="user-password" style="padding-top:22px">&nbsp;Password</label>
  			<input
  				id="user-password"
  				class="form-content"
   				type="password"
   				name="password"
   				required />
  				<div class="form-border"></div>
  			<label for="user-status" style="padding-top:22px">&nbsp;Status</label>
			<select name="status" class="sign-in-container" onChange="document.location.href=this.options[this.selectedIndex].value;">
				<option value="login.php">Anggota</option>
				<option value="login_admin.php">Admin</option>
				<option value="login_dokter.php">Dokter</option>
			</select>
			<a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
			
      <button id="submit-btn" type="submit" name="login" value="login"> LOGIN </button>

      <a href="join-us.php" id="signup">Don't have account yet?</a>
  		</form>
		</div>
 	</div>
 </body>
</html>