<?php
if(isset($_POST['enviar'])) {
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message'])){
        $name=$_POST['fname'];
        $apellido=$_POST['lname'];
        $telefono=$_POST['phone'];
        $tema=$_POST['subject'];
        $mensaje=$_POST['message'];
    }
}
?>