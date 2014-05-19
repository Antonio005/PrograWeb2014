<?php

class Form2 extends Modelo{
    public $nombre_tabla = 'form2_tb';
    public $pk = 'id_form2';
    
    
    public $atributos = array(
        'peso'=>array(),
        'estatura'=>array(),
        'preg1'=>array(),
        'preg2'=>array(),
        'preg3'=>array(),
        'preg4'=>array(),
        'preg5'=>array(),
        
    );
    
    public $errores = array( );
    
    private $peso;
    private $estatura;
    private $preg1;
    private $preg2;
    private $preg3;
    private $preg4;
    private $preg5;
   
       
    
    function Form2(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_peso(){
        return $this->peso;
    } 
    public function set_peso($valor){
        $this->peso = trim($valor);
    }


    public function get_estatura(){
        return $this->estatura;
    } 
    public function set_estatura($valor){
        $this->estatura = trim($valor);
    }

   
    public function get_preg1(){
        return $this->preg1;
    } 
    public function set_preg1($valor){
        $this->preg1 = trim($valor);
    }
    
    #
    public function get_preg2(){
        return $this->preg2;
    } 
    public function set_preg2($valor){
        $this->preg2 = trim($valor);
    }

     public function get_preg3(){
        return $this->preg3;
    } 
    public function set_preg3($valor){
        $this->preg3 = trim($valor);
    }

     public function get_preg4(){
        return $this->preg4;
    } 
    public function set_preg4($valor){
        $this->preg4 = trim($valor);
    }
    
     public function get_preg5(){
        return $this->preg5;
    } 
    public function set_preg5($valor){
        $this->preg5 = trim($valor);
    }
    
    #
    #
    
    #
    
    #
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
