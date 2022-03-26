<?php
    require_once('../config/conexion.php'); //TODO: clase conexion
    require_once('../models/mdl_productos.php'); //TODO: modelo
    
    $producto = new Producto(); //TODO: nuevo objeto producto

    switch($_GET["op"]){

        case "listar":
            
                $datos = $producto->get_producto();

                $data = Array();

                //TODO: recorrer datos
                    foreach($datos as $dato){
                        $sub_array = array(); //TODO: inicio sub arreglo
                        //TODO: ID
                        $sub_array[] = $dato["IDMATERIAL"];
                        //TODO: DESCRIPCION
                        $sub_array[] = $dato["DESCRIPCION"];
                        //TODO: UNIDADMEDIDA
                        $sub_array[] = $dato["UNIDADMEDIDA"];
                        //TODO: PRECIO
                        $sub_array[] = $dato["PRECIO1"];

                        //TODO: accion update
                        $sub_array[] = '<button type="button" onClick="editar('.$dato["IDMATERIAL"].');"  id="'.$dato["IDMATERIAL"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                        //TODO: accion delete
                        $sub_array[] = '<button type="button" onClick="eliminar('.$dato["IDMATERIAL"].');"  id="'.$dato["IDMATERIAL"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';

                        $data[] = $sub_array;
                    }
                
                $resultados = array(
                    "sEcho" => 1,
                    "iTotalRecords" => count($data),
                    "iTotalDisplayRecords" => count($data),
                    "aaData" => $data
                );
                
                //TODO: convertir $resultados a JSON para el datatable.
                echo json_encode($resultados);

                break;

        case "guardaryeditar":
            //TODO: Obtener id
            $datos = $producto->get_producto_x_id($_POST["IDMATERIAL"]);
            
            //TODO: insertar producto
            if( empty( $_POST["IDMATERIAL"] ) )
            {
                //TODO: datos es arreglo? = true && el conteo es 0
                if (is_array($datos) == true and count($datos) == 0  ) 
                {   //TODO: inserta de producto(nuevo)
                    $producto->insert_producto($_POST["DESCRIPCION"],$_POST["UNIDADMEDIDA"],$_POST["PRECIO1"]);
                }
            }
            else {
                //TODO: inserta de producto (update)
                $producto->update_producto($_POST["IDMATERIAL"],$_POST["DESCRIPCION"],$_POST["UNIDADMEDIDA"],$_POST["PRECIO1"]);    
            }
                break;

        case "mostrar";
            //TODO: obtener por id
            $datos = $producto->get_producto_x_id($_POST["IDMATERIAL"]);

            if (is_array($datos) == true && count($datos) > 0 ) 
                {
                    //TODO: recorrer arreglo
                    foreach ($datos as $dato) {
                        $salida["IDMATERIAL"] = $dato["IDMATERIAL"];
                        $salida["DESCRIPCION"] = $dato["DESCRIPCION"];
                        $salida["UNIDADMEDIDA"] = $dato["UNIDADMEDIDA"];
                        $salida["PRECIO1"] = $dato["PRECIO1"];
                    }
                    echo json_encode($salida);
                }

        break;
    

        case 'eliminar':
            //TODO: eliminar por id - viene desde el js a travez de post
            $producto->delete_producto_x_id($_POST["IDMATERIAL"]);
            break;
        }
?>