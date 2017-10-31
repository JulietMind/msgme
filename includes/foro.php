<!-- MOSTRAR TEMAS  -->
<?php
require_once('conectardb.php');

$sql = "SELECT * FROM temas_foro ORDER BY id DESC LIMIT 0, 999";
$result = mysqli_query($conectarbd, $sql);

if (!$result) die ("Fallo en acceso a base de datos: ") . mysqli_error();

if ($result){
			echo '<div class="wrapper-tables">
			<div class="title-tema">
			<a href="" class="tema">Tema</a>
			<div class="temas">';
	while ($row=mysqli_fetch_row($result)){
		echo '<h3><a href="?p='.$row[0].'">';
			printf ("%s", $row[1]); 
		echo '</a></h3>';
		}		
}
echo '</div>
	</div>';
?>


<!-- TABLES -->
<!-- <div class="wrapper-tables">

	<div class="title-tema">
		<a href="" class="tema">Tema</a>
		<a href=""><img src="img/user.png"></a>
		<div class="temas">
			<h3><a href="">phpGet Titulo del post</a></h3>
		</div>
	</div> -->

	<div class="title-categoria">
		<a href="" class="categoria">Categoria</a>
		<div class="categoria-tag">
			<a href="">soyunacategoria</a>
		</div>
	</div>

	<div class="title-usuarios">
		<a href="" class="usuarios">Usuarios</a>
		<div class="usuarioTema">
			<a href=""><img src="img/user.png" alt="" class="usuarios-img"></a>
		</div>
	</div>

	<div class="title-respuestas">
		<a href="" class="respuestas">Respuestas</a>
		<div class="respuestaNum">
			<a href="">7</a>
		</div>
	</div>
	
	<div class="title-visitas">
		<a href="" class="visitas">Visitas</a>
		<div class="visitasNum">
			<p>1,6K</p>
		</div>
	</div>

	<div class="title-actividad">
		<a href="" class="actividad">Actividad</a>
		<div class="actividadNum">
			<!-- Ultima actividad en el tema -->
			<a href="">2 dias</a>
		</div>
	</div>	

	<div class="crear-tema-btn">
		<a class="crear-tema" href="">Crear tema</a>
	</div>
</div>


<!-- CREAR TEMA -->

	<div class="crear">
		<div class="crear-form">
			<h1>Crea tu Tema</h1>
			<form action="includes/crear_tema.php" method="post">
				<input class=titulo name="titulo" type="text" placeholder="Nombre del titulo" autofocus>
				<textarea name="mensaje" rows="10" cols="100" placeholder="Escribe aqui tu texto"></textarea>

				<input class="btn-crear" type="submit">
			</form>
		</div>
	</div>
<div id="oscurecer" class="oscurecer"></div>