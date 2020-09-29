<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Register Form</title>

    </style>
</head>

<body>

    <div class="container-fluid "
        style="background: url('image/sso-work-og.jpg') no-repeat; background-position:center center;background-size: cover;height: 100vh;">

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form id="log" action="" method="POST">
                    <h1>Login Form</h1>
                    <img src="image/login.gif">

                    <div class="form-group">
                        <div class="form-group ">
                            <label for="inputEmail4">Email<span style="color: red;"><sup><b> *</b></sup></span></label>
                            <input required type="email" name="email" class="form-control" id="inputEmail4"
                                placeholder="Ex:- manoj@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4">Password<span style="color: red;"><sup><b> *</b></sup></span></label>
                            <input required type="password" name="password" class="form-control" id="inputPassword4"
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="checkbox"><input type="checkbox"> Reminder me</div>
                    <button required type="submit" name="login" class="btn btn-success btn-block">Sign in</button>
            </div>

            </form>

           <?php
           if(isset($_POST['login']))
           {
                  $email=$_POST['email'];
                  $password=$_POST['password'];
                  
                    $connection =mysqli_connect('localhost','root','','login');

                    if($connection) 
                    {
                          $create_query="INSERT INTO users (emil,password) VALUES('$email','$password')";  
                          
                          $result = mysqli_query($connection,$create_query);
                    }  
                    
                     if($result)
                    {
                      
                    }
                    else
                    {
                      echo"Error:- ".mysqli_error($connection);
                    }
           }
          
           
           
           
           
           
           ?>







        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>

    </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>