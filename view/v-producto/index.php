<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <title>Vista | Productos</title>

    <!-- vendor css -->
    <link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../public/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../public/css/bracket.css">

    <!-- DataTable CSS -->
    <link rel="stylesheet" href="../../public/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../public/datatables/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../../public/datatables/responsive.dataTables.min.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Menu de Navegacion</label>
      <div class="br-sideleft-menu">
        <a href="../../index.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Inicio</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="./index.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon fa fa-fax tx-20"></i>
            <span class="menu-item-label">Productos</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="../v-cliente/index.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-person-stalker tx-20"></i>
            <span class="menu-item-label">Clientes</span>
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
            <a href="../v-reportes/p-producto/index.php" class="nav-link">Ventas por producto</a>
          </li>
          <li class="nav-item">
            <a href="../v-reportes/p-cliente/index.php" class="nav-link">Ventas por cliente</a>
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

    

      <!-- Tab panes -->
      
    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="../../index.php">Inicio</a>
          <span class="breadcrumb-item active">Producto</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Producto</h4>
        <p class="mg-b-0">Aqui podemos ver el listado de los productos, editarlos o eliminarlos.</p>
      </div>

      <div class="br-pagebody">
        <!-- Tabla de productos -->
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Listado de Productos</h6>

          <p class="mg-b-25 mg-lg-b-50">CRUD para productos.</p>

          <div class="row">
    
            <div class="col-md-3 col-sm-6">
            <button id="btn_nuevo" class="btn btn-outline-success btn-block mg-b-5">Nuevo Producto</button>
            </div>  

          </div>
          
          <br><hr><br>
          <div class="table-wrapper">
            <table id="datos_productos" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id Material</th>
                  <th class="wd-15p">Descripcion</th>
                  <th class="wd-15p">Unidad de Medida</th>
                  <th class="wd-15p">Precio</th>
                  <th class="wd-15p"></th>
                  <th class="wd-15p"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                </tr>
              </tbody>

            </table>
          </div>

        </div>

      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->

    <?php  /*Modal*/ require_once('./modal_producto.php'); ?>
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="../../public/lib/popper.js/popper.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../../public/lib/moment/moment.js"></script>
    <script src="../../public/lib/jquery-ui/jquery-ui.js"></script>
    <script src="../../public/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../../public/lib/peity/jquery.peity.js"></script>
  <!-- Script principal de plantilla -->
    <script src="../../public/js/bracket.js"></script>

  <!-- Script para uso de DATATABLES -->
  <script src="../../public/lib/datatables/jquery.dataTables.js"></script>
  <script src="../../public/lib/datatables-responsive/dataTables.responsive.js"></script>

    <script src="../../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../../public/datatables/buttons.html5.min.js"></script>
    <script src="../../public/datatables/buttons.colVis.min.js"></script>
    <script src="../../public/datatables/jszip.min.js"></script>
    <!-- <script src="../../public/datatables/pdfmake.min.js"></script> -->
  <!-- CDN PDF -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Script propio (carga de ultimo) -->
    <script src="./productos.js"></script>
  </body>
</html>