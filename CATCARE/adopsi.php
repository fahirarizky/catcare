<!DOCTYPE html>
<html>
 <head>
  <title>CATCARE - Adopsi</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <style></style>
 </head>
 <body>
 	<div class="social-container">
			<a href="index.php"><img src="images/logob.png" alt="avatar"></a>
		</div>
 	<div id="card" style="width: 660px; height: 1100px">
 		<div id="card-content">
  			<div id="card-title">
    			<h2>ADOPSI ANABUL LUCU</h2>
    			<div class="underline-title" style="width:310px"></div>
  			</div>
        <table id="table" border="1">
          <tr>
            <th>Foto Kucing</th>
            <th>Nama Kucing</th>
            <th>Umur</th>
          </tr>
          <tr>
            <td align="center"><img src="images/adop1.jpg" style="max-width: 150px; max-height: 150px;"></td>
            <td align="center">Upin dan Ipin</td>
            <td align="center">3 bulan</td>
          </tr>
          <tr>
            <td align="center"><img src="images/adop2.jpg" style="max-width: 150px; max-height: 150px;"></td>
            <td align="center">Tiger</td>
            <td align="center">4 bulan</td>
          </tr>
          <tr>   
            <td align="center"><img src="images/adop3.jpg" style="max-width: 150px; max-height: 150px;"></td>
            <td align="center">Steven</td>
            <td align="center">2 tahun</td>
          </tr>
        </table>
      <h1>Untuk adopsi, isi data di bawah</h1>
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
      <label for="nama-kucing" style="padding-top:22px">&nbsp;Nama Kucing</label>
        <input
          id="nama-kucing"
          placeholder="contoh nama kucing"
          class="form-content"
          type="nama-kucing"
          name="nama-kucing"
          required />
          <div class="form-border"></div>
      <input id="submit-btn" type="submit" name="adopsi" value="SUBMIT" />
			<a href="index.php" id="signup">Back to home</a>
  		</form>
		</div>
 	</div>
 </body>
</html>