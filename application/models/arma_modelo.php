<?php

class arma_modelo extends CI_Model
{
    
    function __construct()
    {
        
        parent::__construct();
        
    }
    
    function obtener()
    {
        
        $this->db->where('estatus_arma', "ACTIVO");
        $consulta=$this->db->get('arma');
        
        $num=$consulta->num_rows();
        
        if(!$num==0)
        {
            
            echo "<table align='center' class='tabla fondo-nav'>
                    <tr>
                      <th class='columna'>Serial</th>
                      <th class='columna'>Calibre</th>
                      <th class='columna'>Tipo de arma</th>
                    </tr>";
            
            foreach ($consulta->result_array() as $row)
            {
                
                echo "<tr align='center'>
                      <td class='columna'>".$row['serial_arma']."</td>
                      <td class='columna'>".$row['calibre_arma']."</td>
                      <td class='columna'>".$row['tipo_arma']."</td>
                      <td class='columna'><a class='btn-editar' id='".$row['serial_arma']."'><label class='ico-editar'></a></td>
                      <td class='columna'><a class='btn-eliminar' id='".$row['serial_arma']."'><label class='ico-eliminar'></label></a></td>
                      </tr>";
                
            }
            
            echo "<tr align='center'><td colspan='5'><button id='nuevo'>Nuevo</button></td></tr>";
            
            echo "</table>";
            
        }
        
        else 
        {
            
            echo "<h1>No existen datos.</h1>";
            
        }
        
    }
    
    function guardar($datos)
    {
        
        $this->db->insert('arma', $datos);
        
    }
    
    function actualizar($datos, $serial)
    {
        
        $this->db->where('serial_arma', $serial);
        $this->db->update('arma', $datos);
        
    }
    
    function eliminar($datos, $serial)
    {
        
        $this->db->where('serial_arma', $serial);
        $this->db->update('arma', $datos);
        
    }
    
    function obtenerConId($serial)
    {
        
        $this->db->where('serial_arma', $serial);
        $consulta=$this->db->get('arma');
        
        header('Content-Type: application/json');
        
        foreach ($consulta->result_array() as $row)
        {
            
            $datos=array(
                "serial" => $row['serial_arma'],
                "calibre" => $row['calibre_arma'],
                "tipoArma" => $row['tipo_arma']
            );
            
        }
        
        echo json_encode($datos, JSON_FORCE_OBJECT);
                    
    }
    
}

?>