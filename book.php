<?php

   session_start();
   
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
       $servername="localhost";
       $username="root";
       $password="";
       $database="ram";
   
       $con=mysqli_connect($servername,$username,$password,$database);
       if($con)
       {
          // echo("Database Connected");
          $count=$_POST['count'];
          $cake_name=$_SESSION["cake_name"];
     //echo($cake_name);
      $sql="SELECT * FROM `cake` WHERE cakename='$cake_name'";
      $res=mysqli_query($con,$sql);
      $row=mysqli_fetch_assoc($res);
      $price=$row['price'];
      $amt = $price * $count;

      
      //echo($amt);
      $sq="INSERT INTO `order`(`cakename`, `quantity`, `Amount`) VALUES ('$cake_name','$count','$amt')";
      mysqli_query($con,$sq);
       
       echo("Reciept : ");
        echo("<br>");
        echo("Cake Name : ".$cake_name); echo("<br />");
        echo("Quantity : ".$count); echo("<br />");
        echo("Amount is :".$amt); echo("<br />");
        echo("<br />");

        echo "<input type= 'button' value='Cash On Delivery' onclick='save()'>";
echo " <script>
    function save(){ alert('Order Successfully Placed');}
</script>";

       }   
    }   
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes</title>
    <link rel="stylesheet" href="php.css">
</head>

</html>


