$(document).ready(function(){
  $("button").click(function(){
        var posicion=700;
        var cont=0;  
        var contT=0; 
        var contd=1;
        var dias=1;

        
        var dis=document.getElementById("var1").value;
        var sube =document.getElementById("var2").value;        
        var baja=document.getElementById("var3").value;

    
        var distancia=700;
        var metro=distancia/dis; 
        
        var tsube=3000/sube;
        var tbaja=3000/baja;




      document.getElementById("tunel").style.height =distancia+"px"; 

        

  

        
        var csi= setInterval(sube_caracol,tsube);        
        var cdi= setInterval(cambia_dia,3000); 

        function sube_caracol(){      
            cont++;  
            contT++;    
            
            posicion-=metro;
            document.getElementById("caracolin").style.marginTop = posicion+"px";

            if (cont==sube) {
              window.clearInterval(csi);
              cont=0;
              cbi= setInterval(baja_caracol,tbaja);
            }       

            if (contT>dis) {
              window.clearInterval(csi);
              window.clearInterval(cdi);
              window.clearInterval(cbi);
              alert("Caracolin:! Logre Salir en "+dias+" dias !");
              cont=0;
            }  

        }

        function baja_caracol(){
            cont++;  
            contT--;      
            posicion+=metro;
            document.getElementById("caracolin").style.marginTop = posicion+"px";

            if (cont==baja) {
              window.clearInterval(cbi); 
              cont=0;       
              csi= setInterval(sube_caracol,tsube); 
              dias++;  
            }
        }

          

        function cambia_dia(){

            contd++;
            $('#cambia').attr("src","img/"+contd+".jpg");

            if (contd==2) {
              contd=0;
            }
        }
  });
});