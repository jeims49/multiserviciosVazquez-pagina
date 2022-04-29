<?php include("plantillas/encabezado.php")?>

    <style> 
        /* Estilos del formulario de contactar */
        form{
            width: 450px;
            margin: auto;
            background: rgba(235, 97, 33, 0.582);
            padding: 10px 20px;
            box-sizing: border-box;
            margin-top:  20px;
            border-radius: 8px;
        }
        form h2{
            color: rgb(10, 10, 10);
            text-align: center;
            margin: 0;
            font-size: 30px;
            margin-bottom: 20px;
        }
        label{
            font-size: 20px;
        }
        .nombre,.correo,.telefono{
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom-color: rgb(75, 127, 241) ;
        }
        .nombre:focus,.correo:focus,.telefono:focus{
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom-color: rgb(8, 155, 3) ;
        }  
        
        input, textarea{
            background: rgba(235, 97, 33, 0);
            width: 100%;
            margin-bottom: 20px;
            padding: 7px;
            box-sizing: border-box;
            font-size: 17px;
            /* border: none; */
            outline: 0px;

        }
        textarea{
            min-height: 100px;
            max-height: 200px;
            max-width: 100%;
            min-width: 100%;
            border-color: black;
        }
        #boton{
            background: rgba(2, 131, 2, 0.685);
            color: #fff;
            padding: 20px;
            border: none;
        }
        #boton:hover{
            cursor: pointer;
            height: 57px;
            width: 409px;
            background: rgba(6, 27, 148, 0.89);
        }

        @media(max-width:480px){
            form{
                width: 100%;
            }
            form h2{
                font-size: 20px;
            }
            input, textarea{
                font-size: 13px;
            }
            label{font-size: 14px;}
        }
    </style>
    <div class="conten">
        <form action="https://formsubmit.co/multiserviciosvazquez30@gmail.com" method="POST">
            <h2><b>CONTACTAR</b></h2>
            <label ><b>Nombre:</b></label>
            <input type="text" name="nombre" class="nombre" id="nombre" placeholder="nombre completo">
            <label ><b>Correo Electronico:</b></label>
            <input type="email" name="correo"class="correo" id="correo" placeholder="ejemplo@gmail.com">
            <label ><b>Telefono:</b></label>
            <input type="text" name="telefono" class="telefono" id="telefono" placeholder="xxx-xxx-xxxx">
            <label ><b>Mensaje:</b></label>
            <textarea name="mensaje" placeholder="Escriba su mensaje" id="mensaje"></textarea>
            <input type="submit" value="ENVIAR" id="boton">
        </form>
        <!-- <Script>
            const btnEnviar = document.getElementById("boton");
            btnEnviar.addEventListener("click", function (e) {
                e.preventDefault(); //previene que no se actualice la pagina
                const nombre = document.getElementById("nombre").value;
                const correo = document.getElementById("correo").value;
                const telefono = document.getElementById("telefono").value;
                const mensaje = document.getElementById("mensaje").value;
                window.location.href=`mailto:multiserviciosvazquez30@gmail.com?subject=envioDesdeFormulario&body=Nombre%3A%20${nombre}%0ACorreo%3A%20${correo}%0ATelefono%3A%20${telefono}%0AMensaje%3A%20${mensaje}`;
            });
        </Script> -->
    </div>
    
<?php include("plantillas/pie.php") ?>