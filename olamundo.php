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
      echo "Nome: ".$nome."</br>";
      echo "Apelido: ".$apelido."</br>";
      echo "</br>";
      echo "Endereço:"."</br>";
      echo "Bairro: ".$bairro."</br>";
      echo "Rua:".$rua."</br>";
      echo "Cidade:".$cidade."</br>";
      echo "</br>";
      echo "Email:". $email."</br>";
      echo "Curso:".$curso."</br>";
      echo"Diciplina:".$disc;
?>
</center>
</body>

</html>