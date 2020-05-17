<?php
session_start();
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lab4";

    //create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    //check db connection
    if($conn->connect_error){
        die("Can't connect to database");
    }
     //echo "Connected";
     
     if(isset($_POST['email'])&& $_POST['password'])
     {
           $Email = $_POST['email'];  
           $password = md5($_POST['password']);
          // echo $Email." ".$password;
           $stmt = $conn->prepare("SELECT email,pass_id FROM user_people WHERE email = ? AND pass_id =? ");       
           $stmt->bind_param('ss', $Email,$password);     
           $stmt->execute();
           $result = $stmt->get_result();       
             if($ID = $result->fetch_assoc())
        {
       // echo 'you can login';
           $_SESSION["ID"] = $ID['email'];
            header('Location: Homepage.php');
        }
        else
        {
          'can not login';   
          header('Location: Login.php');
         }
     
     }
?>  


