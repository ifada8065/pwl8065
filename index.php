<!DOCTYPE html>
<html>
  <head>
    <title>PHP GET and POST Method Example</title>
    <link rel="stylesheet" href="css/style.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/metode.js"></script>
  
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form  method="get" action="index.php" id="form">
			<h2>Input by 8065</h2><hr/>		
			
			<label>Nama :</label>
			<input type="text" name="fnama" id="fnama" />
			<br />
			<label>Alamat :</label>
			<input type="text" name="lalamat" id="lalamat" />
			<br />
			<label>Pilih Metode :</label>
			<br />
			<span><input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="method" value="post" > POST </span>	
			<br />
			
			<input type="submit" name="submit" id="submit" value="Submit">
		  </for>
		<?php include "proses.php";?>
		</div>
   </div>
 
  </body>
</html>