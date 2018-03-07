$(document).ready(function(){
    
                $(document).on("click", ".boton", function(){
                    
                    var usu=$('.usu').val();
                    var pass=$('.pass').val();
                    $.ajax
                    ({
                        
                        url: "http://localhost/inventario/login/entrar",
                        method: "POST",
                        data: {usu:usu, clave:pass},
                        success: function(response)
                        {
                            
                            alert("holaa");
                            
                        },
                        error : function(xhr, status) {
                            alert("<?php echo base_url(); ?>");
                        }
                        
                    })
                    
                })
                
            })