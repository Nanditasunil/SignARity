<!-- registration.php -->
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="maingeneral.css" />
    <link rel="stylesheet" href="mainstyle.css" />
    <link rel="stylesheet" href="mainqueries.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
.circle-button {
  background-color: white;
  border: none;
  border-radius: 12%;
  padding: 5px 20px;
  font-size: 16px;
  cursor: pointer;
}
.cta-form input,
{
    padding: 10px
}
.cta-form label{
  padding-top:10px;
}


body{
  height:100%;
  width:100%;
  background: url('https://media.istockphoto.com/id/1371137799/photo/red-orange-defocused-abstract-blurred-motion-gradient-background.jpg?b=1&s=170667a&w=0&k=20&c=QNX5pUEXeszLRv5BYx0QCfK3B0YAqIlGeDGNfvg1ijI=')no-repeat;
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

    <title>Registration</title>
  </head>
  <body>
    <!-- <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Register</button>
    </form> -->
    <section class="section-cta" id="cta">
          <div class="container">
            <div class="cta">
              <div class="cta-text-box">
                <h2 class="heading-secondary">Welcome User!</h2>
                <p class="cta-text">
                  SignUp for a better Experience
                </p>
                    <!-- <h2>Registration</h2> -->
              <form class="cta-form" action="" method="post" autocomplete="off">
              <div>
                <tr>
                 <td><label for="name">Name : </label></td>
                  <td><input type="text" name="name" id = "name" required value=""> <br></td>
                </tr>
              </div>
              <div>
                <tr>
                <td><label for="username">Username : </label></td>
                <td><input type="text" name="username" id = "username" required value=""> <br></td>
                </tr>
              </div>
              <div>
                <tr>
                 <td><label for="email">Email : </label></td>
                 <td><input type="email" name="email" id = "email" required value=""> <br></td>
                </tr>
              <div>
              <div>
                <tr>
                 <td><label for="password">Password : </label></td>
                 <td><input type="password" name="password" id = "password" required value=""> <br></td>
              </tr>
              </div>
              <div>
                <tr>
                  <td><label for="confirmpassword">Confirm Password : </label></td>
                  <td><input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br></td>
                </tr>
              </div>
              <div>
                <tr>
                <td><button class="circle-button" type="submit" name="submit">Register</button></td>
                <td ><a class="btn btn-danger" href="login.php">Login</a></td>
                </tr>
              </div>
                  </form>
           
               </div>
            </div>
          </div>
       

    <br>
    <!-- <a href="login.php">Login</a> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </section>
  </body>
  
</html>
