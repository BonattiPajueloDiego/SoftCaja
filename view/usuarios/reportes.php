

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

            <h1>Reportes</h1>
            <div class="row">   
                    <div class="col-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" name="daterange" value="01/01/2018 - 01/15/2018" /> 
                    </div>
                    <div class="col-4">
                        <input type="submit" class="btn btn-primary" name="daterange" value="Seleccionar" /> 
                    </div>
            </div>

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

                                    <tr>
                                        <td>Diego Bonatti Pajuelo</td>
                                        <td>77355123</td>
                                        <td>Usuario</td>
                                        <td>Contraseña</td>
                                        <td style="background: red">Inabilitado</td>
                                        <td>Rol</td>
                                        <td><a href="#" ><i class="fa-solid fa-user-pen"></i></a></td>
                                        <td><a href="#" ><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Zoraida Lucia Soto</td>
                                        <td>77355123</td>
                                        <td>Usuario</td>
                                        <td>Contraseña</td>
                                        <td>Estado</td>
                                        <td>Rol</td>
                                        <td><a href="#" ><i class="fa-solid fa-user-pen"></i></a></td>
                                        <td><a href="#" ><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>

                                <tfoot>
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
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>

