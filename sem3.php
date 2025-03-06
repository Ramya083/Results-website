<?php
$a=$_POST['n'];
$b=$_POST['301'];
$c=$_POST['302'];
$d=$_POST['303'];
$e=$_POST['304'];
$f=$_POST['305'];
$g=$_POST['306'];
$h=$_POST['307'];
$i=$_POST['308'];
$j=$_POST['309'];
$con=mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
if(!$con)
{
 die("unable to connect");
}
$query="INSERT INTO 3sem VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
if(mysqli_query($con,$query))
{
 echo "i";
}
mysqli_close($con);
?>