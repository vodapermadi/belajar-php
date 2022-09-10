<?php

require('config.php');
$data = mysqli_query($connection,'SELECT * FROM tb_user');

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
    <a href="tambah.php">Tambah data</a>
    <table border="2" cellspacing="2" cellpadding="5">
        <thead>
            <tr>
                <th>Username</th>
                <th>email</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($data)) :?>
            <tr>
                <td><?= $row["username"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["no_hp"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row["id_user"] ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $row["id_user"] ?>">Hapus</a>
                </td>
            </tr>
            <?php endwhile?>
        </tbody>
    </table>
</body>
</html>