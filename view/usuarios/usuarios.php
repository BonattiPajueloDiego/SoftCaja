

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>usuarios</title>


    </head>
    <style>


        .inicio{
            border: 1px solid black;
            min-height: 97vh;
            padding: 5px;
            background:transparent;
            box-shadow: -1px 5px 7px 6px rgb(82, 82, 82);

            border-radius: 25px;

        }
        img{
            width: 100%;
            border: none;
            height: 100vh;
        }

        .ag{
            color: #fff; 
            float: right;
            margin-right: 30px;
            margin-top: 10px;
        }

        h1{
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
        }
    </style>

    <body >
 
        <div class="inicio">
            <a class="btn btn-primary ag">Agregar</a>
            <h1>COLABORADORES3</h1>
            <div class="container mt-3">
                <div class="row ">
                    <div class="col-12">
                        <div class="table-responsive cont-table">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nombres y Apellidos</th>
                                        <th>DNI</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Estado</th>
                                        <th>Rol</th>
                                        <th>ED</th>
                                        <th>EL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  echo $param2?>
                                    <!-- <?php
                                    foreach ($param as $users) {
                                        echo '<tr>';
                                            echo '<td>'. $users['nomb'] .$users['ap_pat'].$users['ap_mat'].'</td>';
                                            echo '<td>'. $users['dni'] .'</td>';
                                            echo '<td>'. $users['users'] .'</td>';
                                            echo '<td>'. $users['pass'] .'</td>';
                                            echo '<td>'. $users['esta'] .'</td>';
                                            echo '<td>'. $users['rol'] .'</td>';
                                            echo '<td> <a href="#" ><i class="fa-solid fa-user-pen"></i></a></td>';
                                            echo '<td> <a href="#" ><i class="fa-solid fa-user-pen"></i></a></td>';
                                        echo'</tr>';
                                    }
                                    ?>  -->
                                    
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
</html>
