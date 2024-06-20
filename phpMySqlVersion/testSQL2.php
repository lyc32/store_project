<?php
   try {
      $conn = new PDO("mysql:host=127.0.0.1;", "root", "qwer1234");
      echo "连接成功"; 
   }
   catch(PDOException $e)
   {
      echo $e->getMessage();
   }
?>