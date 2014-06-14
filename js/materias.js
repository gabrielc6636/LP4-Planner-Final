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
						
						tabla = tabla + "<img alt='fondo' src='img/bg.png'  id='full-screen-background-image' /><div id='head'><img src='img/logoplanner_small.png' /></div>";
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
							
							tabla = tabla + "</div></body></html>";
							//alert(tabla);
							document.write(tabla);
						//}
						
					}
					}
				});
				
				
		}
	);
});

