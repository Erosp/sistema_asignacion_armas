$(document).ready(function(){
    
    function obtener()
    {
        
        var operacion="obtener";
        
        $.ajax({
            
            url: "http://localhost/inventario/producto/control",
            method: "POST",
            data: {operacion:operacion},
            success: function(data)
            {
                
                $("#tabla").html(data);
                
            }
            
        })
        
    }
    
    obtener();
    
})