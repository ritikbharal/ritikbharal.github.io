<?php
  
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./../../bootstrap_4.4.1.min.css">

  </head>

  <body>


    <div class="container">



      <div>

        <form method="post" class="w-75 m-auto" autocomplete="off" action="login.php">

            <legend>
              <div class="home-text mt-5 py-3 m-0">
                      <h3 style="font-size: 5.5vw;">
                        Enter the details: 
                      </h3>

                    </div>
                </legend>

            <div class="row">
              <label class="label1">Username</label>
              <input type="text" class="username form-control" name="username">
            </div><br><br>

            <div class="row">
              <label class="label2">Password</label>
              <input type="password" class="password form-control" name="password">
            </div><br><br><br>

            <div class="row">
              <div class="col">
                <input type="submit" class="form-control btn btn-primary" value="Log-in" name="log-in">
              </div>
              <div class="col">
                <input type="submit" class="form-control btn btn-default" value="Sign-Up" name="sign-up">
              </div>
            </div>

        </form>
        
      </div>



    </div>





    <!--  PHP for checking and redirecting  -->

  <?php

    $server="localhost";
    $user="root";
    $pass="";


    $con= mysql_connect($server, $user, $pass);

    if (! $con) 
    
      echo "Failed to connect<br>";

      mysql_select_db("notes");




    if(isset($_POST["log-in"]))

    {

      $p1 = $_POST["username"];
      $p2 = $_POST["password"];


      //  mySql  connection


      $sql= " SELECT * from data where username = '$p1' ";


      $result=mysql_query($sql, $con);


        while ($row=mysql_fetch_assoc($result))

      {

          $uname = $row["username"];  // picking data from table 
          $pass = $row["password"];
          $name = $row["name"];
          $fixkey = $row["fixkey"];


          //  Checking type of data

          if ($uname==$p1 && $pass==$p2 ) 
          {

            $_SESSION["username"] = $p1;
            $_SESSION["password"] = $p2;
            $_SESSION["name"] = $name;
            $_SESSION["fixkey"] = $fixkey;

            header( "Location:notes.php" );

            exit();

          }

          else
          {
            echo "Wrong username or password";
          }

      }

    }



    if(isset($_POST["sign-up"]))

    {
        header( "Location:signup.php" );

        exit();
    }
    
    

  ?>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>