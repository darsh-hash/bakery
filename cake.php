<?php
$con = mysqli_connect("localhost", "root", "", "ram");

session_start();

$cake_name = $_GET["name"];
$_SESSION["cake_name"] = $cake_name;

$sql="SELECT * FROM `cake`";
$result = mysqli_query($con, $sql);
/*echo "<table>"; 

while($row = mysqli_fetch_array($result)){   
echo "<tr><td>" . htmlspecialchars($row['cakename']) . "</td>
<td>" . htmlspecialchars($row['price']) . "</td></tr>";  
}

echo "</table>"; */
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

<body>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    </head>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

        <form action="book.php?name=  <?php echo ($cake_name) ?>" method="post">
            <div class="formmm " id="farm">
                <div class="form-items">
                    
                    <h4>
                    <label for="count">Number of Cakes : </label>
                    <input type="number" name="count" id="count" placeholder="Enter Count">
                    <button class="btn"> <a href="book.php"></a>Book Now</button>
                    </h4>
                </div>
                </section>
</body>

</html>