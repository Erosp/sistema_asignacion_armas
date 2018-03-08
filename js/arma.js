$(document).ready(function(){
    
    function obtener()
    {
        
        var operacion="obtener";
        
        $.ajax({
            
            url: "http://saa.com/arma/control",
            method: "POST",
            data: {operacion:operacion},
            success: function(data)
            {
                
                $("#tabla").html(data);
                
            }
            
        });
        
    }
    
    obtener();
    
    function guardar()
    {
        
        var operacion="guardar";
        
        var serial=$("#serial").val();
        var calibre=$("#calibre").val();
        var tipoArma=$("#tipoArma").val();
        
        $.ajax({
            
            url: "http://saa.com/arma/control",
            method: "POST",
            data: {operacion:operacion, serial:serial, calibre:calibre, tipoArma:tipoArma},
            success: function(data)
            {
                
                $("#registro").css("display", "none");
                obtener();
                
            }
            
        });
        
    }
    
    function actualizar()
    {
        
        var operacion="actualizar";
        
        var serial=$("#serial").val();
        var calibre=$("#calibre").val();
        var tipoArma=$("#tipoArma").val();
        
        $.ajax({
            
            url: "http://saa.com/arma/control",
            method: "POST",
            data: {operacion:operacion, serial:serial, calibre:calibre, tipoArma:tipoArma},
            success: function(data)
            {
                
                $("#registro").css("display", "none");
                obtener();
                
            }
            
        });
        
    }
    
    $("#tabla").on("click", "#nuevo", function(){
        
        $("#registro").css("display", "block");
        
    });
    
    $("#enviar").on("click", function(){
        
        var boton=$("#enviar").val();
        
        if(boton=="guardar")
        {
            
            guardar();
            
        }
        
        else if(boton=="actualizar")
        {
            
            actualizar();
            
        }
        
    });
    
});