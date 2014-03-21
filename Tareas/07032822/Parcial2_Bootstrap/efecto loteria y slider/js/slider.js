$(document).ready(

	function(){
	
		var cont=0;

		setInterval(cambia,2000);

		function cambia(){
			
			cont++;
			$('#cambia').attr("src","img/"+cont+".jpg"); 

			if(cont==4){
				cont=0;
			}
		}	
	}
);

