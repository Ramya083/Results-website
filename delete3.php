<?php
$c=$_POST['d'];
$con=mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
if(!$con)
{
 die("unable to connect");
}
$query="DELETE FROM 4sem WHERE pinno = '$c'";
if(mysqli_query($con,$query))
{
  echo "d";
}
mysqli_close($con);
?>