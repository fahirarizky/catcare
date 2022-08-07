<!DOCTYPE html>
<html>
 <head>
  <title>CATCARE - Profile</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <style></style>
 </head>
 <body>
 	<div class="social-container">
			<a href="index.php"><img src="images/logob.png" alt="avatar"></a>
		</div>
 	<div id="card" style="width: 600px; height: 600px">
 		<div id="card-content">
  			<div id="card-title">
    			<h2>PROFILE</h2>
    			<div class="underline-title"></div>
  			</div>
  		<form method="post" class="form"> 
  			<label for="name" style="padding-top:13px">&nbsp;Name</label>
        <input
          id="name"
          placeholder="Contoh Nama"
          class="form-content"
          type="name"
          name="name"
          autocomplete="on"
          required />
          <div class="form-border"></div>
      <label for="email" style="padding-top:22px">&nbsp;Email</label>
        <input
          id="email"
          placeholder="contohemail@mail.com"
          class="form-content"
          type="email"
          name="email"
          required />
          <div class="form-border"></div>
      <label for="username" style="padding-top:22px">&nbsp;Username</label>
        <input
          id="username"
          placeholder="contohusername"
          class="form-content"
          type="username"
          name="username"
          required />
          <div class="form-border"></div>
      <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
        <input
          id="user-password"
          placeholder="contohpassword"
          class="form-content"
          type="password"
          name="password"
          required />
          <div class="form-border"></div>
       <label for="user-photo" style="padding-top:22px">&nbsp;Photo</label>
        <input
          id="user-photo" 
          type="file" 
          name="foto"
          accept="image/png, image/jpeg" 
          required>
      <input id="submit-btn" type="submit" name="profile" value="SAVE CHANGES" />
			<a href="index.php" id="signup">Back to home</a>
  		</form>
		</div>
 	</div>
 </body>
</html>