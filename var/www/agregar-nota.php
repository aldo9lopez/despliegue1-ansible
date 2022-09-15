<?php
    require_once("controller/conexion.php");
    if(session_status()!=2){
        session_start();
    }
    if(!isset($_SESSION["usuario"])){
        header("Location:login");
    }else{
        $usuario = $_SESSION["usuario"];
    }
    require("model/usuario/ver_perfil.php");

    if($tipo!='Interno'){
        header("Location:index");
    }

    require_once('model/nota/registrar-nota.php');

    $titulo= "Agregar nota | Castores";

    require_once("view/common/head.php");
?>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="style/agregar-nota.css" rel="stylesheet">

</head>
<body>
    <?php
        require_once("view/nota/agregar-nota.php");
    ?>
    <script src="js/index.js"></script>
</body>
</html>