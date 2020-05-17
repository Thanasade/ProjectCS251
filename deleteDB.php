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
     if(isset($_POST['subject_ID']))
     {
       $subid=$_POST['subject_ID'] ;
      
          echo  $subid ;      
         $sql = "DELETE FROM addsubject WHERE subject_ID= '$subid' ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
   header('Location: Homepage.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
      }
     else
     {
         echo 'ERROR';
     }
     
?>



