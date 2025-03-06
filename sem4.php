<?php
$a=$_POST['n'];
$b=$_POST['401'];
$c=$_POST['402'];
$d=$_POST['403'];
$e=$_POST['404'];
$f=$_POST['405'];
$g=$_POST['406'];
$h=$_POST['407'];
$i=$_POST['408'];
$j=$_POST['409'];
$con=mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
if(!$con)
{
 die("unable to connect");
}
$query="INSERT INTO 4sem VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
if(mysqli_query($con,$query))
{
 echo "i";
}
mysqli_close($con);
?>