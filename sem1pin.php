<html>
    <head>
    <title> Marksheet</title>
    <style>
body
{
text-align:center;
}
.b
{
   background: #FFAFBD;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #ffc3a0, #FFAFBD);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #ffc3a0, #FFAFBD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
    </head>
    <body>
<?php
        
       $name = $_POST['p'];
       $con = mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
           $m1="SELECT * FROM sem1 WHERE pinno='$name'";
            $c=mysqli_query($con,$m1);
           $d = mysqli_fetch_array($c,MYSQLI_ASSOC);
           
               echo "<table border=1 align=center class=b style=font-size:35px; ><tr><th>internal</th><th>marks</th><th>external</th><th>marks</th></tr>";
             echo "<tr style=text-align:center;><td >101</td><td>".$d['101']."</td><td >106</td><td>".$d['106']."</td></tr>";
             echo "<tr style=text-align:center;><td >102</td><td>".$d['102']."</td><td >107</td><td>".$d['107']."</td></tr>";
             echo "<tr style=text-align:center;><td >103</td><td>".$d['103']."</td><td >108</td><td>".$d['108']."</td></tr>";
             echo "<tr style=text-align:center;><td >104</td><td>".$d['104']."</td><td >109</td><td>".$d['109']."</td></tr>";
             echo "<tr style=text-align:center;><td >105</td><td>".$d['105']."</td></tr>";
             echo "</table>";
             mysqli_close($con);
        
?>            
    </body>
    </html>
