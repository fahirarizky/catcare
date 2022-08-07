<!DOCTYPE html>
<html>
 <head>
  <title>CATCARE - DONASI</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <style></style>
 </head>
 <body>
  <div class="social-container">
      <a href="index.php"><img src="images/logob.png" alt="avatar"></a>
    </div>
 	<div id="card" style="width: 400px; height: 630px">
 		<div id="card-content">
  			<div id="card-title">
    			<h2>DONASI</h2>
    			<div class="underline-title" style="width: 120px;"></div>
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
			<label for="email" style="padding-top:22px">&nbsp;Email</label>
  			<input
  				id="email"
  				class="form-content"
   				type="email"
   				name="email"
   				required />
  				<div class="form-border"></div>
  		<label for="address" style="padding-top:22px">&nbsp;Address</label>
			  <input
          id="address"
          class="form-content"
          type="address"
          name="address"
          required />
          <div class="form-border"></div>
      <label for="jml-donasi" style="padding-top:22px">&nbsp;Jumlah Donasi</label>
        <input
          id="jml-donasi"
          class="form-content"
          type="jml-donasi"
          name="jml-donasi"
          required />
          <div class="form-border"></div>
       <label for="jns-donasi" style="padding-top:22px">&nbsp;Jenis Pembayaran</label>
			<select name="status" class="sign-in-container">
				<option value="transfer-bank">Transfer Bank</option>
				<option value="cash">Cash</option>
			</select>
			<input id="submit-btn" type="submit" name="donasi" value="SUBMIT" />
			<a href="index.php" id="signup">Back to home</a>
  		</form>
		</div>
 	</div>
 </body>
</html>