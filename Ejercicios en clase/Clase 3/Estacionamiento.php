<?php     
include "Vehiculo.php";
include "VehiculoEstacionado.php";
include "VehiculoFacturado.php";
define ("TARIFA", 10);
class Estacionamiento{

    static function CobrarAuto($patente, $vehiculosEstacionados){
        $vehiculosEstacionados = Estacionamiento::LimpiarVacios($vehiculosEstacionados);
        $tiempoTranscurridoEnSegundos;
        for($i = 0; $i<Count($vehiculosEstacionados); $i++){
            if($vehiculosEstacionados[$i]->getPatente() == $patente){
                date_default_timezone_set('America/Argentina/Buenos_Aires'); 
                $now = date("Y-m-d H:i:s");
                $inicio = $vehiculosEstacionados[$i]->getFechaDeEntrada();
                $segundosNow = strtotime($now);
                $segundosInicio = strtotime($inicio);
                $tiempoTranscurridoEnSegundos = $segundosNow - $segundosInicio;
                $saldo = $tiempoTranscurridoEnSegundos * TARIFA;
                $archivo = fopen("archivos/Facturados.txt", "a");
                fwrite($archivo, $vehiculosEstacionados[$i]->getPatente()." ".$now." $".$saldo."\n");
                fclose($archivo);
                unset($vehiculosEstacionados[$i]);
                break;
            }
        }
        $archivo = fopen("archivos/Estacionados.txt", "w");
        foreach($vehiculosEstacionados as $vehiculo){
            fwrite($archivo, $vehiculo->getPatente()." ".$now."\n");
        }
        
        fclose($archivo);

        var_dump($vehiculosEstacionados);
    }

    static function Guardar($auto){
        date_default_timezone_set('America/Argentina/Buenos_Aires'); 
        $archivo = fopen("archivos/Estacionados.txt", "a");
        $ahora = date("Y-m-d H:i:s");
        var_dump($auto);
        fwrite($archivo, $auto->getPatente()." ".$ahora."\n");
        fclose($archivo);
        
    }

    static function Sacar($auto){
    
    $vehiculosEstacionados = Estacionamiento::RecuperarAutosDeArchivo();  

    if(Estacionamiento::VerificarSiExiste($vehiculosEstacionados, $auto->getPatente())){
        Estacionamiento::CobrarAuto($auto->getPatente(), $vehiculosEstacionados);
    }else{
        echo "El auto con patente: ".$auto->getPatente().", no se encuentra en el estacionamiento.";
    }

    }

    static function RecuperarAutosDeArchivo(){
        $fichero = fopen("archivos/Estacionados.txt", "r") or exit("Unable to open file!");
        $vehiculosEstacionados = array();
        while(!feof($fichero))
        {
            $temp = fgets($fichero);
            list($patente, $fecha, $hora) = sscanf($temp, "%6s %s %s");
            $vehiculoEstacionado = new VehiculoEstacionado($patente, $fecha." ".$hora);
            array_push($vehiculosEstacionados, $vehiculoEstacionado);
        }
        fclose($fichero);
        return $vehiculosEstacionados;
    }

    static function RecuperarAutosFacturados(){
        $fichero = fopen("archivos/Facturados.txt", "r") or exit("Unable to open file!");
        $vehiculosFacturados = array();
        while(!feof($fichero))
        {
            $temp = fgets($fichero);
            list($patente, $fecha, $hora, $saldo) = sscanf($temp, "%6s %s %s %s");
            $vehiculoFacturado = new VehiculoFacturado($patente, $fecha." ".$hora, $saldo);
            array_push($vehiculosFacturados, $vehiculoFacturado);
        }
        fclose($fichero);
        return $vehiculosFacturados;
    }

    static function VerificarSiExiste($vehiculosEstacionados, $patente){
    $retorno;    
        foreach($vehiculosEstacionados as $vehiculo){
            if($vehiculo->getPatente() == $patente){
                $retorno = true;
                break;
            }else{
                $retorno = false;
            }
        }
        return $retorno;
    }

    

    static function LimpiarVacios($vehiculos){
        sort($vehiculos);
        for($i = 0; $i<Count($vehiculos); $i++){
            if($vehiculos[$i]->getPatente()==null){
                unset($vehiculos[$i]);
            }
        }
        sort($vehiculos);
        return $vehiculos;
    }
}

?>