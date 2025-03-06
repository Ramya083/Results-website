<html>
    <head>
    <title>  Marksheet</title>
    <style>
body
{
background-image: url("aa5.png");
text-align:center;
}
.a
{
    style=width:100px; height:40px;background-color:red; font-size:20px; color:white;
}
</style>
    </head>
    <body>
      <h1><P>MARKSHEET</P></h1>  
<?php
        
       $name = $_POST['n1'];
       $con = mysqli_connect("localhost","id20477960_madhu","Madhurya_3030","id20477960_wd");
           $m1="SELECT * FROM user1 WHERE pin='$name'";
            $c=mysqli_query($con,$m1);
           $d = mysqli_fetch_array($c,MYSQLI_ASSOC);
           echo "<table border=1 style= text-align:center; border-collapse: collapse;>";
           
             echo "<tr style=text-align:center;border-collapse: collapse;><th>External</th><th>Marks</th><th>Internal</th><th>Marks</th></tr>";
             echo "<tr style=text-align:center;><td >401</td><td>".$d['401']."</td>
<td >406</td><td>".$d['406']."</td></tr>";
             echo "<tr style=text-align:center;><td >402</td><td>".$d['402']."</td>
             <td >407</td><td>".$d['407']."</td></tr>";
             echo "<tr style=text-align:center;><td >403</td><td>".$d['403']."</td><td >408</td><td>".$d['408']."</td></tr>";
             echo "<tr style=text-align:center;><td >404</td><td>".$d['404']."</td><td >409</td><td>".$d['409']."</td></tr>";
             echo "<tr style=text-align:center;><td>405<td>".$d['405']."</td></tr>";
           echo "</table>";
             mysqli_close($con);
        
?>  
<br>
<input type="button" value="Go to Homepage" onclick="br()" class="a" id="s1">
<script>
    function br()
    {
        alert('Redirecting to Homepage');
        window.location="Homepage.html";
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#s1").mouseover(function(){
    $("#s1").css("background-color", "purple");
  });
    $("#s1").mouseout(function(){
    $("#s1").css("background-color", "red");
  });
  });
</script>
    </body>
    
    </html>