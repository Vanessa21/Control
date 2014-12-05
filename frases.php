<html>
<link rel="stylesheet" href="estiloscuerpo.css" type="text/css" />
<b><marquee><font color='#993300' id='frases' size='14'>
<br><br>
<br><br>
<br><br>
<br><br>
<?php
$frases=array(
1=>"HOLA, BIENVENIDO",
2=>"BONITO DIA",
3=>"EXCELENTE SEMANA",
4=>"DISFRUTA DEL SISTEMA",
5=>"TODO TIENE UN PROPOSITO",
6=>"DISFRUTA DE LA VIDA",
7=>"SERA UN GRAN DIA",
8=>"PERDONAR, ES UN ESTILO DE VIDA",
9=>"INICIA EL DIA CON UNA SONRISA",
10=>"DEPIRTA A LA VIDA",
12=>"BIENVENIDO AL TRABAJO,DISFRUTALO",
13=>"¡HOLA! NOS VEMOS DE NUEVO",
);
$aleatorio=rand(1,13);
echo"$frases[$aleatorio]";
?>
</font></marquee></b>
</html>