<?php

    require 'Materia.php';
    require 'db.php';
    require 'header.php';
    require 'footer.php';
echo "<br><br><br><br><br>";
    $maestro = $_POST['maestro'];

    //Creamos un objeto
    $materia = new Materia();

    $materia->datosMaestro($maestro);

    $materia->materiasAsignadas($maestro);

    $materia->asignarMateriaMaestro($maestro);






