<?php
$id=$_GET['Id'];
if($id=='')
{
    $msg="NO iniciaste sesion";
    header("location:inicio.php?msg=$msg");
    exit;
}
else
{

    setCookie(id,$id);
    setCookie(usuario);
    setCookie(estatus,1);
    setCookie(Nivel,1);
    header ("location:Admin.php?msg=$msg");
    exit;
}
?>