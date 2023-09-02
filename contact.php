
<?php    
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'affiliate';

// $conn = new mysqli($servername, $username, $password, $dbname);



// if ($conn->connect_error) {
//     die('Connection failed: ' . $conn->connect_error);
// }

include 'conn.php';

$username = $_POST['username'];
$mail = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO `contact_form`(`Username`, `Email`, `Msg`) VALUES ('$username', '$mail', '$message');";
// $sql = "INSERT INTO conatct_form (Username, Email, Msg) VALUES ('$username', '$mail', '$message');";
if ($conn->query($sql) === true) {
   echo '<br><br><br><br><br><br><br><br> <b>Form submitted successfully. Thank you!</b>';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>


