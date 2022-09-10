<?php

require("config.php");
$id = $_GET["id"];

mysqli_query($connection,"DELETE FROM tb_user WHERE id_user = $id");
echo "
    <script>
        document.location.href = 'index.php'
    </script>
";

?>