<?php

  $nom=$_POST['usuario'];
  $psw=$_POST['password'];
  $band=0;

  if ($nom=='' or $psw=='')
  {
      $msg='llenar toda la informacion';
      $band=1;
      header ("location:inicio.php?msg=$msg");
      exit;
  }

   if ($band==0)
   {
       require 'db.php';
       $sql="select * from usuario where Usuario like '$nom' and Contrasena like '$psw'";
       $result=mysql_query($sql) or die (mysql_error());
       $filas=mysql_num_rows($result);

       if ($filas==0)
       {
           $msg="El usuario o password no es valido";
           $band=1;
           header ("location:inicio.php?msg=$msg");
           exit;
       }
   }

if ($band==0)
{
    $act=mysql_result($result,0,'1');
    if ($act=='BAJA')
    {
        $msg="El usuario no esta activo";
        $band=1;
        header("location:inicio.php?msg=$msg");
        exit;
    }
}

if($band==0)
{
    $id=mysql_result($result,0,'Id');
    $tp=mysql_result($result,0,'Nivel');

    if($tp=='1')
    {
        header("location:cokieadmin.php?Id=$id");
        exit;
    }
    else
    {
        header ("location:cokieusuario.php?Id=$id");
        exit;
    }
}
?>
