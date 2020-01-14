<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body style='margin-top:90px; background-image: url("background.jpg"); '>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="register.php" method = "POST">
                <div class="alert alert-warning">
                        <p><strong>You don't have account yet!</strong>Please register.</p>
                </div>
                <button name="register" class="btn btn-primary btn-block">Register</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>