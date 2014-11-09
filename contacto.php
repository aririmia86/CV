<?php
	include_once 'cabecera.php';
?>
		<title>Curriculum Vitae | Contacto</title>
		<meta name="description" content="Formas de ponerse en contacto con el Ingeniero en Inform&aacute;tica Alejandro Irimia Mesa: Tel&eacute;fono, correo electr&oacute;nico..." />
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
						<li class="home">Contacto</li>
					</ul>
				</div>
				<div id="topMenuRightPan"></div>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8">
			function muestraTelefono(){
				var pTelefono = document.getElementById("telefono");
				pTelefono.style.display = 'block';
				var pCorreo = document.getElementById("correo");
				pCorreo.style.display = 'none';
				var pSkype = document.getElementById("skype");
				pSkype.style.display = 'none';
			}

			function muestraCorreo(){
				var pTelefono = document.getElementById("telefono");
				pTelefono.style.display = 'none';
				var pCorreo = document.getElementById("correo");
				pCorreo.style.display = 'block';
				var pSkype = document.getElementById("skype");
				pSkype.style.display = 'none';
			}

			function muestraSkype(){
				var pTelefono = document.getElementById("telefono");
				pTelefono.style.display = 'none';
				var pCorreo = document.getElementById("correo");
				pCorreo.style.display = 'none';
				var pSkype = document.getElementById("skype");
				pSkype.style.display = 'block';
			}
		</script>
		<div id="bodyPan">
			<div id="bodyCompletPan">
				<h3><span>Contacto</span></h3>
				<p>&iquest;Sugerencias, preguntas, entrevistas, errores? Si deseas contactar conmigo elige a continuaci&oacute;n la opci&oacute;n que te resulte m&aacute;s c&oacute;moda.</p>
				<img class="imagenCursor" src="images/telefono.jpg" alt="Tel&eacute;fono" title="Tel&eacute;fono" onclick="muestraTelefono()" />
				<img class="imagenCursor" src="images/correo.jpg" alt="Correo electr&oacute;nico" title="Correo electr&oacute;nico" onclick="muestraCorreo()" />
				<img class="imagenCursor" src="images/skype-contact.png" alt="Skype" title="Skype" onclick="muestraSkype()" />
				<a href="http://www.linkedin.com/pub/alejandro-irimia-mesa/47/9ba/4b1" rel="external"><img src="images/linkedin-contact.jpg" alt="LinkedIn" title="LinkedIn" /></a>
				<p class="noMostrar" id="telefono">Mi n&uacute;mero de tel&eacute;fono m&oacute;vil es: <img src="images/numeroTelefono.jpg" alt="Tel&eacute;fono" /></p>
				<p class="noMostrar" id="correo">Mi correo electr&oacute;nico es: <a href="http://www.google.com/recaptcha/mailhide/d?k=01CScHB_FFQ7X74HF6uc25Ew==&amp;c=QOH2sUq7mn2M1U2cu1yjKz9rIoasSHB3LKsVaZTmSRM=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501CScHB_FFQ7X74HF6uc25Ew\75\75\46c\75QOH2sUq7mn2M1U2cu1yjKz9rIoasSHB3LKsVaZTmSRM\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Pulse para obtener la direcci&oacute;n completa">rim...com</a></p>
				<p class="noMostrar" id="skype">Videoconferencia por Skype: <a href="http://www.google.com/recaptcha/mailhide/d?k=01CScHB_FFQ7X74HF6uc25Ew==&amp;c=QOH2sUq7mn2M1U2cu1yjKz9rIoasSHB3LKsVaZTmSRM=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501CScHB_FFQ7X74HF6uc25Ew\75\75\46c\75QOH2sUq7mn2M1U2cu1yjKz9rIoasSHB3LKsVaZTmSRM\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Pulse para obtener la direcci&oacute;n completa">rim...com</a></p>
				<br />
				<p>Tambi&eacute;n puede contactar conmigo rellenando el siguiente formulario.</p>
				<br />
				<!-- Do not change the code! -->
				<a id="foxyform_embed_link_113337" href="http://es.foxyform.com/">foxyform</a>
				<script type="text/javascript">
					(function(d, t){
						var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
						g.src = "http://es.foxyform.com/js.php?id=113337&sec_hash=2715508a501&width=350px";
						s.parentNode.insertBefore(g, s);
					}(document, "script"));
				</script>
				<!-- Do not change the code! -->
			</div>
		</div>
<?php
	include_once 'pie.php';
?>