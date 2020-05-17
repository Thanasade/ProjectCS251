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
     if(isset($_POST['subject_name'])&& $_POST['subject_ID'] 
             && $_POST['description']&& $_POST['Due_Date']&& $_POST['Date_Time'])
     {
           $subname = $_POST['subject_name'];
           $subid=$_POST['subject_ID'] ;
           $des =$_POST['description'];  
           $due= $_POST['Due_Date'];
           $time = $_POST['Date_Time'];
          echo $subname ." ". $subid." ".$des." ".$due." ". $time;
           $sql = "INSERT INTO addsubject (subject_ID ,subject_name ,description ,Due_Date ,Date_Time)
           VALUES ('$subname','$subid' ,' $des ', ' $due','  $time')"; 
           
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
   header('Location: Homepage.php');
   
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



