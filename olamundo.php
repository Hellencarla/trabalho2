<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8"/>

</head>
<body>

<center style="margin-top: 13%">
<?php
  $mostrar= array(
      "img"=> "https://i.pinimg.com/originals/24/9e/d4/249ed433d55ed411741c4d2e56192cdf.jpg",);
  $nome= "Gustavo";
  $apelido= "Guto";
  $bairro= "Guarani";
  $rua="ACM";
  $cidade= "Montes Claros";
  $email= "gugu@gmail.com";
  $curso= "Informática";
  $disc= "Progamação";
      echo "<img src=".$mostrar["img"]." style=\"width:170px;height:200px;\">";
      echo "</br>";
      echo "<b>Nome:</b> ".$nome."</br>";
      echo "<b>Apelido:</b> ".$apelido."</br>";
      echo "</br>";
      echo "<b>Endereço:</b>"."</br>";
      echo "<b>Bairro:</b> ".$bairro."</br>";
      echo "<b>Rua:</b>".$rua."</br>";
      echo "<b>Cidade:</b>".$cidade."</br>";
      echo "</br>";
      echo "<b>Email:</b>". $email."</br>";
      echo "<b>Curso:</b>".$curso."</br>";
      echo"<b>Diciplina</b>:".$disc;
?>
</center>
</body>

</html>