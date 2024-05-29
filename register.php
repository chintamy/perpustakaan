<?php
    session_start();

    if (isset($_SESSION["email"])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class= "container w-75">
    <h2 class="my-4"> Register </h2>

<form method="POST" action="./registeredprocessed.php">
   
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input required="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>

    <button type="submit" name="submit" class="btn btn-success">Login</button>
    <button type="submit" name="submit" class="btn btn-success">Register</button>
 </form>

</div>
</body>
</html>