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
    require("model/nota/ver_nota.php");
    require("model/nota/publicar_comentario.php");
    require("model/nota/ver_comentarios.php");

    $titulo= "Nota | Castores";

    require_once("view/common/head.php");
?>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="style/nota.css" rel="stylesheet">

</head>
<body>
    <?php
        require_once("view/nota/nota.php");
    ?>
    <script src="js/nota.js"></script>
</body>
</html>