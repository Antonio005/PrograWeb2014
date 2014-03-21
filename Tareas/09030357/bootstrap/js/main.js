
$(document).ready(
	function(){	
		
		for(var i=0; i<10; i++){
			$('#ima'.concat(i)).click(
					function(){
						$(this).height(50).width(50);
					}
				);
		}
		
		var cont=0;
	
		setInterval(cambia, 1000);
		
		function cambia(){
			cont++;
			$('#cambia').attr('src','img/'+cont+'.jpg');
			
			if(cont>=9){
				cont=0;
				setInterval(cambia, 1000);
			}
			
		}
	}
);//