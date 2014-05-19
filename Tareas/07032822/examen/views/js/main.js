$(document).ready(

	
		function(){

		

		$( "#btnAjax").click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tabla_ajax.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				   data: "profundidad="+$("#profundidad").val()+"&sube="+$("#sube").val()+"&baja="+$("#baja").val()+"&dias="+$("#dias").val(),
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
					$('#loadAjax').html('success'+data);
					$("#profundidad").val("");
					$("#sube").val("");
					$("#baja").val("");
					$("#dias").val("");
				 }
			});// fin ajax
		
		});	// fin click #btnAjax

		$( "#btnAjax2" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tabla.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				   data: "id=001&nombre=AAA",
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
					$('#loadAjax').html('success'
						+data);
				   }
			});// fin ajax
			
		
		});	// fin click #btnCarAjax

		$( "#btnform1" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tabla_form1b.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				    data: "nombres="+$("#nombres").val()+
				    		"&apellidos="+$("#apellidos").val()+
				    		
				    		"&curp="+$("#curp").val()+
				    		
				    		
				    		"&ciudad="+$("#ciudad").val()+
				    		"&cel="+$("#cel").val()+
				    		"&tel="+$("#tel").val()+
				    		"&email="+$("#email").val(),
				    
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
					$('#loadAjax').html('success'+data);
				   }

			});// fin ajax
			
		
		});	// fin click #btnCarAjax


		$( "#btnform2" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tabla_form2b.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				    data: "peso="+$("#peso").val()+
				    		"&estatura="+$("#estatura").val()+	
	    						    		
				    		"&preg1="+$("#preg1").val()+
				    		
				    		"&preg2="+$("#preg2").val()+

				    		"&preg3="+$("#preg3").val()+

				    		"&preg4="+$("#preg4").val()+

				    		"&preg5="+$("#preg5").val(),
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
					$('#loadAjax').html('success'+data);
				   }

			});// fin ajax
			
		
		});	// fin click #btnCarAjax

			
		

		


		

		



	}
);
	