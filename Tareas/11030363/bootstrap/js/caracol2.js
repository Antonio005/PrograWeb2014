$(document).ready(
	
	function(){
		$('#enviar').click(
			function(){	
				var cont=0;
				var band=0;
				var dia=0;
				var sub=0;
				var profundidad = parseInt(document.getElementById("profundidad").value);
				var sube = parseInt(document.getElementById("sube").value);
				var resbala = parseInt(document.getElementById("resbala").value);
				profundidad=profundidad*10;
				sube=sube*10;
				resbala=resbala*10;
				if(profundidad>0){
					if(sube>resbala){
						 var sal= setInterval(caracol,1000);
						 //$('#modal').attr('value', dia);
						 //aria-hidden="false"
					}
					else{
						alert("resbala es mayor que sube ");
					}
					
				}//if
				else{
					alert("la profundidad debe ser mayor a 0");
				}
				sub=profundidad;
				$('#img').css('height',profundidad+'px');
				
				
				function caracol(){
					
					if(sub<=0){
						clearInterval(sal);
					}
					else{
					
					//top:300px;
					if(band==0){
						sub=sub-sube;
						$('#caracol').css('top',sub+'px');
						band=1;
						//alert('entra al if');
						$('#sol').attr('src', './img/sol.jpg');
						
						dia++;
						//alert (dia);
						$('#dia').attr('value', dia);
						
					}//
					else{
						sub=sub+resbala;
						$('#caracol').css('top',sub+'px');
						band=0;
						//alert('entra al else');
						$('#sol').attr('src', './img/luna.jpg');
						
						
					}//else
				}	
				}//caracol

			}//function
		);//click
		

	}//function
);//(document).ready