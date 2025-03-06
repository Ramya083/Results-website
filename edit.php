<?php
$h=$_POST['1'];
$f=$_POST['2'];
$d=$_POST['3'];
$e=$_POST['4'];
$con=mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
if(!$con)
{
 die("unable to connect");
}
$query="UPDATE '$f' SET '$d' = '$e' WHERE pinno = '$h'";
if(mysqli_query($con,$query))
{
 echo "updated successfully";
}
mysqli_close($con);
?>