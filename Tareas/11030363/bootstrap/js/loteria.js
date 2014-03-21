$(document).ready(
	function(){
			var cont=0;
		
		$('img').click(
			function(){
				$(this).attr('src', './img/j2.jpg');
			}
		);
		
		setInterval(cambia,5000);
		
	
		
		function cambia() {
			
			cont++;
			$('#cambia').attr('src', './img/'+cont+'.jpg'); 
			
			if(cont==9){
				cont=0;
			}
			
		}//cambia
		

	}//function
);//(document).ready