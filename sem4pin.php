
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
    background: #A1FFCE;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FAFFD1, #A1FFCE);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FAFFD1, #A1FFCE); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
    </head>
    <body>
<?php
        
       $name = $_POST['p'];
       $con = mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
           $m1="SELECT * FROM 4sem WHERE pinno='$name'";
            $c=mysqli_query($con,$m1);
           $d = mysqli_fetch_array($c,MYSQLI_ASSOC);
           
               echo "<table border=1 class=b align=center style=font-size:35px; ><tr><th>internal</th><th>marks</th><th>external</th><th>marks</th></tr>";
             echo "<tr style=text-align:center;><td >401</td><td>".$d['401']."</td><td >406</td><td>".$d['406']."</td></tr>";
             echo "<tr style=text-align:center;><td >402</td><td>".$d['402']."</td><td >407</td><td>".$d['407']."</td></tr>";
             echo "<tr style=text-align:center;><td >403</td><td>".$d['403']."</td><td >408</td><td>".$d['408']."</td></tr>";
             echo "<tr style=text-align:center;><td >404</td><td>".$d['404']."</td><td >409</td><td>".$d['409']."</td></tr>";
             echo "<tr style=text-align:center;><td >405</td><td>".$d['405']."</td></tr>";
             echo "</table>";
             mysqli_close($con);
        
?>            
    </body>
    </html>
