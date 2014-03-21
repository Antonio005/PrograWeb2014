$(document).ready(

	function profundidad(){
		$('#cal').click(
			function (){							
				var prof = document.getElementById('dato1').value;
				var sube = document.getElementById('dato2').value;
				var baja = document.getElementById('dato3').value;
																					
				var cont=0;
				
				setInterval(cambia, 3000);
								
				function cambia(){
					cont++;
					$('#cambia').attr('src','img/sol'+cont+'.jpg');
									
					if(cont>=2){
						cont=0;
						setInterval(cambia, 3000);
					}		
				}
				
				if(baja<=0||sube<=0||prof<=0){
					alert("No puede haber valores negativos o 0");
				}else 
					if(baja > sube){
						alert("Nunca llegara a la meta");
					}else{
						if(baja==sube){
							alert("lo que sube no puede ser igual a lo que baja");
						}else{
							while(sube<=prof){
								$('#spa').attr('', 'style= top:sube');
							}
						}
					}
			}
		);
	}
);
