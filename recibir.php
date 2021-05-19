<?php
   include("conexion.php");
   if(isset($_POST['guardar'])) 
        $id = $_POST['id'];
        $per_pnom = $_POST['pnom'];
        $per_snom = $_POST['snom'];
        $per_pape = $_POST['pape'];
        $per_sape = $_POST['sape'];
        $con=conectar();
        $result=$query="insert into personas(per_id,per_pnom,per_snom,per_pape,per_sape) values('$id','$per_pnom','$per_snom','$per_pape',  '$per_sape')";       
        mysqli_query($con,$query);
        if($result){
            die("Dato guardado exitosamente  ");
        }
        $_SESSION['massage']='Datos guardados ';
        $_SESSION['massage_type']='success';
        header("location index.php");

?>