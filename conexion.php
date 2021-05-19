<?php
   session_start();
  function conectar()
      {   
        $user="uyhvuaesm2xzrmxs";
        $pass="c0SXneql2xbIxWMPCI3b";
        $servidor="bakbpvldudlkddtr3kiv-mysql.services.clever-cloud.com";    
        $bd="bakbpvldudlkddtr3kiv";   
        $con=new mysqli($servidor,$user,$pass,$bd);
        return $con;
      }  
      
   ?>
        
      
   
