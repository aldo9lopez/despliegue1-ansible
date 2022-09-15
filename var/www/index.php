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
    require("model/nota/seleccionar_notas.php");

    $titulo= "Inicio | Castores";

    require_once("view/common/head.php");
?>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="style/index.css" rel="stylesheet">

</head>
<body>
    <?php
        require_once("view/principal/principal.php");
    ?>
    <script src="js/index.js"></script>
</body>
</html>