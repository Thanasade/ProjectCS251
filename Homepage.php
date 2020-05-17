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


<!DOCTYPE html>

<head>
<title>Home</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<head>
<style>
h1 {
    color:black;
}
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
      .button {
  display: inline-block;
  padding: 60px 200px;
  margin: 0px 400px;
  font-size: 30px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #F3ED8C;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #C4F38C}

.button:active {
  background-color: #8CF3B0;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button2 {
  display: inline-block;
  padding: 60px 200px;
  margin: 0px 400px;
  font-size: 30px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #F3ED8C;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button2:hover {background-color: #C4F38C}

.button2:active {
  background-color: #8CF3B0;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button3 {
  display: inline-block;
  padding: 70px 200px;
  margin: 0px 400px;
  font-size: 30px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #F3ED8C;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button3:hover {background-color: #C4F38C}

.button3:active {
  background-color: #8CF3B0;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button4 {
  display: inline-block;
  padding: 60px 200px;
  margin: 0px 400px;
  font-size: 30px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #F3ED8C;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button4:hover {background-color: #C4F38C}

.button4:active {
  background-color: #8CF3B0;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button5 {
  
  padding: 30px 50px;
  margin: -10px 1000px;
  bottom:40px;
  font-size: 30px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #D95D70;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button5:hover {background-color: #F7A34F}

.button5:active {
  background-color: #F9F95C;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

      </style>
</head>

<body>

   
    <br>
   <center><h1 style="font-size:400%;">ระบบจัดตารางเวลา</h1></center>
   <br>
    <form action="addsubjec.php" method="post" >
<button class="button" type="submit"><a>Add subject</a></button>
  </form>
</div>
    <br>
    <br>
    
    <form action="delete_subject.php" method="post" >
<button class="button2" type="submit"><a>Delete subject</a></button>
  </form>
  <br>
    <br>
    <form action="Search_sub.php" method="post" >
<button class="button3" type="submit"><a>Search</a></button>
  </form>
    <br>
    <br>
    <form action="All_sub.php" method="post" >
<button class="button4" type="submit"><a>All subject</a></button>
  </form>
       <br>
    <br>
    <div>
    <form action="Login.php" method="post" >
        <?php  session_destroy();?>
<button class="button5" type="submit"><a>Logout</a></button>
  </form>
  </div>
</div>

</body>
</html>