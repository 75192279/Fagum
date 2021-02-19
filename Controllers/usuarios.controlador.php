<?php
class ControladorUsuarios{
    public function ctrIngresoUsuario(){
        if(isset($_POST["ingUsuario"])){
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])&&
                preg_match('/^[a-zA-Z0-9]+$/' , $_POST["ingPassword"])){
                    $tabla ="usuarios";
                    $item ="usuario";
                    $valor = $_POST["ingUsuario"];

                    $respuesta = ModeloUsuarios :: MdlMostrarUsuarios($tabla, $item, $valor);
                    if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){
                        
                        $_SESSION["iniciarSesion"] = "ok";
                        echo '<script>
                            window.location ="Inicio";
                            </script>';
                    }else{
                        echo '<br><div class= "alert alert-danger"> Error al Ingresar, vuelve intentarlo </div>';
                    }
                }
        }
    }

}