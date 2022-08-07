<!DOCTYPE html>
<html>
 <head>
  <title>CATCARE - Relawan</title>
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
    			<h2>YUK, JADI RELAWAN</h2>
    			<div class="underline-title" style="width:310px"></div>
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
      <label for="address" style="padding-top:22px">&nbsp;Address</label>
        <input
          id="address"
          placeholder="contoh tampat tinggal"
          class="form-content"
          type="address"
          name="address"
          required />
          <div class="form-border"></div>
      <label for="reason" style="padding-top:22px">&nbsp;Alasan jadi relawan</label>
        <textarea
          id="reason"
          placeholder="contoh alasan: ingin bermain bersama anabul lucu"
          class="form-content"
          type="reason"
          name="reason"
          required />
        </textarea>
          <div class="form-border"></div>
      <input id="submit-btn" type="submit" name="relawan" value="SUBMIT" />
			<a href="index.php" id="signup">Back to home</a>
  		</form>
		</div>
 	</div>
 </body>
</html>