<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bienvenido</title>

    <!-- vendor css -->
    <link href="./public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="./public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="./public/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./public/css/bracket.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Menu de Navegacion</label>
        <div class="br-sideleft-menu">
            <a href="index.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Inicio</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="./view/v-producto/index.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon fa fa-fax tx-20"></i>
                    <span class="menu-item-label">Productos</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="./view/v-cliente/index.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-person-stalker tx-22"></i>
                    <span class="menu-item-label">Clientes</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="./view/v-ventas/index.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-person-stalker tx-22"></i>
                    <span class="menu-item-label">Ventas</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-calculator tx-22"></i>
                    <span class="menu-item-label">Reportes</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column" style="display: block;">
                <li class="nav-item">
                    <a href="./view/v-reportes/p-producto/index.php" class="nav-link">Ventas por producto</a>
                </li>
                <li class="nav-item">
                    <a href="./view/v-reportes/p-producto/index.php" class="nav-link">Ventas por cliente</a>
                </li>

            </ul>



        </div><!-- br-sideleft-menu -->



        <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
            
        </div><!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">



            </nav>

        </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="./index.php">Inicio</a>
                <!-- <span class="breadcrumb-item active">Producto</span> -->
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Inicio</h4>
            <p class="mg-b-0">Bienvenido, en este pequeño proyecto tratamos de hacer un CRUD </p>
            <p class="mg-b-0">con PHP,JS,JQUERY, utilizando JS - datatables y la plantilla de Brackets Basada en BOOTSTRAP 4.</p>
        </div>

        <div class="br-pagebody mb-5">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">1: SQL - Bases de datos</h5>
                    <h6 class="card-subtitle">Creacion de la base de datos desde phpmyadmin</p>
                        <p> - Sentencia: Base de datos "empresa":</p>
                        <p class="card-text">
                        <pre><strong class="text-success">CREATE DATABASE</strong> empresa </pre>
                        </p>
                        <hr>
                        <h6> - Sentencia: Tabla productos</h6>
                        <p class="card-text">
                        <pre> <strong class="text-success">CREATE TABLE </strong>`empresa`.`t_productos` ( 
                        `IDMATERIAL` INT(20) <span class="text-info">NOT NULL</span> AUTO_INCREMENT ,
                        `DESCRIPCION` VARCHAR(60) <span class="text-info">NOT NULL</span> ,
                        `UNIDADMEDIDA` VARCHAR(10) <span class="text-info">NOT NULL</span> ,
                        `PRECIO1` DOUBLE(13,3) <span class="text-info">NOT NULL</span> ,
                         PRIMARY KEY (`IDMATERIAL`)
                        ) <span class="text-danger">ENGINE = InnoDB;</span> </pre>
                        </p>
                        <hr>
                        <h6> - Sentencia: Tabla clientes</h6>
                        <p class="card-text">
                        <pre><strong class="text-success">CREATE TABLE </strong>`empresa`.`t_clientes` ( 
                        `IDCLIENTE` INT(11) <span class="text-info">NOT NULL</span> AUTO_INCREMENT ,
                        `RAZON_SOCIAL` VARCHAR(60) <span class="text-info">NOT NULL</span> ,
                        `RFC` VARCHAR(15) <span class="text-info">NOT NULL</span> ,
                         PRIMARY KEY (`IDCLIENTE`)
                        ) <span class="text-danger">ENGINE = InnoDB;</span> </pre>
                        </p>
                        <hr>
                        <h6> - Sentencia: Tabla documento</h6>
                        <p class="card-text">
                        <pre><strong class="text-success">CREATE TABLE </strong>`empresa`.`t_documento` ( 
                            `IDCODIGO` INT(11) <span class="text-info">NOT NULL</span> AUTO_INCREMENT ,
                            `IDCLIENTE` INT(11) <span class="text-info">NOT NULL</span> ,
                            `RAZON_SOCIAL` VARCHAR(60) <span class="text-info">NOT NULL</span> ,
                            `RFC` VARCHAR(15) <span class="text-info">NOT NULL</span> ,
                            `SUBTOTAL` DOUBLE(13,3) <span class="text-info">NOT NULL</span> ,
                            `IVA` DOUBLE(13,3) <span class="text-info">NOT NULL</span> ,
                            `TOTAL` DOUBLE(13,3) <span class="text-info">NOT NULL</span> ,
                        PRIMARY KEY (`IDCODIGO`)
                        ) <span class="text-danger">ENGINE = InnoDB;</span> </pre>
                        </p>

                        <hr>
                        <h6> - Sentencia: Tabla documentorenglon</h6>
                        <p class="card-text">
                        <pre><strong class="text-success">CREATE TABLE </strong>`empresa`.`t_documentorenglon` (
                        `IDCODIGO` INT(11) <span class="text-info">NOT NULL</span> , 
                        `IDMATERIAL` INT(20) <span class="text-info">NOT NULL</span> , 
                        `UNIDADMEDIDA` VARCHAR(10) <span class="text-info">NOT NULL</span> , 
                        `CANTIDAD` DOUBLE(13,3)<span class="text-info">NOT NULL</span> , 
                        `PRECIO1` DOUBLE(13,3) <span class="text-info">NOT NULL</span> 
                        ) <span class="text-danger">ENGINE = InnoDB;</span> </pre>
                        </p>

                </div>
            </div>


            <!-- start you own content here -->

        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="./public/lib/jquery/jquery.js"></script>
    <script src="./public/lib/popper.js/popper.js"></script>
    <script src="./public/lib/bootstrap/bootstrap.js"></script>
    <script src="./public/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="./public/lib/moment/moment.js"></script>
    <script src="./public/lib/jquery-ui/jquery-ui.js"></script>
    <script src="./public/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="./public/lib/peity/jquery.peity.js"></script>

    <script src="./public/js/bracket.js"></script>
</body>

</html>