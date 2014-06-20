 	$(document).ready(function(){
		$("#calcular").click(
			function(){
			
			//alert('JS');
				combo1 = document.getElementById('segundoCombo');
		
				//var id = combo1.options[combo1.selectedIndex].value;
				var id = combo1.value;
				//alert(id);
				
				$.ajax({
					type: 'get',
					dataType: 'json',
					url: 'CargaAlumnoPendientes.php',
					data: {Legajo: id},
					success: function(data){
						//LlenarComboMateria(json, combo1);
						var size = data.length;
						//alert(size);
						
						if(size > 0){
						
							//alert(size);
						
						var tabla = "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
						tabla = tabla + "<title>Materias Ofertadas</title>";
						tabla = tabla + "<link href='layout01.css' rel='stylesheet' type='text/css' />";
						tabla = tabla + "<link href='styles/sesion.css' rel='stylesheet' type='text/css' />";
						tabla = tabla + "</head><body>";
						
						tabla = tabla + "<img alt='fondo' src='img/bg.png'  id='full-screen-background-image' />";
							tabla = tabla + "<div id='head'><div class='logoplanner'><a href='user_page.php'><img src='img/logoplanner_small.png' /></a></div>";
							tabla = tabla + "<div id='botonera'><div id='cssmenu'><ul><li><a href='user_page_materiasalta.php'><span>Registro</span></a></li>";
							tabla = tabla + "<li class='has-sub'><a href='#'><span>Consulta</span></a><ul><li><a href='user_page_consulta.php'><span>Materias Aprobadas</span></a></li>";
							tabla = tabla + "<li class='last'><a href='user_page_oferta.php'><span>Materias Ofertadas</span></a></li></ul></li>";
							tabla = tabla + "<li><a href='#'><span>Contacto</span></a></li><li class='has-sub last'><a href='#'><span>Alumno</span></a>";
							tabla = tabla + "<ul><li><a href='#'><span>Mis Datos</span></a></li><li class='last'><a href='#'><span>Cerrar Sesi&#243;n</span></a></li></ul></li></ul></div></div></div>";
						tabla = tabla + "<div class='ss-form-container'><div class='ss-form-heading'><h1>Materias ofertadas</h1></div>";
						
							//var tabla = "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><title>Materias por Alumno</title><link href='layout01.css' rel='stylesheet' type='text/css' /></head><body>";
							
							tabla = tabla + "<form id='my-dynamic-form' action='prueba.php' method='post'>";
							
							tabla = tabla + "<table><caption>MATERIAS"; 
							
							tabla = tabla + "</caption><thead><tr><th scope='col'>idMateria</th><th scope='col'>Nombre</th><th scope='col'>SI/NO</th></tr></thead><tfoot><tr><td colspan='10'>Compiled by Academic Planner</td></tr></tfoot><tbody>";
							
							//alert(tabla);
							
							for (i = 0; i < size; i++){
							
								tabla = tabla+ "<tr class='odd'>";
														
								tabla = tabla+ "<th scope='row'>"+data[i].idMateria+"</th>";
								
								tabla = tabla+ "<td>"+data[i].Nombre_Materia+"</td>";
								
								tabla = tabla+ "<td><select id='opt_"+data[i].idMateria+"' name='opt_"+data[i].idMateria+"' class='MyClass' ><option value='0'>NO</option><option value='1'>SI</option></select></td>";
								
								tabla = tabla+ "</tr>";
							}	
							tabla = tabla + "</tbody></table>";
							
							tabla = tabla + "<input type='submit' value='Guardar' name='Guardar'></form>";
							
							tabla = tabla + "</div><div id='footer'><div style='float:right;margin-top: 5px;'><img src='img/android_sitio.png' /></div></div><div id='footer2' align='center' style='color:#CCCCCC;'><p style='font-size:10px;margin:0;padding-top:8px;'>Copyright© 2014 - Todos los derechos reservados a Academic Planner</p></div></body></html>";
							
							//tabla = tabla + "</div></body></html>";
							//alert(tabla);
							document.write(tabla);
						//}
						
					}
					}
				});
				
				
		}
	);
});

