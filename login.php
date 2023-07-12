<!-- login.php -->
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="maingeneral.css" />
    <link rel="stylesheet" href="mainstyle.css" />
    <link rel="stylesheet" href="mainqueries.css" />
  </head>
  <style>
  .circle-button {
  background-color: white;
  border: none;
  border-radius: 12%;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

body{
  height:100%;
  width:100%;
  background: url('https://images.pexels.com/photos/7605677/pexels-photo-7605677.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2s')no-repeat;
    background-position: center;
    background-size: cover;
}
.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}


  </style>
  <body>
    <!-- <h2>Login</h2> -->
    <section class="section-cta" id="cta">
          <div class="container">
            <div class="cta">
              <div class="cta-text-box">
                <h2 class="heading-secondary">Login</h2>
    <form class="cta-form" action="" method="post" autocomplete="off">
      <div>
        <tr>
        <td><label for="usernameemail">Username or Email : </label></td>
        <td><input type="text" name="usernameemail" id = "usernameemail" required value=""> <br></td>
        </tr>
      </div>
      <div>
      <tr>
      <td><label for="password">Password : </label></td>
      <td> <input type="password" name="password" id = "password" required value=""> <br></td>  
      </tr>
      </div>
      <div>
        <tr>
      <td><button class="circle-button" type="submit" name="submit">Login</button></td>
      </tr>
      </div>
    </form>
    <br>
    <a href="registeration.php">Dont Have an account? Register Now</a>
    </form>
           
           </div>
       </div>
             </div>
           </section>
  </body>
</html>


