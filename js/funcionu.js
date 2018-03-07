$(document).ready(function(){
    
                $(document).on("click", ".boton", function(){
                    
                    var usu=$('.usu').val();
                    var pass=$('.pass').val();
                    
                    var error_1="Error: Este campo debe contener al menos 4 caracteres .l.";
                    var error_2="Error: Este campo no puede estar vacio";
                    
                    if (usu=="")
                    {
                        
                        $(".error_u").css("visibility", "visible");
                        $(".error_u").text(error_2);
                        
                    }
                    
                    else if (usu.length<4)
                    {
                        
                        $(".error_u").css("visibility", "visible");
                        $(".error_u").text(error_1);
                        
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