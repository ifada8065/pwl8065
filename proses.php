<?php 
if(isset($_POST['fnama']))
{
 $fnama = $_POST['fnama'];
 $lalamat = $_POST['lalamat'];
 echo "<br /><span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
 $fnama = $_GET['fnama'];
 $lalamat = $_GET['lalamat'];
 echo "<span class='success'><br/>Dengan <b>Metode G</b></span><br/>";
 echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
?>