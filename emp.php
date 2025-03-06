<?php
$c=$_POST['a'];
$d=$_POST['b'];
$con=mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
if(!$con)
{
 die("unable to connect");
}
$query="INSERT INTO emplogin VALUES('$c','$d')";
$a=mysqli_query($con,$query);
if($a)
{
 echo "inserted successfully";
}
mysqli_close($con);
?>