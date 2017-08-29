<?php

include_once "Clase 2/Alumno.php";
include_once "Clase 2/Profesor.php";
include_once "Clase 2/Persona.php";

class Aula{
    
public $instructor;
public $alumnos;

    public function __construct($instructor) {
        $this->instructor = $instructor;
        $this->alumnos = array();

    }

    public function addAlumno($alumno){
        array_push($this->alumnos, $alumno);
    }

    public static function getAlumnosEnTodasLasAulasByNombreEdadOSexo($listaDeAulas, $nombre = NULL, $apellido = NULL, $sexo = NULL){
        $resultado = array();
        if ((count($listaDeAulas)==0) || ($nombre == null && $apellido == null && $sexo == null)){
            echo "Error de datos";
        }else{
            foreach($listaDeAulas as $aula){
                    if($nombre != null && $apellido == null && $sexo == null){
                        foreach($aula->alumnos as $alumno){
                            if($alumno->nombre == $nombre){
                                array_push($resultado, $alumno);
                            }
                        }
                    }else if($apellido != null && $nombre == null && $sexo == null){
                        foreach($aula->alumnos as $alumno){
                            if($alumno->apellido == $apellido){
                                array_push($resultado, $alumno);
                            }
                        }
                    }else if($sexo != null && $apellido == null && $nombre == null){
                        foreach($aula->alumnos as $alumno){
                            if($alumno->sexo == $sexo){
                                array_push($resultado, $alumno);
                            }
                        }
                    }else if($nombre != null && $apellido != null && $sexo == null){
                        foreach($aula->alumnos as $alumno){
                            if($alumno->nombre == $nombre && $alumno->apellido == $apellido){
                                array_push($resultado, $alumno);
                            }
                        }
                    }else if($nombre != null && $sexo != null && $apellido == null){
                        foreach($aula->alumnos as $alumno){
                            if($alumno->nombre == $nombre && $alumno->sexo == $sexo){
                                array_push($resultado, $alumno);
                            }
                        }
                    }else if($apellido != null && $sexo != null && $nombre == null){
                        foreach($aula->alumnos as $alumno){
                            if($alumno->apellido == $apellido && $alumno->sexo == $sexo){
                                array_push($resultado, $alumno);
                            }
                        }
                    }else if($nombre != null && $apellido != null && $sexo != null){
                        foreach($aula->alumnos as $alumno){
                            if($alumno->nombre == $nombre && $alumno->apellido == $apellido && $alumno->sexo == $sexo){
                                array_push($resultado, $alumno);
                            }
                        }
                    }
            }
            return $resultado;
        }
    }

    public static function getProfesorEnTodasLasAulasByNombreEdadOSexo($listaDeAulas, $nombre = NULL, $apellido = NULL, $sexo = NULL){
        $resultado = array();
        if ((count($listaDeAulas)==0) || ($nombre == null && $apellido == null && $sexo == null)){
            echo "Error de datos";
        }else{
            foreach($listaDeAulas as $aula){
                    if($nombre != null && $apellido == null && $sexo == null){
                        if($aula->instructor->nombre == $nombre){
                            array_push($resultado, $aula->instructor);
                        }
                    }else if($apellido != null && $nombre == null && $sexo == null){
                        if($aula->instructor->apellido == $apellido){
                            array_push($resultado, $aula->instructor);
                        }
                    }else if($sexo != null && $apellido == null && $nombre == null){
                        if($aula->instructor->sexo == $sexo){
                            array_push($resultado, $aula->instructor);
                        }
                    }else if($nombre != null && $apellido != null && $sexo == null){
                        if($aula->instructor->nombre == $nombre && $aula->instructor->apellido == $apellido){
                            array_push($resultado, $aula->instructor);
                        }
                    }else if($nombre != null && $sexo != null && $apellido == null){
                        if($aula->instructor->nombre == $nombre && $aula->instructor->sexo == $sexo){
                            array_push($resultado, $aula->instructor);
                        }
                    }else if($apellido != null && $sexo != null && $nombre == null){
                        if($aula->instructor->apellido == $apellido && $aula->instructor->sexo == $sexo){
                            array_push($resultado, $aula->instructor);
                        }
                    }else if($nombre != null && $apellido != null && $sexo != null){
                        if($aula->instructor->nombre == $nombre && $aula->instructor->apellido == $apellido && $alumno->sexo == $sexo){
                            array_push($resultado, $aula->instructor);
                        }
                    }
            }
            return $resultado;
        }
    }
    
}

?>