<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', 
    telp='$telp', email='$email' WHERE id=$id");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
</head>
<body>
    <h1>Form edit staff</h1>
    <br>
    <!-- REQUEST : GET, POST, PUT, PATCH -->

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff ['nama'] ?>" type="text" id="nama" name="nama"></input><br>
        
        <br>

        <label for="telp">TELP</label>
        <input value="<?php echo $staff ['telp'] ?>" type="number" id="telp" name="telp"></input><br>

        <br>

        <label for="email">Email</label>
        <input value="<?php echo $staff ['email'] ?>" type="email" id="text" name="email"></input><br>

        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./staff.php">Kembali ke halaman buku</a>
</body>
</html>