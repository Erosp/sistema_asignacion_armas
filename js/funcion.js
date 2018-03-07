$(document).ready(function(){
    
                $(document).on("click", ".boton", function(){
                    
                    var usu=$('.usu').val();
                    var pass=$('.pass').val();
                    
                    if(usu=="")
                    {
                        
                        alert("Por favor llene el campo Usuario");
                        
                    }
                    
                    else if (pass=="")
                    {
                        
                        alert("Por favor llene el campo Contrasena");
                        $('.usu').val()=usu;
                        alert('hp');
                        
                    }
                    
                    else 
                    {
                        
                        alert("Verificando Datos");
                        
                    }
                    
                })
                
            })