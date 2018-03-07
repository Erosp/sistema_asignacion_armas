$(document).ready(function(){
    
                $(document).on("click", ".boton", function(){
                    
                    var usu=$('.usu').val();
                    var pass=$('.pass').val();
                    
                    var error_1="Error: Este campo debe contener al menos 4 caracteres";
                    var error_2="Error: Este campo no puede estar vacio";
                    var error_3="Error: El nombre de usuario y/o la clave es incorrecta";
                    
                    if (usu=="")
                    {
                        
                        $(".error_l").css("visibility", "hidden");
                        $(".error_l").text("");
                        $(".lbnom").css("margin-top", "0px");
                        $(".error_p").css("visibility", "hidden");
                        $(".error_p").text("");
                        $(".error_u").css("visibility", "visible");
                        $(".error_u").text(error_2);
                        
                    }
                    
                    else if (usu.length<4)
                    {
                        
                        $(".error_l").css("visibility", "hidden");
                        $(".error_l").text("");
                        $(".lbnom").css("margin-top", "0px");
                        $(".error_p").css("visibility", "hidden");
                        $(".error_p").text("");
                        $(".error_u").css("visibility", "visible");
                        $(".error_u").text(error_1);
                        
                    }
                    
                    else if (pass=="")
                    {
                        
                        $(".error_l").css("visibility", "hidden");
                        $(".error_l").text("");
                        $(".lbnom").css("margin-top", "0px");
                        $(".error_u").css("visibility", "hidden");
                        $(".error_u").text("");
                        $(".error_p").css("visibility", "visible");
                        $(".error_p").text(error_2);
                        
                    }
                    
                    else if (pass.length<4)
                    {
                        
                        $(".error_l").css("visibility", "hidden");
                        $(".error_l").text("");
                        $(".lbnom").css("margin-top", "0px");
                        $(".error_u").css("visibility", "hidden");
                        $(".error_u").text("");
                        $(".error_p").css("visibility", "visible");
                        $(".error_p").text(error_1);
                        
                    }
                    
                    else 
                    {
                        
                        $(".error_l").css("visibility", "hidden");
                        $(".error_l").text("");
                        $(".lbnom").css("margin-top", "0px");
                        $(".error_u").css("visibility", "hidden");
                        $(".error_u").text("");
                        $(".error_p").css("visibility", "hidden");
                        $(".error_p").text("");
                        
                        $.ajax
                        ({

                            url: "http://saa.com/login/entrar",
                            method: "POST",
                            data: {usu:usu, clave:pass},
                            success: function(response)
                            {

                                if(response==0)
                                {

                                    $(".error_l").css("visibility", "visible");
                                    $(".error_l").text(error_3);
                                    $(".lbnom").css("margin-top", "15px");

                                }

                                else 
                                {

                                    $(".error_l").css("visibility", "hidden");
                                    $(".error_l").text("");
                                    $(".lbnom").css("margin-top", "0px");
                                    window.location="menu";

                                }

                            },
                            error : function(xhr, status) {
                                alert("Error al cargar el formulario");
                            }

                        })
                        
                    }
                    
                })
                
            })