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
<title>หน้า Log in</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<head>
<script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{app-id}',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : '{api-version}'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };

  
  (function(d, s, id) {                      // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }

</script>
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
        #login-form {
            width: 450px;
            background: rgb(255, 255, 255);
            padding: 80px 40px;
            border-top-left-radius: 100px;
            border-bottom-right-radius: 100px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            margin: 20px 0px;
        }
        #login-form h1 {
            text-align: center;
            margin-bottom: 60px;
            color: #00bcd4;
            font-size: 30px;
        }
        #login-form p {
            font-size: 16px;
            color: #333;
        }
        #login-form p a {
            color: #00bcd4;
        }
        #login-form label {
            color: #848484;
        }
        .input-box{
            border-bottom: 2px solid #adadad;
            position: relative;
            margin: 30px 0;
        }
        .input-box input{
            font-size: 20px;
            color: #333;
            border: none;
            width: 100%;
            outline: none;
            background: none;
            padding: 0 5px;
            height: 40px;
        }
        .input-box span::before{
            content: attr(data-placeholder);
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            z-index: -1;
            transition: .5s;
        }
        .input-box span::after{
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            background: linear-gradient(120deg,#2196F3,#FF5722);
            transition: .5s;
        }
        
        .focus + span::before{
            top: -5px;
        }
        .focus + span::after{
            width: 100%;
        }
        .login-btn {
            display: block;
            width: 100%;
            height: 50px;
            border: none;
            background: linear-gradient(70deg,#FBD70F,#F5E380,#FBD70F);
            background-size: 200%;
            color: #fff;
            outline: none;
            cursor: pointer;
            margin: 20px 0px 0px;
            border-radius: 50px;
            transition: .5s;
            font-size: 18px;
            letter-spacing: 1px;
        }
        .login-btn:hover{
            background-position: right;
        }
        .bottom-links{
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
        }
        .Register-btn {
            width: 10%;
            height: 50px;
            border: none;
            background: linear-gradient(70deg,#30FADF,#8EFAEC,#30FADF);
            background-size: 200%;
            color: rgb(255, 255, 255);
            outline: none;
            cursor: pointer;
            margin: 20px 1130px 50px;
            border-radius: 50px;
            transition: .5s;
            font-size: 18px;
            letter-spacing: 1px;
        }
        .Register-btn:hover{
            background-position: right;
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
        </style>
</head>
<body>
  <?php if(!isset($_SESSION["ID"])) { ?>
   
        
    <form action="LoginDB.php" method="post" id="login-form">
        <h1 style="font-size:500%;">Log In</h1>
        <i class="glyphicon glyphicon-cloud" style="font-size:20px;color:lightblue;"></i>
  
        <div class="input-box">
          
           <input type ="email"id = "email" name ="email"   title="กรุณากรอก email" required ="email" placeholder="Email"/>
             </div>
  
          <div class="input-box">
           
            <input type="password"id ="password" name ="password"  title="กรุณากรอกรหัสผ่าน" required type="password" placeholder="Password"/>
        </div>
  
        
  
        <button type="submit" class="login-btn"><a href="LoginDB.php">Log in</a></button>
       
        
    </form>
    <form action="Register.php" >
    <div>
        <button type="submit" class="Register-btn"><a href="Register.php">Register</a></button>
       </div>
        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
        <div id="status">
</div>
     </form>
   
     <?php }  ?>
   
  
    
</body>
</html>