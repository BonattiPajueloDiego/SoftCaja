

<header class=" header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col" >

                <!--boton responsive-->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" 
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex justify-content-center cont-img">
                    <img src="./img/logo.jpg" class="img-thumbnail logo" alt="alt"/>
                </div>
                <div class="text-center">
                    <h3 class="nombre"><?php echo $user->getnombre(); ?> </h3>   
                </div>

               
                <div class="d-grid gap-2 mt-3">
                    <a href="#" class="btn btn-primary" >Pagos </a>
                </div>
                
                <div class="d-grid gap-2 mt-3">
                    <a href="#" class="btn btn-primary" >Editar Información </a>
                </div>
                <div class="d-grid gap-2 mt-3">
                    <a href="./includes/logout.php" class="btn btn-primary" >Cerrar Sesión </a>
                </div>
                
            </div>
        </div>
    </div>

</header>

