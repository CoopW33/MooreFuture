<?php
session_start();
include_once 'Dbconnect.php';
if(isset($_SESSION['users'])!="")
{
 header('Location: sp/index.html');
}
if(isset($_POST['btn-signup'])) //when signup button is pressed
{
  $first = mysql_real_escape_string($_POST['first']);
  $last  = mysql_real_escape_string($_POST['last']);
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
  $password2 = mysql_real_escape_string($_POST['password2']);
  $birthday = mysql_real_escape_string($_POST['birthday']); 

  if(ctype_alnum($password)){
    ?>
    <script>alert('Error: Password must have at least one special character.')</script>
    <?php
    $special = true;
  }else{
    if(strlen($password)>6){
      if(preg_match('`[A-Z]`',$password)){
        if(preg_match('`[a-z]`',$password)){
          if(preg_match('`[0-9]`',$password)){
            if($password === $password2){
            if(mysql_query("INSERT INTO users(Company,email,password,Phone)VALUES('$Company','$email','$upass','$Phone')")){
              ?>
              <script>alert('Successfully registered - Thank you for signing up!');</script>
              <?php
            }else{
              ?>
              <script>alert('Sorry! There has been an error while registering you - Please try again');</script>
              <?php
            }
          }else{
            ?>
            <script>alert('Error: You entered two different passwords.')
            <?php
            $password3 = true;
            }
          }else{
            ?>
            <script>alert('Error: Password must have at least one number.')
            <?php
            $number = true;
          }          
        }else{
          ?>
          <script>alert('Error: Password must have at least one lowercase letter.')</script>
          <?php
          $lowercase = true;
        }
      }else{
        ?>
        <script>alert('Error: Your password must have atleat one uppercase letter')</script>
        <?php
        $uppercase = true;
      }
    }else{
      ?>
      <script>alert('Error: Password must be longer then 6 characters.')</script>
      <?php
      $length = true;
    }
  }
}
?>


<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='signup.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="formiteration6.js"></script>
    </head>
    <body>
    <div id="login-form">

      <form method="post">
        <h1>Sign Up</h1>


        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name"> First Name:</label>
          <input type="text" name="first" placeholder="First Name" required>
          
          <label for="last">Last Name:</label>
          <input type="text" name="last" placeholder="Last Name" required>
          
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="example@gmail.com" required>

          <label for="password">Password:</label>
          <?php
            if($password3 === false){
              if($number === false){
                if($lowercase === false){
                  if($uppercase === false){
                    if($length === false){

                    }else{
                      echo 'Error: Password too short.';
                    }
                  }else{
                    echo 'Error: Password must have one uppercase letter.';
                  }
                }else{
                  echo 'Error: Password must have one lowercase letter.';
                }
              }else{
                echo 'Error: Password must have at least one number.';
              }
            }else{
              echo 'Error: You entered two different passwords.';
            }
          ?>
          <input type="password" name="password" placeholder="Password" required>

          <label for="password">Password Confirmation:</label>
          <input type="password" name="password2" placeholder="Password" required>

          
          <label>Date of Birth:</label>
      <label for="size_1"></label><input type="date" name="birthday" id="birthday" value="dd/mm/yy" required />
        </fieldset>
        
        </fieldset>
        <button name="btn-signup" type="submit" value="submit">Sign Up</button>
      </form>
    </div>
    </body>
</html>