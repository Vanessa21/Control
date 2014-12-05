<?php

class Materia{

    private $id;
    private $nombre;
    private $avatar;
    private $orden;
    private $estatus;

    public function createMateria(){
        echo"<br> Create Materia";
    }

    public function readMateriaG(){
        echo"<br> Read Materia G";
    }

    public function readMateriaS(){
        echo"<br> Read Materia S";
    }

    public function deleteMateria(){
        echo"<br> Delete Materia";
    }

    public function updateMateria(){
        echo"<br> Update Materia";
    }

    public function seleccionaMaestro(){
        echo"<div class='table-responsive sok_font'>";
        echo"<form action=ajax.php method=POST name=maestro>";
        echo"<table class=table table-bordered>";
        echo"<tr>";
           echo"<td>Maestro:</td>";
           echo"<td><select name=maestro class=select_sok>";
            $sql = "SELECT * FROM usuario WHERE Estatus=1 AND Nivel=2";
            $consulta = mysql_query($sql)or die("Error de consulta");
            $cuantos = mysql_num_rows($consulta);
            for($i = 0; $i < $cuantos; $i++){
                $id = mysql_result($consulta,$i,'id');
                $nombre = mysql_result($consulta,$i,'Nombre');
                $apat = mysql_result($consulta,$i,'ApellidoPaterno');
                $amat = mysql_result($consulta,$i,'ApellidoMaterno');
                echo"<option value='$id'>$nombre $apat $amat</option>";
            }
            echo"</select>";
            echo"</td>";
            echo"<td><input type=submit value=Seleccionar class=button_sok_2></td>";
        echo"</tr>";
        echo"</form>";
        echo"</div>";
    }

    public function datosMaestro($maestro){
        echo"<div class='table-responsive sok_font'>";
        echo"<table class=table table-bordered>";
        echo"<tr>";
        echo"<th>Maestro seleccionado:</th>";
        $sql = "SELECT * FROM usuario WHERE id=$maestro";
        $consulta = mysql_query($sql)or die("Error de consulta");
        $nombre = mysql_result($consulta,0,'Nombre');
        $apat = mysql_result($consulta,0,'ApellidoPaterno');
        $amat = mysql_result($consulta,0,'ApellidoMaterno');
        echo"<td>$nombre $apat $amat</td>";
        echo"</tr>";
        echo"</div>";
    }

    public function materiasAsignadas($maestro){
        echo"<div class='table-responsive sok_font'>";
        echo"<table class=table table-bordered>";
        $sql = "SELECT * FROM maestro_materia WHERE id_maestro=$maestro";
        $consulta = mysql_query($sql)or die("Error de consulta");
        $cuantos = mysql_num_rows($consulta);
        for($i = 0; $i < $cuantos; $i++){
            $id_mat = mysql_result($consulta,$i,'id_materia');

            $sql2 = "SELECT * FROM materia WHERE id=$id_mat";
            $consulta2 = mysql_query($sql2)or die("Error de consulta 2");
            $materia = mysql_result($consulta2, 0, 'nombre');
            echo"<tr>";
            echo"<td>$materia</td><td><a href='eliminar.php?id=$id_mat'>Eliminar</a></td>";
            echo"</tr>";
        }
        echo"</div>";
    }

    public function asignarMateriaMaestro($maestro){
        echo"<div class='table-responsive sok_font'>";
        echo"<table class=table table-striped>";
        echo"<form action=TestMateria.php method=POST name=materias>";
        echo"<tr><th colspan=2>Asignar materias</th></tr>";
        echo"<tr><td>Materia:</td><td><select name=materia>";
        $sql = "SELECT * FROM materia WHERE estatus=1";
        $consulta = mysql_query($sql)or die("Error de consulta");
        $cuantos = mysql_num_rows($consulta);
        for($i = 0; $i < $cuantos; $i++){
            $id_mat = mysql_result($consulta,$i,'id');
            $nombre = mysql_result($consulta,$i,'nombre');

            $sql2 = "SELECT * FROM maestro_materia WHERE id_maestro=$maestro AND id_materia=$id_mat";
            $consulta2 = mysql_query($sql2)or die("Error de consulta 2");
            $cuantos2 = mysql_num_rows($consulta2);
            if($cuantos2 > 0){
                echo"<option value=0>No disponible</option>";
            }
            else{
                echo"<option value=$id_mat>$nombre</option>";
            }
        }
        echo"</select></td>";
        echo"<tr>";
        echo"<input type=hidden id=accion name=accion value=1>";
        echo"<input type=hidden id=maestro name=maestro value=$maestro>";
        echo"</tr>";
        echo"<tr><td colspan=2 align=center><input type=submit value=Agregar class=button_sok></td></tr>";
        echo"</form></table></div>";
    }

}

?>