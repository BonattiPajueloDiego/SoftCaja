

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Municipalidad Humaya</title>
        <link rel="icon" href="img/logo.jpg"/>
        <!--estilos css-->



        <link href="./datatables/datatables.min.css" rel="stylesheet" type="text/css"/>
        <link href="./datatables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
        <link href="./datatables/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./css/main.css" rel="stylesheet" type="text/css"/>
        <link href="./datatables/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
        <!--font awesome-->
        <script src="https://kit.fontawesome.com/875ed3d9d8.js" crossorigin="anonymous"></script>
        <!-- fin -->
        <link href="./css/main.css" rel="stylesheet" type="text/css"/>
        <!-- fin --> 

        <!--RangerPocker-->
        <link href="./datatables/RangerPicker/daterangepicker.min.css" rel="stylesheet" type="text/css"/>
        <!---->

    </head>
    <body>
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-3">
                    <?php
                    include_once 'headerc.php';
                    ?>
                </div>
                <div class="col-9">
                    <?php
                    if (isset($urlDirection)) {
                        include_once './view/' . $urlDirection . '.php';
                    }
                    ?>
                </div>
            </div>
        </div>




        <!-- DATA TABLES-->

        <script src="./datatables/dataTables.bootstrap5.min.js" type="text/javascript"></script>
        <script src="./datatables/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="./datatables/jquery.dataTables.min.js" type="text/javascript"></script>

        <script src="./datatables/datatables.min.js" type="text/javascript"></script>
        <!-- Uso de Botones -->
        <script src="./datatables/Buttons-2.2.3/js/dataTables.buttons.min.js" type="text/javascript"></script>
        <script src="./datatables/JSZip-2.5.0/jszip.min.js" type="text/javascript"></script>
        <script src="./datatables/pdfmake-0.1.36/pdfmake.min.js" type="text/javascript"></script>
        <script src="./datatables/pdfmake-0.1.36/vfs_fonts.js" type="text/javascript"></script>
        <script src="./datatables/Buttons-2.2.3/js/buttons.html5.min.js" type="text/javascript"></script>
        <!-- FIN -->

        <!-- inicio js propios -->
        <script src="./js/main.js" type="text/javascript"></script>
        <!-- fin -->
        
        <!-- RangerPicker-->
        <script src="./datatables/RangerPicker/moment.js" type="text/javascript"></script>
        <script src="./datatables/RangerPicker/date-range-picker.min.js" type="text/javascript"></script>

    </body>
</html>
