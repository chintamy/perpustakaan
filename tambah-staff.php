<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

    $query = mysqli_query($db, "INSERT INTO staff VALUES (
        NULL, '$nama', '$telp', '$email'
    ) ");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
</head>
<body>
    <h1>Form tambah data staff</h1>
    <br>
    <!-- REQUEST : GET, POST, PUT, PATCH -->

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama"></input><br>
        
        <br>

        <label for="telp">Telp</label>
        <input type="text" id="isbn" name="telp"></input><br>

        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"></input><br>

        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>