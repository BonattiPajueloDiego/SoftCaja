
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Municipalidad Humaya</title>
        <link rel="icon" href="img/logo.jpg"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


        <!--estilos css-->
        <!--<link href="./css/header.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
        <!-- fin --> 
        <style>

            .header{
                padding-left: 0;
                padding-right: 0;
                text-align: center;
                position: fixed;
                top: 0;
                left: 0;
                display: flex;
                flex-direction: column;
                width: 25%;
                height: 100vh;
                background:red;
                /*border-right: 2px solid blueviolet;*/

            }
            .cont-img{
                margin-top: 10px;
            }
            .logo{

                margin-bottom: 20px;
                width: 200px;
                height: 200px;
            }
            .nombre{
                font-size: 1rem;
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <?php
                    include_once 'header.php';
                    include_once './view/footer.php';
                    ?>
                </div>
                <div class="col-9">
                    <?php
                    include_once './view/caja_inicio.php';
                    ?>
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </body>
</html>
