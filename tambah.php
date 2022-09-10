<?php

require("config.php");

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];

    mysqli_query($connection,"INSERT INTO tb_user VALUES ('','$username','$email','$no_hp')");
    echo "
    <script>
        document.location.href = 'index.php'
    </script>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username"><br>
        <label for="email">email</label>
        <input type="email" name="email" id="email"><br>
        <label for="no_hp">no hp</label>
        <input type="text" name="no_hp" id="no_hp"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>