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
<title>หน้า Log in</title>
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
              margin: 0;
    padding: 0;
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
.user {
    width: 90%;
    max-width: 340px;
    margin: 10vh auto;
}

.user__header {
    text-align: center;
    margin: 20px 30px 50px;
}

.user__title {
    font-size: $font-size;
    margin-bottom: -10px;
    font-weight: 500;
    color: white;
}



.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.form__input {
    display: block;
    width: 100%;
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
.btn3 {
    display: block;
      width: 100%;
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
      .btn3:hover{
      background-position: right;
  }
    
    &:hover {
        background: darken($color-primary, 5%)
    }


.back-btn {
      display: block;
      width: 10%;
      height: 40px;
      border: none;
      background: linear-gradient(70deg,#30FADF,#8EFAEC,#30FADF);
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
 

    


        </style>
</head>
<body>
    
  <form>
      
<input type=button class="back-btn"
onClick="window.history.back()" 
value="Back">
  </form>
    <center><h1 style="font-size:400%;">Add subject</h1></center>
   <br>
   <br>
   <center> <form action="addsubDB.php" method="post" >
        <input class="btn" type ="text" id = "name" placeholder="Subject name" name ="subject_ID" ></type>
        <br>

       <input class="btn" type ="text" id = "subject_ID" placeholder="Subject ID" name ="subject_name" ></type>
        <br>

        <input class="btn" type ="text" id = "description" placeholder="Description" name ="description" ></type>
        <br>

        <input class="btn" type ="date" id = "Due_Date" placeholder="Due date" name ="Due_Date" ></type>
        <br>

        <input class="btn" type ="time" id = "Date_Time" placeholder="Date Time" name ="Date_Time" ></type>
        <br>

            <button class="submit-btn" type="submit" ><a>Submit</a></button>
            
    </form></center>
    

</body>
</html>