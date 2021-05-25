<?php 
session_start();

if(isset($_SESSION['login'])) {
    header("Location: admin.php");
    exit;
}
require 'functions.php';

// Ketika Tombol Login ditekan
if(isset($_POST['login'])) {
    $login = login($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
      <!-- Font -->
      <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
  
      
    <title>Login</title> 
    <style> 
        body {

    background-image: url( ../assets/img/slider/108618.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%; 
    opacity: 0,3;

        }
        

    </style>
        

</head>
<br><br><br>
<body>
    
<div class="container">
<a href=".." class="waves-effect waves-teal btn-flat white-text grey darken-2">Back to Dashboard</a>
</div>
 <div class="row">
        <div class="col s12 m4 offset-m4 ">
            <div class="card z-depth-5 light-blue darken-2">
                <div class="card-action cyan white-text transparent" >
                    <h3 align="center">Form Login</h3>
                </div>
                <form action="" method="POST">
                <div class="card-content">
                <?php if(isset($login['error'])) : ?>
                <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
                <?php endif; ?>
                    <div class="input-field ">
                       <label class="col s12 m12">
                            Username
                            <input type="text" name="username" autofocus autocomplete="off" required>
                        </label>
        
                    </div><br><br><br>
                    <div class="input-field">
                        <label class="col s12 m12">
                            Password
                            <input type="password" name="password">
                        </label>
                    </div><br><br><br>  
                    <div class="input-field">
                        <label>
                            <p>Jika Belum punya akun silahkan<a href="registrasi.php" class="white-text" style="padding-left: 20px">registrasi</a></p>
                        </label>
                    </div>
                    <br><br>
                    <div class="input-field">
                        <button class="btn-large waves-effect cyan btn transparent" type="submit" name="login" style="width: 100%">LOGIN</button>
                    </div><br>
                </div></form>
            </div>
        </div>
    </div>
        



     <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-2.1.1.min.js"
      ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>
</html>