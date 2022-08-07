<?php
    // include 'session.php';
    require ('function.php');
    $member = query("SELECT * FROM member");
    $dokter = query("SELECT * FROM dokter"); 
      
    //   if($_SESSION['login']= True) 
    //     echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    //   else
    //     echo "<script type='text/javascript'>alert('failed!')</script>";
?>
<!DOCTYPE html>
<html>
 <head>
  <title>CATCARE - Admin</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <style></style>
 </head>
 <body>
 	<div class="social-container">
			<a href="index.php"><img src="images/logob.png" alt="avatar"></a>
		</div>
 	<div id="card" style="width: 660px; height: 900px">
 		<div id="card-content">
  			<div id="card-title">
    			<h2>Welcome Back, Admin!</h2>
    			<div class="underline-title" style="width:330px"></div>
  			</div>
         <h3>Kelola Member</h3>
        <table id="table" border="1">
          <tr>
            <th>Nama Member</th>
            <th>Alamat Member</th>
            <th>Email Member</th>
            <th>Username</th>
          </tr>
          <tr>
            <td align="center">  </td>
            <td align="center">  </td>
            <td align="center">  </td>
            <td align="center">  </td>
          </tr>
          
            <?php foreach ($member as $memb) : ?>
            <tr class="TR">
              <td> 
                <?= $memb['Nama_Member']; ?> 
              </td>
              
              <td>
                <?= $memb['Alamat_Member']; ?>
              </td>
              
              <td>
                <?= $memb['Email_Member']; ?> 
              </td>

              <td>
                <?= $memb['Username']; ?> 
              </td>
            <?php endforeach; ?>

        </table>
      <input id="submit-btn" style="margin-top: 10px;" type="submit" name="admin-mem" value="EDIT" />
      <h3>Kelola Dokter</h3>
        <table id="table" border="1">
          <tr>
            <th>Nama Dokter</th>
            <th>Email Dokter</th>
            <th>Password Dokter</th>
          </tr>
          <tr>
            <td align="center">  </td>
            <td align="center">  </td>
            <td align="center">  </td>
          </tr>

          <?php foreach ($dokter as $dokt) : ?>
            <tr class="TR">
              <td> 
                <?= $dokt['Nama_Dokter']; ?> 
              </td>
              
              <td>
                <?= $dokt['Email_Dokter']; ?>
              </td>
              
              <td>
                <?= $dokt['Password']; ?> 
              </td>
            <?php endforeach; ?>
            
        </table>

      <input id="submit-btn" style="margin-top: 10px;" type="submit" name="admin-doc" value="EDIT" />
      <h3>Kelola Adopsi</h3>
        <table id="table" border="1">
          <tr>
            <th>ID adopsi</th>
            <th>Nama Kucing</th>
            <th>Email Adopter</th>
            <th>Nama Adopter</th>
          </tr>
          <tr>
            <td align="center">  </td>
            <td align="center">  </td>
            <td align="center">  </td>
            <td align="center">  </td>
          </tr>
        </table>
      <input id="submit-btn" style="margin-top: 10px;" type="submit" name="admin-adop" value="EDIT" />
      <h3>Kelola Donatur</h3>
        <table id="table" border="1">
          <tr>
            <th>Nama Donatur</th>
            <th>Email Donatur</th>
            <th>Alamat Donatur</th>
            <th>Jumlah Donasi</th>
            <th>Jenis Pembayaran</th>
          </tr>
          <tr>
            <td align="center">  </td>
            <td align="center">  </td>
            <td align="center">  </td>
            <td align="center">  </td>
            <td align="center">  </td>
          </tr>
        </table>
      <input id="submit-btn" style="margin-top: 10px;" type="submit" name="admin-don" value="EDIT" />
      <h3>Kelola Relawan</h3>
        <table id="table" border="1">
          <tr>
            <th>Nama Relawan</th>
            <th>Alamat Relawan</th>
          </tr>
          <tr>
            <td align="center">  </td>
            <td align="center">  </td>
          </tr>
        </table>
      <input id="submit-btn" style="margin-top: 10px;" type="submit" name="admin-vol" value="EDIT" />
    </div>
     <a href="login_admin.php"> <button id="submit-btn" >LOGOUT</button> </a>
 	</div>
 </body>
</html>