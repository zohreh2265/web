<?php

$conn = mysqli_connect('localhost', 'root', '', 'login');

// Connecting to databse
if ($conn)
{
    echo "You connected to dtabase successfully! <br/>";
}


if (isset($_POST['btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    //sabt data from database
    $query = "INSERT INTO information (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($conn, $query);
    if ($result){
        echo 'inserting data into database successfully! <br/>';
    }


    //     // deleting data from database
    // $query = "DELETE FROM information WHERE id='17'";
    // $result = mysqli_query($conn, $query);
    // if ($result){
    //     echo 'deleting data from database successfully! <br/>';
    // }

    //  // updating data from database
    // $query = 'UPDATE information SET password="010203" WHERE id="18"';
    // $result = mysqli_query($conn, $query);
    // if ($result){
    //     echo 'updating data from database successfully! <br/>';
    // }
}
if ($_SERVER['PHP_SELF'] == "/login/login.php") {
    $error = array("username"=>'', 'password'=>'', 'total'=>'');

    
    if (isset($_POST['btn1'])){ 
        $username=$_POST['username'];
        $password=$_POST['password'];


        
       

        $conn = mysqli_connect('localhost', 'root', '', 'login');

        $query = "SELECT * FROM information WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $query);
        $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
        print_r($var);

        if (sizeof($var) > 0) {
            mysqli_close($conn);
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: index.php");
        }
        
    }
}



?>