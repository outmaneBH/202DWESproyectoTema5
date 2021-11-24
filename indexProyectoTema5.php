<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="webroot/css/style.css">
        <style>
            .w3-container{
                margin-bottom: 2px;
            }
            #divcon div{
                margin-bottom: 2px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 200px;
                background-color: #f1f1f1;
            }

            li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            li a.active {
                background-color: #04AA6D;
                color: white;
            }

            li a:hover:not(.active) {
                background-color: #555;
                color: white;
            }
            p{
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="w3-container" style="padding-top:  40px;">
          
            <div class="w3-row w3-container">
                <div class="w3-col s2 ">
                    <ul>
                        <li><a class="active" href="/index.html">Home</a></li>
                       
                    </ul> 

                </div>
                <div class="w3-col s9 ">
                    <div class="w3-row w3-container" id="divcon">
                          <h2>Índice de Proyecto Tema 5</h2>
                        <!<!-- 1 -->
                        <div class="w3-col s10 w3-blue">
                            <p>0. Mostrar el contenido de las variables superglobales y phpinfo()</p>
                        </div>
                        <div class="w3-col s2 w3-dark-grey w3-center">
                            <a href="codigoPHP/ejercicio00.php"><img src="webroot/media/run.png" alt="runIcon"></a>
                            <a href="mostrarcodigo/muestraEjercicio00.php"><img src="webroot/media/codigo.png" alt="runIcon">
                        </div>
                        <!<!-- 2-->
                        <div class="w3-col s10 w3-green ">
                            <p>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header()</p>
                        </div>
                        <div class="w3-col s2 w3-dark-grey w3-center">
                            <a href="codigoPHP/ejercicio01.php"><img src="../webroot/media/img/Tema3/run.png" alt="runIcon"></a>
                           
                        </div>
                        <!<!-- 3 -->
                        <div class="w3-col s10 w3-green ">
                            <p>2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y
                                en el uso de una tabla “Usuario” de la base de datos. (PDO)</p>
                        </div>
                        <div class="w3-col s2 w3-dark-grey w3-center">
                            <p>3</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>
