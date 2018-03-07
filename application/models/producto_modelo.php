<?php

class Producto_modelo extends CI_Model
{
    
    function __construct()
    {
        
        parent::__construct();
        
    }
    
    function obtener()
    {
        
        $consulta=$this->db->get("producto");
        
        $num=$consulta->num_rows();
        
        if(!$num==0)
        {
            
            echo "<table align='center' class='tabla fondo-nav'>
                    <tr>
                      <th class='columna'>C&oacute;digo</th>
                      <th class='columna'>Nombre</th>
                      <th class='columna'>Presentacion</th>
                      <th class='columna'>Unidad</th>
                      <th class='columna'>Capacidad</th>
                    </tr>";
            
            foreach ($consulta->result_array() as $row)
            {
                
                echo "<tr align='center'>
                      <td class='columna'>".$row['codigo']."</td>
                      <td class='columna'>".$row['nombre']."</td>
                      <td class='columna'>".$row['presentacion']."</td>
                      <td class='columna'>".$row['unidad']."</td>
                      <td class='columna'>".$row['capacidad']."</td></tr>";
                
            }
            
            echo "<tr align='center'><td colspan='5'><input type='button' value='Nuevo'></td></tr>";
            
            echo "</table>";
            
            
        }
        
    }
    
}

?>