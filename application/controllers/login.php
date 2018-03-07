<?php 

class Login extends CI_Controller 
{
    
    function index()
    {
        
        $this->load->view('vistas/html/login');
        
    }
    
    function entrar()
    {
        
        $usu=$this->input->post("usu");
        $clave=$this->input->post("clave");
        
        $this->load->model("login_modelo");
        
        $resultado=$this->login_modelo->entrar($usu, $clave);
        
        echo $resultado;
        
    }
    
}

?>