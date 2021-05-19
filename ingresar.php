<?php
   include("index.html");
   include("conexion.php");
?>
<div class="container p-4">
    <div class="row">
       <div class="col-md-4">
       
           
                    <div class="card card-body">
                        <form action="recibir.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control"  placeholder="Identificar " autofocus>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="pnom" class="form-control" placeholder=" primer Nombre">
                                
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="snom" class="form-control" placeholder=" Seguno Nombre">
                                
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="pape" class="form-control" placeholder=" Primer Apellido">
                                
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="sape"class="form-control" placeholder=" Segunco Apellido">
                                
                            </div>
                            <br>                  
                            <input type="submit" class="btn btn-success btn-block" name="guardar" value = "Guardar">    
                        </form>    
                    </div>
       </div>
       <div class="col-dm-8"></div>
    </div>
     
</div>
<?php include("include/footer.php")?>
      


    