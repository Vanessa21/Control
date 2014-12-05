<?php

class Usuario{

    public $Id;
    public $Nombre;
    public $ApellidoPaterno;
    public $ApellidoMaterno;
    public $Telefono;
    public $Calle;
    public $NumeroExterior;
    public $NumeroInterior;
    public $Colonia;
    public $Municipio;
    public $Estado;
    public $CP;
    public $Correo;
    public $Usuario;
    public $Contrasena;
    public $Nivel;
    public $Estatus;

    public function createUsuario($nombre, $apellidop, $apellidom, $nivel){

        $sql ="INSERT INTO usuario (Nombre,ApellidoPaterno,ApellidoMaterno,Nivel,Estatus)
                VALUES ('$nombre','$apellidop','$apellidom','$nivel',1)";
        $consulta = mysql_query($sql)or die("Error de inserción");

    }
	
	
	


    public function updateUsuario($id,$nombre, $apellidop, $apellidom, $nivel){

        $sql2 = "UPDATE usuario SET Nombre='$nombre', ApellidoPaterno='$apellidop', ApellidoMaterno='$apellidom', Nivel='$nivel', Estatus=1
                WHERE id = $id";
        $consulta2 = mysql_query($sql2)or die("Error de actualización");

    }

    public function deleteUsuario($id){

        $sql3 = "DELETE FROM usuario WHERE id = $id";
        $consulta3 = mysql_query($sql3)or die("Error en la eliminación");

    }

    public function readUsuarioG(){

        $sql0 = "Select * From usuario where estatus = 1 ORDER BY ApellidoPaterno ASC";
        $consulta0 = mysql_query($sql0)or die("Error de conexión");

        echo"<div class='table-responsive sok_font'>";
        echo"<table class='table table-striped'>";
        echo"<tr><td colspan='5' align='center'><strong>Lista de Usuarios</strong></td></tr>";
        echo"<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th>";

        while($field = mysql_fetch_array($consulta0)){
            $this->Id = $field['id'];
            $this->Nombre = $field['Nombre'];
            $this->ApellidoPaterno = $field['ApellidoPaterno'];
            $this->ApellidoMaterno = $field['ApellidoMaterno'];
            $this->Nivel = $field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }
            echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->Nivel</td></tr></tr>";
        }
        echo"</table>";
        echo"</div>";

    }

    public function readUsuarioS($id){

        $sql0 = "Select * From usuario where estatus = 1 AND id = $id ORDER BY ApellidoPaterno ASC";
        $consulta0 = mysql_query($sql0)or die("Error de conexión");

        echo"<div class='table-responsive'>";
        echo"<table class='table table-striped'>";
        echo"<tr><td colspan='5' align='center'><strong>Lista de Usuarios</strong></td></tr>";
        echo"<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th>";

        while($field = mysql_fetch_array($consulta0)){
            $this->Id = $field['id'];
            $this->Nombre = utf8_decode($field['Nombre']);
            $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
            $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
            $this->Nivel = $field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }
            echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->Nivel</td></tr></tr>";
        }
        echo"</table>";
        echo"</div>";

    }

}

?>