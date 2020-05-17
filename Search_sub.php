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
    
   ?>



<head>
<title>Search</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<head>
<style>
*{
            margin: 0;
            padding: 0;
            text-decoration: none;
            font-family: arial;
            box-sizing: border-box;
        }
        body {
          font-family: $font-family;
          font-size: $font-size;
          background-size: 200% 100% !important;
          animation: move 10s ease infinite;
          transform: translate3d(0, 0, 0);
          background: linear-gradient(45deg, #E7A7FE  10%, #90F7F3 90%);
          height: 100vh
            
        }
        @media (max-width: 575px){
        #login-form {
            width: 300px;
        }
        }
        @keyframes NO {
        from, to {
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      
        10%, 30%, 50%, 70%, 90% {
          -webkit-transform: translate3d(-10px, 0, 0);
          transform: translate3d(-10px, 0, 0);
        }
      
        20%, 40%, 60%, 80% {
          -webkit-transform: translate3d(10px, 0, 0);
          transform: translate3d(10px, 0, 0);
        }
      }
      
      @keyframes arrive {
          0% {
              opacity: 0;
              transform: translate3d(0, 50px, 0);
          }
          
          100% {
              opacity: 1;
              transform: translate3d(0, 0, 0);
          }
      }
      
      @keyframes move {
          0% {
              background-position: 0 0
          }
      
          50% {
              background-position: 100% 0
          }
      
          100% {
              background-position: 0 0
          }
      }
      .btn {
    display: block;
    width: 50%;
    padding: 20px;
    font-family: $font-family;
    font-size: 15px;
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
    
    &:focus {
        background: darken(#fff, 3%);
    }
}
.submit-btn {
            display: block;
            width: 30%;
            height: 50px;
            border: none;
            background: linear-gradient(70deg,#FBD70F,#F5E380,#FBD70F);
            background-size: 200%;
            color: black;
            outline: none;
            cursor: pointer;
            margin: 20px 0px 0px;
            border-radius: 50px;
            transition: .5s;
            font-size: 18px;
            letter-spacing: 1px;
        }
        .submit-btn:hover{
            background-position: right;
        }
        .submit-btn {
            display: block;
            width: 30%;
            height: 50px;
            border: none;
            background: linear-gradient(70deg,#FBD70F,#F5E380,#FBD70F);
            background-size: 200%;
            color: black;
            outline: none;
            cursor: pointer;
            margin: 20px 0px 0px;
            border-radius: 50px;
            transition: .5s;
            font-size: 18px;
            letter-spacing: 1px;
        }
        .submit-btn:hover{
            background-position: right;
        }
        </style>
</head>
<body>
<br>
<br>
    <center><h1 style="font-size:400%;">Search subject</h1></center>
   <br>
   <br>
    <center><form action="searchDB.php" method="post" >
       <input class="btn" type ="text" id = "subject_ID" placeholder="Subject ID"name ="subject_ID" ></type>
        <br>
            <button class="submit-btn" type="submit" ><a>Submit</a></button>
            
    </form></center>
    

</body>
</html>