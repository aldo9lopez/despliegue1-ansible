

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
<?php
    session_start();
    session_destroy();

    echo '<script type="text/javascript">';
    echo ' window.location.replace("login")';
    echo "</script>";

?>

</head>
<body>
</body>
</html>