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
   background: #f4c4f3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #fc67fa, #f4c4f3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #fc67fa, #f4c4f3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
    </head>
    <body>
<?php
        
       $name = $_POST['p'];
       $con = mysqli_connect("localhost","id20572515_harshi","Ramya083@111","id20572515_web");
           $m1="SELECT * FROM 3sem WHERE pinno='$name'";
            $c=mysqli_query($con,$m1);
           $d = mysqli_fetch_array($c,MYSQLI_ASSOC);
           
               echo "<table border=1 class=b align=center style=font-size:35px; ><tr><th>internal</th><th>marks</th><th>external</th><th>marks</th></tr>";
             echo "<tr style=text-align:center;><td >301</td><td>".$d['301']."</td><td >306</td><td>".$d['306']."</td></tr>";
             echo "<tr style=text-align:center;><td >302</td><td>".$d['302']."</td><td >307</td><td>".$d['307']."</td></tr>";
             echo "<tr style=text-align:center;><td >303</td><td>".$d['303']."</td><td >308</td><td>".$d['308']."</td></tr>";
             echo "<tr style=text-align:center;><td >304</td><td>".$d['304']."</td><td >309</td><td>".$d['309']."</td></tr>";
             echo "<tr style=text-align:center;><td >305</td><td>".$d['305']."</td></tr>";
             echo "</table>";
             mysqli_close($con);
        
?>            
    </body>
    </html>
