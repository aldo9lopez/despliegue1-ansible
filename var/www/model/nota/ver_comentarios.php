<?php
    $sql="SELECT A.idcomentario, A.comentario, A.fecha, A.hora,
    (SELECT CONCAT(B.nombre,' ',B.apepaterno) FROM personal B WHERE B.idpersonal=A.personal) AS Nombre 
    FROM comentario A WHERE A.nota = :nota ORDER BY A.idcomentario DESC, A.fecha DESC";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":nota",$idnota);
    $resultado->execute();
    $comentarios=$resultado->fetchAll((PDO::FETCH_OBJ));
?>