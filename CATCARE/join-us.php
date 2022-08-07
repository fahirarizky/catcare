<?php
    require 'function.php';

    if(isset($_POST["submit"])){

        if(addData($_POST) > 0 ){
            echo "<script> 
            alert('ANDA TELAH TERDAFTAR, SILAHKAN LOGIN :)'); 
                  </script>";
        } else{
            echo "Data gagal ditambahkan";
            mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html>
 <head>
  <title>CATCARE - SIGN UP</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <style></style>
 </head>
 <body>
  <div class="social-container">
      <a href="index.php"><img src="images/logob.png" alt="avatar"></a>
    </div>
 	<div id="card" style="height: 580px;">
 		<div id="card-content">
  			<div id="card-title">
    			<h2>SIGN UP</h2>
    			<div class="underline-title"></div>
  			</div>
  		<form method="post" class="form"> 
  			<label for="name" style="padding-top:13px">&nbsp;Name</label>
  			<input
   				id="name"
   				class="form-content"
   				type="name"
   				name="name"
   				autocomplete="on"
   				required />
  				<div class="form-border"></div>
        <label for="alamat" style="padding-top:22px">&nbsp;Alamat</label>
        <input
          id="alamat"
          class="form-content"
          type="alamat"
          name="alamat"
          required />
          <div class="form-border"></div>
			<label for="email" style="padding-top:22px">&nbsp;Email</label>
  			<input
  				id="email"
  				class="form-content"
   				type="email"
   				name="email"
   				required />
  				<div class="form-border"></div>
  		<label for="username" style="padding-top:22px">&nbsp;Username</label>
			  <input
          id="username"
          class="form-content"
          type="username"
          name="username"
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
			<input id="submit-btn" type="submit" name="submit" value="SIGN UP" />
			<a href="login.php" id="signup">Already have an account?</a>
  		</form>
		</div>
 	</div>
 </body>
</html>