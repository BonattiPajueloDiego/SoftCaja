

<header class=" header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col" >

                <!--boton responsive-->

                <div class="d-flex justify-content-center cont-img">
                    <a href="<?php
                    echo "./index.php";
                    ?>"><img src="./img/logo.jpg" class="logo" alt="alt"/></a> 
                </div>
                <div class="text-center">
                    <h3 class="nombre"><?php echo $user->getnombre(); ?> </h3>   
                </div>

                <div class=" d-grid gap-2 botn mt-3">
                    <a href="<?php
                     echo "./usuarioss.php";
                    ?>" class="btn " >Usuarios </a>
                </div>
                <div class="d-grid gap-2 botn mt-3">
                    <a href="<?php
                    echo "./pagos.php";
                    ?>" class="btn " >Pagos </a>
                </div>
                <div class="d-grid gap-2 botn mt-3">
                    <a href="<?php
                    echo "./reportes.php";
                    ?>" class="btn " >Reportes </a>
                </div>
                <div class="d-grid gap-2 botn mt-3">
                    <a href="<?php
                    echo "./usuarioss.php";
                    ?>" class="btn " >TUPA</a>
                </div>
                <div class="d-grid gap-2 botn mt-3">
                    <a href="<?php
                    echo "./editInfo.php";
                    ?>" class="btn " >Editar Información </a>
                </div>
                <div class="d-grid gap-2 botn mt-3">
                    <a href="./includes/logout.php" class="btn" >Cerrar Sesión </a>
                </div>
                <?php include_once './view/footer.php'; ?>

            </div>
        </div>
    </div>


</header>

