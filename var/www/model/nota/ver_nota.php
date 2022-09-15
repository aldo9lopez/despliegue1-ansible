<?php
    $idnota = $_GET["id"];
    $sql="SELECT * FROM nota WHERE idnota=:nota";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":nota",$idnota);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $nota_personal = $registro["personal"];
    $contenido = $registro["contenido"];
    $fecha = $registro["fecha"];


    $sql="SELECT nombre, apepaterno FROM personal WHERE idpersonal=:personal";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":personal",$nota_personal);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $nombre_nota = $registro["nombre"] . " " . $registro["apepaterno"]  ;


?>