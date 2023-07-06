<?php
require_once "../controladores/ctrlClientes.php";
require_once "../modelos/mdlClientes.php";

class ajaxClientes{
    public $idClientes;
    public function cargarDatos(){
        $tabla = "cliente";
        $parametro = "cliente";
        $id = $this->idClientes;
        $datos = ControladorClientes::ctrCargarCliente($tabla, $parametro, $id);
    }


}

if(isset($_POST['idClientes'])){
    $objAajaxClientes = new ajaxClientes();
    $objAajaxClientes->idClientes = $_POST['idClientes'];
    if ($_POST['edit']== 'edit'){
        $objAajaxClientes->cargarDatos();
    }else{
        #$objAajaxClientes->eliminarDatos();
    }

}