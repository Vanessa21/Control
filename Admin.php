<?php
$id=$_COOKIE['id'];
$usu=$_COOKIE['usuario'];
$acc=$_COOKIE['estatus'];
$tp=$_COOKIE['Nivel'];
if($id=='' or $acc=='' or $tp=='')
{
    header("location:inicio.php");
    exit;
}
else
    if($tp!='1')
    {
        echo "Esta pantalla solo puede ser vista por el administrador";
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<?php
include ('header.php');
include ('footer.php');

?>



    <!-- contenido de la pagina -->

echo "<br><br><br><br><br><br>";
        <div class="col">
            <?php
            require 'db.php';
            $sql0 = "Select * From usuario where id=$id";
            $consulta0 = mysql_query($sql0)or die("Error de conexión");
            $Nombre =mysql_result($consulta0,0,'Nombre');
            $APP =mysql_result($consulta0,0,'ApellidoPaterno');
            $APM =mysql_result($consulta0,0,'ApellidoMaterno');
            echo" <table align='center'><tr><td><center><h3><font color='black'><b>BIENVENIDO(A)  :</b></font></h10></center>".
            "<center><h1><font color='black'><b>$Nombre $APP $APM</b></font></h10></center></td></tr>";
            ?>
        <center><tr><td><img src="images/usuario.jpg" width="250" height="250" align='center'>
                <?php
               // echo"HOY:"."",date ("d/m/Y");
               // echo"</td></tr></center></table><br>";
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