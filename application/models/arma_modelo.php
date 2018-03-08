<?php

class arma_modelo extends CI_Model
{
    
    function __construct()
    {
        
        parent::__construct();
        
    }
    
    function obtener()
    {
        
        $consulta=$this->db->get("arma");
        
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
                      <td class='columna'><a class='btn-editar' id='".$row['serial_arma']."'>Editar</a></td>
                      </tr>";
                
            }
            
            echo "<tr align='center'><td colspan='4'><button id='nuevo'>Nuevo</button></td></tr>";
            
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
    
}

?>