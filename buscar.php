<?php
   include("index.html");
   include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>    
    <br>    
      <?php   
        $id;
          if(isset($_POST['buscar'])){ 
             $id = $_POST['id'];           
          }       
            $con=conectar();
            $query = "select * from personas where per_id='$id'";
            $resul = mysqli_query($con,$query);
        ?>
    <table class="table table-striped">
        <tr>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Identificacion</th>
        </tr>
        <tbody>
            <?php                   
            while($row=mysqli_fetch_array($resul))
            { ?>
                <tr>
                    <td> <?php echo $row['per_pnom']?></td>
                    <td> <?php echo $row['per_snom']?></td>
                    <td> <?php echo $row['per_pape']?></td>
                    <td> <?php echo $row['per_sape']?></td>
                    <td> <?php echo $row['per_id']?></td>
                </tr>
                <?php 
            }?>
        </tbody>                
      </table>     
    </body>
</html>