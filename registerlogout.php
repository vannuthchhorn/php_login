<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body  style='margin-top:90px; background-image: url("register.jpg");background-size:cover;'>
    <div class="container">
    <form action="process.php" method = "post">

        <div class="alert alert-success" role="alert">    
            Register Success!!! congradtulation you can use the application.
        </div>

        <button type="submit" name="logout" class="btn btn-primary btn-block" >Log Out</button>
        <br>
        <br>
        <br>
        <br>
        <div class="alert alert-light" role="alert">
        <div class="card p-1">
        <!-- username -->
        <p><strong>Username:</strong> <?php 
                    session_start();
                    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                ?>
        </p>
        </div>
        <div class="card p-1">
        <!-- passowrd -->
            <p><strong>Password:</strong>
            <?php 
                 if(isset($_SESSION['password']) && !empty($_SESSION['password'])) {
                    echo $_SESSION['password'];
                }
            ?>
            </p>
        </div>
        <div class="card p-1">
        <!-- email -->
            <p><strong>Email:</strong>
            <?php 
                 if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                    echo $_SESSION['email'];
                }
            ?>
            </p>
        </div>
        <div class="card p-1">
        <!-- message -->
            <p><strong>Message:</strong>
            <?php 
                 if(isset($_SESSION['message']) && !empty($_SESSION['message'])) {
                    echo $_SESSION['message'];
                }
            ?> 
            </form>
        </div>
    </div>
</body>
</html>