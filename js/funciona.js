$(document).ready(function(){
    
                $(document).on("click", ".boton", function(){
                    
                    var usu=$('.usu').val();
                    var pass=$('.pass').val();
                    
                    $.ajax
                    ({
                        
                        url: "loginAjax.php",
                        method: "POST",
                        data: {usuario:usu, password:pass},
                        success: function(data)
                        {
                            
                            alert("funciona");
                            
                        }
                        
                    })
                    
                })
                
            })