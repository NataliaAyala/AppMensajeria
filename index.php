<!-- Ayala Natalia -->
<?php
 
//Inicia la sesion
session_start();
 

if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['user_id'])) )
{
   
?>
<form name="formulario" method="post" action="ISesion">

<input type="hidden" name="msg_error" value="2">
 </form>
 <script type="text/javascript"> 
            document.formulario.submit();
 </script>


<?php
}
 
  include("includes/database.php");  
    conectarse();
 
    $query = "SELECT  nombre,apellido,id,usuario FROM datos WHERE id = '".$_SESSION['user_id']."'";         
    $result = mysql_query($query); 
 
    $nombre = "";
    $username = "";
 
   
    if( $fila = mysql_fetch_array($result) )
        $nombre = $fila['nombre']." ".$fila['apellido'];
    	$username = $fila['usuario'];
     
mysql_close($link);
?>



<!Doctype html>
<html>

<head> 
<meta name="viewport" content="width=device-width, user-scalable=no">
<!-- <tittle> Front END </tittle> -->
<link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>


<header>
    <div class="Titulo">
	
	<figure class="GATO">
    <img src="images/gato.png" alt="gato"/>
	</figure>
	
	<h1> CATNIP</h1><br>
	</div>
</header>


<br><br><br><br>

<div class="NAVI">
<nav>

	<ul>
		<li >Write Post</li>
		<!-- <li>Logout</li> -->
	</ul>

</nav>	

<br><br>

<section>
<div class="POST">
<figure class="foto">
	<img src="images/1.png" alt="gato"/>
	</figure>


<div class="escrito">
<article>
<header>
    <!-- <figure>
	<img src="images/gato.png" alt="gato"/>
	</figure> -->
	
	<h2><?php echo $nombre ?></h2>
	</header>
	
	<p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>
	<footer class="sub">
	 
	  <div class="likes"> <h3> likes</h3></div>	
	</footer>
	
	
</article>
</div>
</div>
<br><br>

<div class="POST">
<figure class="foto">
	<img src="images/2.png" alt="gato"/>
	</figure>
<div class="escrito">
<article>
<header>
    <!-- <figure>
	<img src="images/gato.png" alt="gato"/>
	</figure> -->
	
	<h2>AmigoDos</h2>
	</header>
	
	<p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>
	<footer class="sub">
	
	  <div class="likes"> <h3> likes</h3></div>	
	</footer>
	
	
</article>
</div>
</div>


<br><br>

<div class="POST">
<figure class="foto">
	<img src="images/3.png" alt="gato"/>
	</figure>
<div class="escrito">
<article>
<header>
    <!-- <figure>
	<img src="images/gato.png" alt="gato"/>
	</figure> -->
	
	<h2>AmigoTres</h2>
	</header>
	
	<p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>
	<footer class="sub">
	  <div class="likes"> <h3> likes</h3></div>	
	</footer>
	
	
</article>
</div>
</div>

<br><br><br><br>
<div class="LOG">
 <a href="salir"><img src="images/logout.png" alt="gato"></a>
	 <h4> Cerrar sesión</h4>
	</div>


</div>

</section>


<!-- <aside>
	<ol>
		<li>Tit1</li>
		<li>Tit2</li>
        <li>Tit3</li>
        
	</ol>

	<a href="http://www.cuantogato.com/" target="_blank">
		<img src="images/pub.jpg" alt="gato"/>
	</a>
</aside>
 -->
<br><br><br><br>



<br><br><br><br>

<footer>
	<p> EJERCICIO REALIZADO POR NATALIA AYALA PÉREZ</p>
</footer>


</body>
</html>