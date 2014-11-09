<?php
	include_once 'cabecera.php';
?>
		<title>Error 404 | Algo ha ido mal</title>
		<meta name="description" content="P&aacute;gina con enlaces para solucionar un posible error 404" />
<?php
	include_once 'restoCabecera.php';
	include_once 'logo.php';
?>
			<div id="topMenuPan">
				<div id="topMenuLeftPan"></div>
				<div id="topMenuMiddlePan">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="datosPersonales.php">Personal</a></li>
						<li><a href="formacion.php">Formaci&oacute;n</a></li>
						<li><a href="experiencia.php">Experiencia</a></li>
						<li><a href="proyectos.php">Proyectos</a></li>
						<li><a href="cursos.php">Cursos</a></li>
						<li><a href="perfiles.php">Perfiles</a></li>
						<li class="contact"><a href="contacto.php" class="contact">Contacto</a></li>
					</ul>
				</div>
				<div id="topMenuRightPan"></div>
			</div>
		</div>
		<div id="bodyPan">
			<div id="bodyLeftPan">
				<h3><span>&iexcl;OOPS!</span></h3>
				<p>Algo ha ido mal.</p>
				<p>La direcci&oacute;n de la p&aacute;gina a la que intenta acceder es incorrecta o est&aacute; incompleta.</p>
				<p>A la derecha podr&aacute; encontrar enlaces para volver al sitio correcto.</p>
			</div>
			<div id="bodyRightPan">
				<h5>Recursos</h5>
				<ul>
					<li><a href="javascript:history.back()">Volver a p&aacute;gina anterior</a></li>
					<li><a href="index.php">Ir a p&aacute;gina principal</a></li>
					<li><a href="contacto.php">Notificar fallo</a></li>
				</ul>
			</div>
		</div>
<?php
	include_once 'pie.php';
?>