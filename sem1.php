<?php
$a=$_POST['n'];
$b=$_POST['101'];
$c=$_POST['102'];
$d=$_POST['103'];
$e=$_POST['104'];
$f=$_POST['105'];
$g=$_POST['106'];
$h=$_POST['107'];
$i=$_POST['108'];
$j=$_POST['109'];
$k=$_POST['110'];
$l=$_POST['111'];
$con=mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
if(!$con)
{
 die("unable to connect");
}
$query="INSERT INTO sem1 VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
if(mysqli_query($con,$query))
{
 echo "i";
}
mysqli_close($con);
?>