<?php      
    error_reporting(E_ALL ^ E_WARNING);
    include('conn.php');  
    $username = $_POST['usernameS'];  
    $password = $_POST['passwordS'];  
      
        // //to prevent from mysqli injection  
        // $username = stripcslashes($username);  
        // $password = stripcslashes($password);  
        // $username = mysqli_real_escape_string($conn, $username);  
        // $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from signup where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count > 0){  
            // echo "<h1><center> Login successful </center></h1>";
            echo "<script> alert('Login successful !');</script>
            <h1> <center>Hello! $username</center></h1>";  
        }  
        else{  
            // echo "<h1> Login failed. Invalid username or password.</h1>"; 
            
             echo "<script> alert('Login failed. Invalid username or password.');</script>
             <h1><center>Login Again !!!</center></h1>
             <center><a href='index.php'>Home</a></center>"; 
             
        }     
?>  