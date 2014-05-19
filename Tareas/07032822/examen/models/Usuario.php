<?php

class Usuario extends Modelo{
    public $nombre_tabla = 'usuario_tb';
    public $pk = 'id_usuario';
    
    
    public $atributos = array(
        'email'=>array(),
        'username'=>array(),
        'password'=>array(),
        'foto'=>array(),
        'rfc'=>array(),
        'cp'=>array(),
    );
    
    public $errores = array(  );

 
    
    private $email;
    private $username;
    private $password;
    private $foto;
    private $rfc;
    private $cp;
       
    
    function Usuario(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }

     public function get_errores(){
        $rs = array();
        foreach ($this->errores as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
   /* public function set_email($valor){
        $this->email = trim($valor);
    }*/
    
    public function get_email(){
        return $this->email;
    } 
    

     public function set_email($valor){
        
        
        
        $rs = $this->consulta_sql("select * from usuario_tb where email = '$valor'");
        $rows = $rs->GetArray();        

        if(count($rows) > 0){           
           
            $_SESSION["email"]="Este e-mail (".$valor.") ya esta registrado";
            $this->email = $valor;     
            #$this->email ="";            

        }else{
            $this->email = $valor;            
        }
        
    }

    

    public function get_username(){
        return $this->username;
    } 
    
    /*public function set_username($valor){
        $this->username = trim($valor);
    }*/
    public function set_username($valor){
        
        $valor=trim($valor);

        $rs = $this->consulta_sql("select * from usuario_tb where username = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){    
            $this->username = $valor;
            $_SESSION["username"]="Este usuario (".$valor.") ya esta registrado";
              #$_SESSION["username"]="errorusu"; 
              #$errors[]=true;           
            
        }else{
            $this->username = $valor;
           
        }
        
    }

    
    public function get_password(){
        return $this->password;
    } 
    public function set_password($valor){
        $this->password = trim($valor);
    }

    public function get_foto(){
        return $this->foto;
    } 
    public function set_foto($valor){
        $this->foto = trim($valor);
    } 

        public function get_rfc(){
        return $this->rfc;
    } 
    public function set_rfc($valor){
        $this->rfc = trim($valor);
    } 
    
        public function get_cp(){
        return $this->cp;
    } 
    public function set_cp($valor){
        $this->cp = trim($valor);
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
