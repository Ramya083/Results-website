<?php
$c=$_POST['a'];
$d=$_POST['b'];
$con=mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
if(!$con)
{
 die("unable to connect");
}
$query="INSERT INTO login VALUES('$c','$d')";
if(mysqli_query($con,$query))
{
 echo "inserted successfully";
}
mysqli_close($con);
?>