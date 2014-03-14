$(document).ready(
	function(){
		
		$('img').click(
			function(){
				$(this).hide(2000);
			}
		);
		
		$('#btn1').click(
			function(){
				$('img').show(2000);
			}
		);
	}//function
);//(document).ready