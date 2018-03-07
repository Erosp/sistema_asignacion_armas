<?php 

class Producto extends CI_Controller 
{
    
    function index() 
    {
        
        $this->load->view('vistas/html/producto');
        
    }
    
    function control()
    {
        
        $operacion=$this->input->post("operacion");
        
        if($operacion=="obtener")
        {
            
            $this->obtener();
            
        }
        
    }
    
    function obtener()
    {
        
        $this->load->model("producto_modelo");
        
        $resultado=$this->producto_modelo->obtener();
        
        echo $resultado;
        
    }
    
}

?>