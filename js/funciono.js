$(document).ready(function(){
    
                $(document).on("click", ".boton", function(){
                    
                    var usu=$('.usu').val();
                    var pass=$('.pass').val();
                    
                    var html="hola";
                    $(".error_u").text(html);
                    
                    if (usu.length<4)
                    {
                        
                        $(".error_u").text(html);
                        
                    }
                    
                    $.ajax
                    ({
                        
                        url: "http://localhost/inventario/login/entrar",
                        method: "POST",
                        data: {usu:usu, clave:pass},
                        success: function(response)
                        {
                            
                            if(response==0)
                            {
                                
                                alert("response");
                                
                            }
                            
                            else 
                            {
                                
                                window.location="menu";
                                
                            }
                            
                        },
                        error : function(xhr, status) {
                            alert("<?php echo base_url(); ?>");
                        }
                        
                    })
                    
                })
                
            })