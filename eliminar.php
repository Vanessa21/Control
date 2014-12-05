<?php

    require 'db.php';

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM maestro_materia WHERE id_materia = $id";
    $consulta = mysql_query($sql)or die("Error de consulta");

    print "<meta http-equiv='refresh' content='0;url=TestMateria.php'>";
    exit;

?>