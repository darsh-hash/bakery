<?php
$con = mysqli_connect("localhost", "root", "", "ram");
if ($con) {
    /*echo "<script>alert('connnection successfullly')</script>";*/
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $password = $_POST['psw'];

        $sql = "insert into st values('$name','$password')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            //echo "<script>alert('data saved')</script>";
            header("Location: indexx.html");

        } else {
            echo "<script>alert('data is not save')</script>";
        }
    }
}
/*else
{
    die("failed".mysqli_connect_error());
}
*/
echo '<form method="POST" action="indexx.html">
    <input type="submit"/>
  </form>'
    ?>