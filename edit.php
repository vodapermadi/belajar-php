<?php

require("config.php");
$id = $_GET["id"];
$fetch_data = mysqli_query($connection,"SELECT * FROM tb_user WHERE id_user = $id");
$data = mysqli_fetch_assoc($fetch_data);

if(isset($_POST["submit"])){
    
    $id_user = $_POST["id_user"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];

    mysqli_query($connection,"UPDATE tb_user SET username = '$username',email = '$email',no_hp = '$no_hp' WHERE id_user = '$id_user' ");
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
        <input type="hidden" name="id_user" value="<?= $data["id_user"] ?>">
        <label for="username">username</label>
        <input type="text" name="username" id="username" value="<?= $data["username"] ?>" ><br>
        <label for="email">email</label>
        <input type="email" name="email" id="email" value="<?= $data["email"] ?>" ><br>
        <label for="no_hp">no hp</label>
        <input type="text" name="no_hp" id="no_hp" value="<?= $data["no_hp"] ?>"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>