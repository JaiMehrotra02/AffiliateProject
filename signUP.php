
<body>
<?php    
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$showalert= false;
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['emailS'];
$password = $_POST['passwordS'];
$cpasswordS = $_POST['cpasswordS'];
$addressS = $_POST['addressS'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

if($password != $cpasswordS)
                {
                   echo "<script> alert(' Please enter same password')</script>";
                }
else
{



$sql = "INSERT INTO signUp(F_Name, L_Name, Email, Password, Address, City, State, Pin_code) VALUES ('$fName','$lName','$email','$password','$addressS','$city','$state','$zip');";
}
if ($conn->query($sql) === true) {
    $showalert=true;
   echo ' <b>Form submitted successfully. Thank you!</b>';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>


</body>