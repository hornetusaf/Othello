<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
a:link {
	color: #FFF;
}
a:visited {
	color: #FFF;
}
</style>
</head>

<?php

if(isset($_GET["reiniciar"]))
{
	session_destroy();
	header("location:index.php");
}

if($_SESSION["inicio"]==true)
{
	for($i=0;$i<8;$i++)
		for($j=0;$j<8;$j++)
			$_SESSION["matriz"][$i][$j]=0;
			
	$_SESSION["matriz"][3][3]=1;
	$_SESSION["matriz"][3][4]=2;
	$_SESSION["matriz"][4][3]=2;
	$_SESSION["matriz"][4][4]=1;
	$_SESSION["turno"]=1;
	$_SESSION["puntajenegro"]=0;
	$_SESSION["puntajeblanco"]=0;
	
	$_SESSION["inicio"]=false;
}

if(isset($_GET["fila"]) && isset($_GET["columna"]))
{	
	if($_SESSION["turno"]==2)
	{
		$_SESSION["matriz"][$_GET["fila"]][$_GET["columna"]]=1;
		$a=$_GET["fila"]+1;
		$b=$_GET["columna"];
		while($a<8)
		{					
			if($_SESSION["matriz"][$a][$b]==2)
			{
				$_SESSION["matriz"][$a][$b]=1;
				$a++;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]-1;
		$b=$_GET["columna"];
		while($a>0)
		{					
			if($_SESSION["matriz"][$a][$b]==2)
			{
				$_SESSION["matriz"][$a][$b]=1;
				$a--;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"];
		$b=$_GET["columna"]+1;
		while($b<8)
		{					
			if($_SESSION["matriz"][$a][$b]==2)
			{
				$_SESSION["matriz"][$a][$b]=1;
				$b++;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"];
		$b=$_GET["columna"]-1;
		while($b>0)
		{					
			if($_SESSION["matriz"][$a][$b]==2)
			{
				$_SESSION["matriz"][$a][$b]=1;
				$b--;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]+1;
		$b=$_GET["columna"]+1;
		while($b<8 && $a<8)
		{					
			if($_SESSION["matriz"][$a][$b]==2)
			{
				$_SESSION["matriz"][$a][$b]=1;
				$b++;
				$a++;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]-1;
		$b=$_GET["columna"]-1;
		while($b>0 && $a>0)
		{					
			if($_SESSION["matriz"][$a][$b]==2)
			{
				$_SESSION["matriz"][$a][$b]=1;
				$b--;
				$a--;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]+1;
		$b=$_GET["columna"]-1;
		while($b>0 && $a<8)
		{					
			if($_SESSION["matriz"][$a][$b]==2)
			{
				$_SESSION["matriz"][$a][$b]=1;
				$b--;
				$a++;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]-1;
		$b=$_GET["columna"]+1;
		while($a>0 && $b<8)
		{					
			if($_SESSION["matriz"][$a][$b]==2)
			{
				$_SESSION["matriz"][$a][$b]=1;
				$b++;
				$a--;				
			}
			else
				break;						
		}		
	}
	else
	{
		$_SESSION["matriz"][$_GET["fila"]][$_GET["columna"]]=2;
		$a=$_GET["fila"]+1;
		$b=$_GET["columna"];
		while($a<8)
		{					
			if($_SESSION["matriz"][$a][$b]==1)
			{
				$_SESSION["matriz"][$a][$b]=2;
				$a++;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]-1;
		$b=$_GET["columna"];
		while($a>0)
		{					
			if($_SESSION["matriz"][$a][$b]==1)
			{
				$_SESSION["matriz"][$a][$b]=2;
				$a--;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"];
		$b=$_GET["columna"]+1;
		while($b<8)
		{					
			if($_SESSION["matriz"][$a][$b]==1)
			{
				$_SESSION["matriz"][$a][$b]=2;
				$b++;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"];
		$b=$_GET["columna"]-1;
		while($b>0)
		{					
			if($_SESSION["matriz"][$a][$b]==1)
			{
				$_SESSION["matriz"][$a][$b]=2;
				$b--;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]+1;
		$b=$_GET["columna"]+1;
		while($b<8 && $a<8)
		{					
			if($_SESSION["matriz"][$a][$b]==1)
			{
				$_SESSION["matriz"][$a][$b]=2;
				$b++;
				$a++;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]-1;
		$b=$_GET["columna"]-1;
		while($b>0 && $a>0)
		{					
			if($_SESSION["matriz"][$a][$b]==1)
			{
				$_SESSION["matriz"][$a][$b]=2;
				$b--;
				$a--;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]+1;
		$b=$_GET["columna"]-1;
		while($b>0 && $a<8)
		{					
			if($_SESSION["matriz"][$a][$b]==1)
			{
				$_SESSION["matriz"][$a][$b]=2;
				$b--;
				$a++;				
			}
			else
				break;						
		}
		
		$a=$_GET["fila"]-1;
		$b=$_GET["columna"]+1;
		while($a>0 && $b<8)
		{					
			if($_SESSION["matriz"][$a][$b]==1)
			{
				$_SESSION["matriz"][$a][$b]=2;
				$b++;
				$a--;				
			}
			else
				break;						
		}		
	}
}

if($_SESSION["turno"]==1)
{
	for($i=0;$i<8;$i++)
		for($j=0;$j<8;$j++)
		{
			if($_SESSION["matriz"][$i][$j]==3)
				$_SESSION["matriz"][$i][$j]=0;
		}
	
	for($i=0;$i<8;$i++)
		for($j=0;$j<8;$j++)
		{
			if($_SESSION["matriz"][$i][$j]==1)
			{
				$a=$i+1;
				$b=$j;
				while($a<8)
				{					
					if($_SESSION["matriz"][$a][$b]==2)
						$a++;
					else
						break;						
				}
				if($_SESSION["matriz"][$a-1][$b]==2)
					$_SESSION["matriz"][$a][$b]=3;
				
				$a=$i-1;
				$b=$j;
				while($a>0)
				{					
					if($_SESSION["matriz"][$a][$b]==2)
						$a--;
					else
						break;						
				}
				if($_SESSION["matriz"][$a+1][$b]==2)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i;
				$b=$j+1;
				while($b<8)
				{					
					if($_SESSION["matriz"][$a][$b]==2)
						$b++;
					else
						break;						
				}
				if($_SESSION["matriz"][$a][$b-1]==2)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i;
				$b=$j-1;
				while($b>0)
				{					
					if($_SESSION["matriz"][$a][$b]==2)
						$b--;
					else
						break;						
				}
				if($_SESSION["matriz"][$a][$b+1]==2)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i+1;
				$b=$j+1;
				while($a<8 && $b<8)
				{					
					if($_SESSION["matriz"][$a][$b]==2)
					{
						$a++;
						$b++;
					}
					else
						break;						
				}
				if($_SESSION["matriz"][$a-1][$b-1]==2)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i-1;
				$b=$j-1;
				while($a>0 && $b>0)
				{					
					if($_SESSION["matriz"][$a][$b]==2)
					{
						$a--;
						$b--;
					}
					else
						break;						
				}
				if($_SESSION["matriz"][$a+1][$b+1]==2)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i-1;
				$b=$j+1;
				while($a>0 && $b<8)
				{					
					if($_SESSION["matriz"][$a][$b]==2)
					{
						$a--;
						$b++;
					}
					else
						break;						
				}
				if($_SESSION["matriz"][$a+1][$b-1]==2)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i+1;
				$b=$j-1;
				while($b>0 && $a<8)
				{					
					if($_SESSION["matriz"][$a][$b]==2)
					{
						$a++;
						$b--;
					}
					else
						break;						
				}
				if($_SESSION["matriz"][$a-1][$b+1]==2)
					$_SESSION["matriz"][$a][$b]=3;			
				
			}
		}
		
	$_SESSION["turno"]=2;
}
else
{
for($i=0;$i<8;$i++)
		for($j=0;$j<8;$j++)
		{
			if($_SESSION["matriz"][$i][$j]==3)
				$_SESSION["matriz"][$i][$j]=0;
		}
	
	for($i=0;$i<8;$i++)
		for($j=0;$j<8;$j++)
		{
			if($_SESSION["matriz"][$i][$j]==2)
			{
				$a=$i+1;
				$b=$j;
				while($a<8)
				{					
					if($_SESSION["matriz"][$a][$b]==1)
						$a++;
					else
						break;						
				}
				if($_SESSION["matriz"][$a-1][$b]==1)
					$_SESSION["matriz"][$a][$b]=3;
				
				$a=$i-1;
				$b=$j;
				while($a>0)
				{					
					if($_SESSION["matriz"][$a][$b]==1)
						$a--;
					else
						break;						
				}
				if($_SESSION["matriz"][$a+1][$b]==1)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i;
				$b=$j+1;
				while($b<8)
				{					
					if($_SESSION["matriz"][$a][$b]==1)
						$b++;
					else
						break;						
				}
				if($_SESSION["matriz"][$a][$b-1]==1)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i;
				$b=$j-1;
				while($b>0)
				{					
					if($_SESSION["matriz"][$a][$b]==1)
						$b--;
					else
						break;						
				}
				if($_SESSION["matriz"][$a][$b+1]==1)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i+1;
				$b=$j+1;
				while($a<8 && $b<8)
				{					
					if($_SESSION["matriz"][$a][$b]==1)
					{
						$a++;
						$b++;
					}
					else
						break;						
				}
				if($_SESSION["matriz"][$a-1][$b-1]==1)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i-1;
				$b=$j-1;
				while($a>0 && $b>0)
				{					
					if($_SESSION["matriz"][$a][$b]==1)
					{
						$a--;
						$b--;
					}
					else
						break;						
				}
				if($_SESSION["matriz"][$a+1][$b+1]==1)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i-1;
				$b=$j+1;
				while($a>0 && $b<8)
				{					
					if($_SESSION["matriz"][$a][$b]==1)
					{
						$a--;
						$b++;
					}
					else
						break;						
				}
				if($_SESSION["matriz"][$a+1][$b-1]==1)
					$_SESSION["matriz"][$a][$b]=3;
					
				$a=$i+1;
				$b=$j-1;
				while($b>0 && $a<8)
				{					
					if($_SESSION["matriz"][$a][$b]==1)
					{
						$a++;
						$b--;
					}
					else
						break;						
				}
				if($_SESSION["matriz"][$a-1][$b+1]==1)
					$_SESSION["matriz"][$a][$b]=3;			
				
			}
		}
		
	$_SESSION["turno"]=1;
}

	$_SESSION["puntajenegro"]=0;
	$_SESSION["puntajeblanco"]=0;	

	for($i=0;$i<8;$i++)
		for($j=0;$j<8;$j++)
		{			
			if($_SESSION["matriz"][$i][$j]==1)
				$_SESSION["puntajenegro"]++;
			if($_SESSION["matriz"][$i][$j]==2)
				$_SESSION["puntajeblanco"]++;			
		}
		
	$i=0;
	$j=0;
	$enc=false;
	while($i<8 && !$enc)
	{
		while($j<8 && !$enc)
		{		
			if($_SESSION["matriz"][$i][$j]==0 || $_SESSION["matriz"][$i][$j]==3)
			{
				$enc=true;
			}
			$j++;			
		}
		$i++;
	}
	
	if(!$enc)
		echo "juego finalizado";
?>

<body>
<form id="form1" name="form1" method="get" action="">
<table border="1" cellpadding="1" cellspacing="1">
<?php
  for($i=0;$i<8;$i++)
  {
  ?>
    <tr>
    <?php
	for($j=0;$j<8;$j++)
	{
		if($_SESSION["matriz"][$i][$j]==0)//verde
		{
		?>
   	  <td><img src="Imagenes/verde.jpg" width="25" border="1" heigth="25"/></td>
      <?php
		}
		if($_SESSION["matriz"][$i][$j]==2)//blanco
		{
		?>
   	  <td><img src="Imagenes/blanco.jpg" width="25" border="1" heigth="25"/></td>      
   	  <?php
		}
		if($_SESSION["matriz"][$i][$j]==1)//negro
		{
		?>
	  <td><img src="Imagenes/negro.jpg" width="25" border="1" heigth="25"/></td>
   	  <?php		
		}
		if($_SESSION["matriz"][$i][$j]==3)//disponible
		{
		?>
   	  <td><a href="juego.php?fila=<?php echo $i;?>&columna=<?php echo $j;?>"><img src="Imagenes/dispo.jpg" width="25" border="1" heigth="25"/></a></td>      
   	  <?php
		}
	}
	?>
    </tr>
    <?php
  }
?>
</table>

  <p>Jugador Negro: <?php echo $_SESSION["nombre_negro"]; ?> puntaje: <?php echo $_SESSION["puntajenegro"]; ?></p> 
  <p>Jugador Blanco: <?php echo $_SESSION["nombre_blanco"]; ?> puntaje: <?php echo $_SESSION["puntajeblanco"]; ?></p>
  <p>Turno del jugador: <?php 
  if($_SESSION["turno"]==1) 
  	echo $_SESSION["nombre_blanco"]; 
  else 
    echo $_SESSION["nombre_negro"];  
	?></p>
  <p>
    <input type="submit" name="reiniciar" id="reiniciar" value="reiniciar" />
  </p>
</form>
</body>
</html>
