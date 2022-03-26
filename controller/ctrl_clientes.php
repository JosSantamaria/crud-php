<?php
    require_once('../config/conexion.php'); 
    require_once('../models/mdl_clientes.php'); 
    
    $cliente = new Cliente(); 

    switch($_GET["op"]){

        case "listar":
            
                $datos = $cliente->get_cliente();

                $data = Array();

                
                    foreach($datos as $dato){
                        $sub_array = array(); 
                        //TODO: ID
                        $sub_array[] = $dato["IDCLIENTE"];
                        //TODO: RAZON_SOCIAL
                        $sub_array[] = $dato["RAZON_SOCIAL"];
                        //TODO: RFC
                        $sub_array[] = $dato["RFC"];
                       
                        //TODO: accion update
                        $sub_array[] = '<button type="button" onClick="editar('.$dato["IDCLIENTE"].');"  id="'.$dato["IDCLIENTE"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                        //TODO: accion delete
                        $sub_array[] = '<button type="button" onClick="eliminar('.$dato["IDCLIENTE"].');"  id="'.$dato["IDCLIENTE"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';

                        $data[] = $sub_array;
                    }
                
                $resultados = array(
                    "sEcho" => 1,
                    "iTotalRecords" => count($data),
                    "iTotalDisplayRecords" => count($data),
                    "aaData" => $data
                );
                
               
                echo json_encode($resultados);

                break;

        case "guardaryeditar":
            
            $datos = $cliente->get_cliente_x_id($_POST["IDCLIENTE"]);
            
           
            if( empty( $_POST["IDCLIENTE"] ) )
            {
                
                if (is_array($datos) == true and count($datos) == 0  ) 
                {   
                    $cliente->insert_cliente($_POST["RAZON_SOCIAL"],$_POST["RFC"]);
                }
            }
            else {
                
                $cliente->update_cliente($_POST["IDCLIENTE"],$_POST["RAZON_SOCIAL"],$_POST["RFC"]);    
            }
                break;

        case "mostrar";
            
            $datos = $cliente->get_cliente_x_id($_POST["IDCLIENTE"]);

            if (is_array($datos) == true && count($datos) > 0 ) 
                {
                    //TODO: recorrer arreglo
                    foreach ($datos as $dato) {
                        $salida["IDCLIENTE"] = $dato["IDCLIENTE"];
                        $salida["RAZON_SOCIAL"] = $dato["RAZON_SOCIAL"];
                        $salida["RFC"] = $dato["RFC"];
                    }
                    echo json_encode($salida);
                }

        break;
    

        case 'eliminar':
            //TODO: eliminar por id - viene desde el js a travez de post
            $cliente->delete_cliente_x_id($_POST["IDCLIENTE"]);
            break;
        }
?>