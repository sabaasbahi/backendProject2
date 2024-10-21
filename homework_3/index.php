<?php

include "connect.php";


if($_SERVER['REQUEST_METHOD']== "POST"){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        if($row["usertype"]=="user"){

            $_SESSION["username"]=$username;

            header("Location: userhome.php");

        }elseif($row["usertype"]=="admin"){

            $_SESSION["username"]=$username;

            header("Location: adminhome.php");

        }else{
          if($row["usertype"]!="user" AND $row["usertype"]!="admin"){
            header("Location: index.php?error= your name or password incorrect");
          }
        }
        

     }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                </div>

                <?php
  
                    if (isset($_GET['error'])) {
                      echo '<div class="alert alert-danger error_alert" role="alert">
                      '. $_GET['error'] .'
                      </div>';
                    }
                    ?>

                <form action ="#" method = "POST">
                  <p>Please login to your account</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Username</label>
                    <input type="text" name="username" id="form2Example11" class="form-control"
                      placeholder="Enter your username" required/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" name = "password" id="form2Example22" class="form-control" required/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <!-- <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                      in</button> -->
                      <input type="submit" value="Login" >
                  </div>


                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>