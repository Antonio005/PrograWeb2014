<?php

class Form1 extends Modelo{
    public $nombre_tabla = 'form1_tb';
    public $pk = 'id_form1';
    
    
    public $atributos = array(
        'nombres'=>array(),
        'apellidos'=>array(),
        #'sexo'=>array(),
        'curp'=>array(),
        #'fechanac'=>array(),
        'ciudad'=>array(),
        'cel'=>array(),
        'tel'=>array(),
        'email'=>array()
    );
    
    public $errores = array( );
    
    private $nombres;
    private $apellidos;
    #private $sexo;
    private $curp;
   # private $fechanac;
    private $ciudad;
    private $cel;
    private $tel;
    private $email;
       
    
    function Form1(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombres(){
        return $this->nombres;
    } 
    public function set_nombres($valor){
        $this->nombres = trim($valor);
    }


    public function get_apellidos(){
        return $this->apellidos;
    } 
    public function set_apellidos($valor){
        $this->apellidos = trim($valor);
    }

    /*
    public function get_sexo(){
        return $this->sexo;
    } 
    public function set_sexo($valor){
        $this->sexo = trim($valor);
    }*/
    
    #
    public function get_curp(){
        return $this->curp;
    } 
    public function set_curp($valor){
        $this->curp = trim($valor);
    } 
    #
    /*
     public function get_fechanac(){
        return $this->fechanac;
    } 
    public function set_fechanac($valor){
        $this->fechanac = trim($valor);
    }*/
    
    #
    /**/
     public function get_ciudad(){
        return $this->ciudad;
    } 
    public function set_ciudad($valor){
        $this->ciudad = trim($valor);
    }
    #
    
  
     

     public function get_cel(){
        return $this->cel;
    } 
    public function set_cel($valor){
        $this->cel = trim($valor);
    }
    #

     public function get_tel(){
        return $this->tel;
    } 
    public function set_tel($valor){
        $this->tel = trim($valor);
    }
    #

     public function get_email(){
        return $this->email;
    } 
    public function set_email($valor){
        $this->email = trim($valor);
    }
	
    /*
    public function set_email($valor){
        
        $rs = $this->consulta_sql("select * from evt_asistentes where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->email = "";
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->email = trim($valor);
        }
        
    } */
    


    
    
    
}

?>
