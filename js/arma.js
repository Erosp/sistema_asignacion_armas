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
                $("#cortina").css("display", "none");
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
                $("#cortina").css("display", "none");
                obtener();
                
            }
            
        });
        
    }
    
    function eliminar(serial)
    {
        
        var operacion="eliminar";
        
        $.ajax({
            
            url: "http://saa.com/arma/control",
            method: "POST",
            data: {operacion:operacion, serial:serial},
            success: function(data)
            {
                
                $("#eliminacion").css("display", "none");
                $("#cortina").css("display", "none");
                obtener();
                
            }
            
        });
        
    }
    
    $("#tabla").on("click", "#nuevo", function(){
        
        $("#serial").val("");
        $("#calibre").val("");
        $("#tipoArma").val("");
        $("#enviar").val("guardar");
        $("#serial").removeAttr("readonly");
        $("#registro").css("display", "block");
        $("#cortina").css("display", "block");
        
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
    
    $("#tabla").on("click", ".btn-editar", function(){
        
                
        var serial=$(this).attr('id')
        var operacion="obtenerConId";
        
        $.ajax({
            
            url: "http://saa.com/arma/control",
            method: "POST",
            data: {operacion:operacion, serial:serial},
            success: function(data)
            {
                
                mostrarRegistroActualizar(JSON.stringify(data.serial), JSON.stringify(data.calibre), JSON.stringify(data.tipoArma));
                
            }
            
        });
        
    });
    
    $("#tabla").on("click", ".btn-eliminar", function(){
                
        var serial=$(this).attr('id')
        
        $("#eliminacion").css("display", "block");
        $("#cortina").css("display", "block");
        
        $("#si").val(serial);
        
    });
    
    $(".btn-confirmar-eliminar").on("click", function(){
        
        var boton=$(this).attr("id");
        
        if(boton=="si")
        {
            
            var serial=$(this).attr("value");
            eliminar(serial);
            
        }
        
        else if(boton=="no")
        {
            
            $("#eliminacion").css("display", "none");
            $("#cortina").css("display", "none");
            
        }
        
    });
    
    $(".ico-atras").on("click", function(){
        
        $("#registro").css("display", "none");
        $("#cortina").css("display", "none");
        
    });
    
    function mostrarRegistroActualizar(serial, calibre, tipoArma)
    {
        
        serial=serial.replace(/"/g, "");
        calibre=calibre.replace(/"/g, "");
        tipoArma=tipoArma.replace(/"/g, "");
        
        $("#serial").val(serial);
        $("#calibre").val(calibre);
        $("#tipoArma").val(tipoArma);
        $("#enviar").val("actualizar");
        $("#serial").attr("readonly", "readonly");
        
        $("#registro").css("display", "block");
        $("#cortina").css("display", "block");
        
    }
    
});