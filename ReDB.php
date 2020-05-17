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
     
     if(isset($_POST['name'])&& $_POST['surname'] && $_POST['email']&& $_POST['password'])
     {
           $name = $_POST['name'];
           $surname =$_POST['surname'];
           $email  = $_POST['email'];  
           $password = md5($_POST['password']);
           echo $name." ". $surname." ".$email." ".$password;
           $sql = "INSERT INTO user_people(name, surname, email,pass_id)
           VALUES ('$name','$surname' ,'$email', '$password')";
           
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
   header('Location: Login.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
      }
     else
     {
         echo 'ERROR';
     }
?>  
