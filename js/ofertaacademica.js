 
	$(document).ready(function(){
		$("#calcular").click(
			function(){
			
			//alert('JS');
				combo1 = document.getElementById('segundoCombo');
		
				//var id = combo1.options[combo1.selectedIndex].value;
				var id = combo1.value;
				//alert(id);
				
				$.ajax(
					{
					type: "GET",
					dataType: "json",
					url: "CargaOfertaAcademica.php",
					success: function(data){
						var i = 0;
						var size = data.length;
				
						 //alert("estacion:" + id);
						 //alert("trenes:" + size);
									
						//obtenerEstaciones(id,data);
						
						//alert("Estaciones : " + estaciones.length);
			
						//alert(size);
						//$("div.info").show();
						//for (i = 0; i < size; i++){
						//results(data[i].idTren,data[i].velocidad);
						//calcular(data[i].coordinates);
						//alert(calcular(data[0].coordinates));
						/*				
						var respuesta = calcular(data[i].coordinates,estacioness);
								
								$("div.info").append(" Tren : "+data[i].nTren);
								$("div.info").append(" Tren TBA: "+data[i].idTren);
								$("div.info").append(" Velocidad: "+data[i].velocidad);
								//$("div.info").append(" Distancia: "+ calcular(data[i].coordinates));
								$("div.info").append(" Distancia: "+ respuesta[0] + " km " + respuesta[1] );
								$("div.info").append(" Diferencia: "+data[i].diferencia);
							
							
						}*/
						//restults(data[0]);
						
						var color = "";
						
						if(size > 0){
						
							//alert(size);
						
						var tabla = "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
							tabla = tabla + "<title>Oferta Academica</title>";
							tabla = tabla + "<link href='layout01.css' rel='stylesheet' type='text/css' />";
							tabla = tabla + "<link href='styles/sesion.css' rel='stylesheet' type='text/css' />";
							tabla = tabla + "</head><body>";
							
							tabla = tabla + "<img alt='fondo' src='img/bg.png'  id='full-screen-background-image' />";
							tabla = tabla + "<div id='head'><div class='logoplanner'><a href='user_page.php'><img src='img/logoplanner_small.png' /></a></div>";
							
							tabla = tabla + "<div id='botonera'>";
												tabla = tabla + "<div id='cssmenu'>";
												tabla = tabla + "<ul>";
												  
												   tabla = tabla + "<li class='has-sub'><a href='#'><span>Registro</span></a>";
														tabla = tabla + "<ul>";
														 tabla = tabla + "<li><a href='user_page_materiasalta.php'><span>Materias</span></a></li>";
														 tabla = tabla + "<li class='last'><a href='user_page_diasalta.php'><span>Horario</span></a></li>";
													  tabla = tabla + "</ul>";
												   tabla = tabla + "</li>";
												   tabla = tabla + "<li class='has-sub'><a href='#'><span>Consulta</span></a>";
													  tabla = tabla + "<ul>";
														 tabla = tabla + "<li><a href='user_page_consulta.php'><span>Materias Aprobadas</span></a></li>";
														 tabla = tabla + "<li><a href='user_page_habilitadas.php'><span>Materias Pendientes</span></a></li>";
														 tabla = tabla + "<li><a href='user_page_academica.php'><span>Oferta Academica</span></a></li>";
														 tabla = tabla + "<li class='last'><a href='user_page_oferta.php'><span>Oferta Cursable</span></a></li>";
													  tabla = tabla + "</ul>";
												   tabla = tabla + "</li>";
												   tabla = tabla + "<li><a href='construccion.html'><span>Contacto</span></a></li>";
												   tabla = tabla + "<li class='has-sub last'><a href='#'><span>Alumno</span></a>";
													  tabla = tabla + "<ul>";
														 tabla = tabla + "<li><a href='construccion.html'><span>Mis Datos</span></a></li>";
														 tabla = tabla + "<li class='last'><a href='index.html'><span>Cerrar Sesi&#243;n</span></a></li>";
													  tabla = tabla + "</ul>";
												   tabla = tabla + "</li>";
												tabla = tabla + "</ul>";
											tabla = tabla + "</div>";
									tabla = tabla + "</div>";
							tabla = tabla + "</div>";
							
							tabla = tabla + "<div class='ss-form-container'><div class='ss-form-heading'><h1>Oferta Academica</h1></div>";
							
								//var tabla = "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><title>Materias por Alumno</title><link href='layout01.css' rel='stylesheet' type='text/css' /></head><body>";
								tabla = tabla + "<table><caption>MATERIAS"; 
								
								tabla = tabla + "</caption><thead><tr><th scope='col'>NumComision</th><th scope='col'>NumMateria</th><th scope='col'>Nombre</th><th scope='col'>CargaHoraria</th><th scope='col'>DiaSemana</th><th scope='col'>Desde</th><th scope='col'>Hasta</th><th scope='col'>Sede</th><th scope='col'>Aula</th></tr></thead><tfoot><tr><td colspan='10'>Compiled by Academic Planner</td></tr></tfoot><tbody>";
								
								//alert(tabla);
								
								for (i = 0; i < size; i++){
								
									tabla = tabla+ "<tr class='odd'>";
															
									tabla = tabla+ "<th scope='row'>"+data[i].NumComision+"</th>";
									
									tabla = tabla+ "<td>"+data[i].NumMateria+"</td>";
									
									tabla = tabla+ "<td>"+data[i].Nombre+"</td>";
									tabla = tabla+ "<td>"+data[i].CargaHoraria+"</td>";
									tabla = tabla+ "<td>"+data[i].DiaSemana+"</td>";
									tabla = tabla+ "<td>"+data[i].Desde+"</td>";
									tabla = tabla+ "<td>"+data[i].Hasta+"</td>";
									
									tabla = tabla+ "<td>"+data[i].Sede+"</td>";
									tabla = tabla+ "<td>"+data[i].Aula+"</td>";
									
									
									

									tabla = tabla+ "</tr>";
								}	
								tabla = tabla + "</tbody></table></div><div id='footer'><div style='float:right;margin-top: 5px;'><img src='img/android_sitio.png' /></div></div><div id='footer2' align='center' style='color:#CCCCCC;'><p style='font-size:10px;margin:0;padding-top:8px;'>Copyright© 2014 - Todos los derechos reservados a Academic Planner</p></div></body></html>";
								//alert(tabla);
								document.write(tabla);
						//}
						
					}	
						
					
						
					},
					error: function(dato){
						alert("ERROR FINAL");
					}
				}
			);
		}
	);
});

