<?php
$con = mysqli_connect("localhost", "root", "", "signup");
if ($con) {
    //echo "<script>alert('connnection successfullly')</script>";
    if (isset($_POST['submit'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['add'];
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $rpassword = $_POST['psw-repeat'];
        $phone = $_POST['phone-number'];


        $sql = "insert into signup1 values('$firstname','$lastname','$address','$email','$password','$rpassword','$phone')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            // echo "<script>alert('Signed Up Successfully')</script>"; 
            header("Location: indexx.html");
        } else {
            echo "<script>alert('data is not save')</script>";
        }
        include('smtp/PHPMailerAutoload.php');
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->Post = 587;
        $mail->SMTPSecure = "tls";
        $mail->Username = "studyy2001@gmail.com";
        $mail->Password = "darshana@123";
        $mail->SetFrom("studyy2001@gmail.com");
        $mail->addAddress("studyy2001@gmail.com");
        $mail->ISHTML(true);
        $mail->Subject = "New Contact Us";
        $mail->Body = $html;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => false
            )
        );
        if ($mail->send()) {
            echo "Mail send";
        } else {
            echo "Error occur";
        }
    }

}
/*else
{
    die("failed".mysqli_connect_error());
}*/
echo '<form method="POST" action="indexx.html">
    <input type="submit"/>
  </form>'
    ?>