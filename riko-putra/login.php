<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    <form action="test-login.php" method="post" class="form-login">
    
    <?php
        if(isset($_GET['pesan'])){

            if($_GET['pesan']=="gagal"){
                echo "username dan password tidak sesuai";
            }
        }
    ?>
    <div class="container">
        <div class="mt-2">
            <h4>Login</h4>
            <div class="mt-3 line ">
                <input class="" type="text" placeholder="Username" name="unm" id="" require>
            </div>
            <div class="mt-3 line">
                <input type="password" placeholder="Password" name="pw" id="" require>
            </div>
            <div class="mt-3 line">
                <button type="submit" class="btn btn-success">Login</button>
                <a href="index.php">
                <button type="button" class="btn btn-secondary">Cancel</button></a>
            </div>
            <div class="mt-3">
                <label>Dont't have an account? Click <a href="register.php">here</a></label>
            </div>
        </div>
    </div>
    
</body>
</html>