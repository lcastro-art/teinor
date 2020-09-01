<?php
    require_once ("controllers/index.controller.php");
    
    if(isset($_POST['enviar']) && ($_POST['nombre'] != '') && $_POST['any']!= ''){
        $template = new ControllerTemplate();
        $template -> guardar();
    }

    $template = new ControllerTemplate();
    $template -> index();

?>