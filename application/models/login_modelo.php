<?php

class Login_modelo extends CI_Model
{
    
    function __construct()
    {
        
        parent::__construct();
        
    }
    
    function entrar($usu, $clave)
    {
        
        $this->db->where("nombre_usuario", $usu);
        $this->db->where("clave_usuario", $clave);
        $consulta=$this->db->get("usuario");
        
        $num=$consulta->num_rows();
        
        return $num;
        
    }
    
}

?>