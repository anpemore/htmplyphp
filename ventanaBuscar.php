<?php
   include("index.html");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">   
</head>
<samp></samp>
<body> 
    <div class="container p-4">
        
    <div class="row auto">
          <div class="col-4">          
          </div>  
          <div class="col-4 ">
             <img src="/img/enranage.png ">
          </div>  
          <div class="col-4">
          </div>  
     </div>  
        <div class="row">
               <div class="col-md-4">           
                <div class="card card-body">
                    <form action="buscar.php" method="POST">
                        <div class="form-group">
                             <input type="text" name="id" class="form-control"  placeholder="Identificar " autofocus>
                        </div>
                            <br>                                        
                            <input type="submit" class="btn btn-success btn-block" name="buscar" value = "Buscar">    
                    </form>    
                </div>
            </div>          
        </div>
      </div>
    </body>
</html>