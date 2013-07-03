<?php

    require_once("WSSDQS.php");

    echo "<pre>";

    $sdqs = new WSSDQS();

    try{
        echo "<h3>getFunctions():</h3>";
        $r = $sdqs->getFunctions();
        print_r($r);
    }catch(Exception $e){
        echo $e->getMessage()."\n";
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }

    /* Registro de un requerimiento */
    try{    
        echo "<h3>registroRequerimiento():</h3>";
        $params=array(
            "requerimiento"=>array(
                "numeroRadicado"=>"2",
                "numeroFolios"=>"1",
                "asunto"=>"Asunto Prueba",
                "numeroDocumento"=>"80213841",
                "nombres"=>"Jorege",
                "apellidos"=>"Gonzalez",
                "email"=>"",
                "telefonoCasa"=>"",
                "telefonoOficina"=>"",
                "telefonoCelular"=>"",
                "direccion"=>"",
                "codigoCiudad"=>"11001",
                "codigoDepartamento"=>"250",
                "codigoPais"=>"1",
                "codigoTipoRequerimiento"=>"1",
                "clasificacionRequerimiento"=>array(
                    "codigoSector"=>array("5"),
                    "codigoEntidad"=>array("140"),
                    "codigoSubtema"=>array("1")
                ),
                "observaciones"=>"Esto es una prueba de registro.",
                "prioridad"=>"2",
                //"documento"=>"",
                "entidaIngresaRq"=>1//"2311",
            )
        );
        $r = $sdqs->registroRequerimiento($params);
        print_r($r);
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }catch(Exception $e){
        echo $e->getMessage()."\n";
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }
    
    /* Cierre de un requerimiento */
    try{    
        echo "<h3>cierreRequerimiento():</h3>";
        $params = array(
            "cierreRequerimiento"=>array(
                "numeroRadicado"=>"2",
                "codigoRequerimiento"=>"995739",
                "fechaSolucion"=>"2013-06-23",
                "descripcion"=>"Cierre de prueba",
                "tipo"=>"2",
                "numeroDocumento"=>"80880808",
                "documento"=>"",
                "nfolios"=>array("4")
            )
        );
        $r = $sdqs->cierreRequerimiento($params);
        print_r($r);
    }catch(Exception $e){
        echo $e->getMessage()."\n";
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }
    
    /* Consultar estado de un requerimiento */
    try{    
        echo "<h3>consultarEstadoRequerimiento(995741):</h3>";
        $r = $sdqs->consultarEstadoRequerimiento("995741");
        print_r($r);
    }catch(Exception $e){
        echo $e->getMessage()."\n";
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }
    
    /* Consultar estado de un requerimiento */
    try{    
        echo "<h3>consultarHojaRutaRequerimiento(995739):</h3>";
        $r = $sdqs->consultarHojaRutaRequerimiento("995739");
        print_r($r);
    }catch(Exception $e){
        echo $e->getMessage()."\n";
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }

    /* Consultar un requerimiento */
    try{    
        echo "<h3>ConsultaRequerimiento(995739):</h3>";
        $r = $sdqs->ConsultaRequerimiento("995739");
        print_r($r);
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }catch(Exception $e){
        echo $e->getMessage()."\n";
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }
    
    
    /* Consultar requerimientos por fecha */
    try{    
        echo "<h3>Consultafecha():</h3>";
        $params = array(
            'codigoRequerimiento' => "995739",
            'Entidad' => "1",
            'fechaInicial' => array("2013-05-01"),
            'fechaFinal' => array("2013-06-30")
        );
        $r = $sdqs->Consultafecha($params);
        print_r($r);
    }catch(Exception $e){
        echo $e->getMessage()."\n";
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }
    
    /* Adjuntar archivo a un requerimiento */
    /*TODO:
    try{    
        echo "<h3>AdjuntarArchivo():</h3>";
        $params = array(
            'codigoRequerimiento' => "995739",
            'documento' => ""
        );
        $r = $sdqs->AdjuntarArchivo();
        print_r($r);
    }catch(Exception $e){
        echo $e->getMessage()."\n";
        echo "<h4>Request:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastRequest()."</div>";
        echo "<h4>Response:</h4><div style='width:800px;border:1px solid;overflow:auto;'>".$sdqs->getLastResponse()."</div>";
    }
    //*/

    echo "</pre>";

?>
