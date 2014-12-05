<?php
$id=$_COOKIE['id'];
$acc=$_COOKIE['estatus'];
$tp=$_COOKIE['Nivel'];
if($id=='' or $acc=='' or $tp=='')
{
    header("location:inicio.php");
    exit;
}
else
    if($tp!='2')
    {
        echo "Esta pantalla solo puede ser vista por el administrador";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
include ('header1.php');
include ('footer1.php');

?>
<!-- contenido de la pagina -->

echo "<br><br><br><br><br><br>";
<div class="col">
    <?php
    require 'db.php';
    $sql0 = "Select * From usuario where id=$id";
    $consulta0 = mysql_query($sql0)or die("Error de consulta 0");
    $Nombre =mysql_result($consulta0,0,'Nombre');
    $APP =mysql_result($consulta0,0,'ApellidoPaterno');
    $APM =mysql_result($consulta0,0,'ApellidoMaterno');
    echo" <table align='center'><tr><td><center><h10><font color='blue'><b>BIENVENIDO  :</b></font></h10></center>".
        "<center><h10><font color='blue'><b>$Nombre $APP $APM</b></font></h10></center></td></tr>";
    ?>
    <center><tr><td>
                <?php
                echo"HOY:"."",date ("d/m/Y");
                echo"</td></tr></center></table><br>";
                ?>
                <?php
                require 'db.php';
                $sql1="select * from maestro_materia where id_maestro=$id";
                $consulta1=mysql_query($sql1) or die ("Error de consulta 1");
                echo"<div class='table-responsive'>";
                echo"<table class='table table-striped'>";
                echo"<tr><td colspan='5' align='center'><strong>Lista de Materias</strong></td></tr>";
                echo"<tr><th>Id</th><th>Nombre</th>";
                while($field = mysql_fetch_array($consulta1)){
                    $Id = $field['id'];
                    $Nombrem = $field['id_materia'];
                    switch($Nombrem){
                        case 1:
                            $Nombrem = "Matematicas";
                            break;
                        case 2:
                            $Nombrem = "Español";
                            break;
                        case 3:
                            $Nombrem = "Ingles";
                            break;
                        case 4:
                            $Nombrem = "Programcacion";
                            break;
                        case 5:
                            $Nombrem = "Admin. del Tiempo";
                            break;
                    }
                    echo"<tr><td>$Id</td><td>$Nombrem</td></tr></tr>";
                }
                echo"</table>";
                echo"</div>";

                ?>
</div>
<div class="cl">&nbsp;</div>
<br>
</section>

</div>
<!-- end of main -->

</div>
</div>
<!-- end of contenido -->

<!-- end of shell -->
<div id="footer-push"></div>
<!-- wrapper -->
<!-- footer -->

</div>
<!-- end of footer -->
</body>
</html>