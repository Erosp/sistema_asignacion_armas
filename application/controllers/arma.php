<?php

class Arma extends CI_Controller 
{
    
    function index()
    {
                
        $this->load->view('vistas/html/arma.php');
        
    }
    
    function control()
    {
                
        $operacion=$this->input->post("operacion");
        
        if($operacion=="obtener")
        {
            
            $this->obtener();
            
        }
        
        else if($operacion=="guardar")
        {
            
            $serial=$this->input->post("serial");
            $calibre=$this->input->post("calibre");
            $tipoArma=$this->input->post("tipoArma");
            
            $this->guardar($serial, $calibre, $tipoArma);
            
        }
        
        else if($operacion=="actualizar")
        {
            
            $serial=$this->input->post("serial");
            $calibre=$this->input->post("calibre");
            $tipoArma=$this->input->post("tipoArma");
            
            $this->actualizar($serial, $calibre, $tipoArma);
            
        }
        
    }
    
    function obtener()
    {
        
        $this->load->model("arma_modelo");
        
        $resultado=$this->arma_modelo->obtener();
        
        echo $resultado;
        
    }
    
    function guardar($serial, $calibre, $tipoArma)
    {
        
        $datos=array(
            "serial_arma" => $serial,
            "calibre_arma" => $calibre,
            "tipo_arma" => $tipoArma
        );
        
        $this->load->model("arma_modelo");
        
        $resultado=$this->arma_modelo->guardar($datos);
                
    }
    
    function actualizar($serial, $calibre, $tipoArma)
    {
        
        $datos=array(
            "calibre_arma" => $calibre,
            "tipo_arma" => $tipoArma
        );
        
        $this->load->model("arma_modelo");
        
        $resultado=$this->arma_modelo->actualizar($datos, $serial);
                
    }
    
}

?>