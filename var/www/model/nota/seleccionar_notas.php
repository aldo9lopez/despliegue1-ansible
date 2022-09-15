<?php
    $sql="SELECT A.idnota, A.fecha,
    (SELECT CONCAT(B.nombre,' ',B.apepaterno) FROM personal B WHERE B.idpersonal=A.personal) AS Nombre 
    FROM nota A ORDER BY A.idnota DESC, A.fecha DESC";
    $resultado=$base->prepare($sql);
    $resultado->execute();
    $notas=$resultado->fetchAll((PDO::FETCH_OBJ));
?>