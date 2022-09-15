

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
            <h1>COLABORADORES</h1>
<!--            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="border: 2px solid black; padding: 10px; border-radius: 10px;">
                        <form class="row g-3">

                            <div class="col-4">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="NOMBRES">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="APELLIDO PATERNO">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="APELLIDO MATERNO">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="DNI">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="NOMBRE USUARIO">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="CONTRASEÑA">
                            </div>
                            <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">ACTIVO</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-check ms-5">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">INACTIVO</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Selecione Roles</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">cajero</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <a class="ms-4"  href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
                                    <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
                                    </svg></a>
                                <a class="ms-4" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                    </svg></a>

                            </div>

                        </form>
                    </div>
                </div>
</div>-->
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
