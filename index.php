<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
if(isset($_POST["jugar"]))
{
	if($_POST["nombre_negro"]!=NULL && $_POST["nombre_blanco"]!=NULL)
	{
		$_SESSION["nombre_negro"]=$_POST["nombre_negro"];
		$_SESSION["nombre_blanco"]=$_POST["nombre_blanco"];		
		$_SESSION["inicio"]=true;
		header("location:juego.php");		
	}
	else
	{
		echo "Por favor asegurese de ingresar los nombres de los jugadores \n";	
	}
}
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>nombre del jugador negro:
    <input type="text" name="nombre_negro" id="nombre" />
  </p>
  <p>nombre del jugador blanco:
    <input type="text" name="nombre_blanco" id="nombre2" />
</p>
  <p>
    <input type="submit" name="jugar" id="jugar" value="Jugar" />
  </p>
</form>
</body>
</html>
