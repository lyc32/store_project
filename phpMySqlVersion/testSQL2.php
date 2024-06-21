<?php
   try {
      $conn = new PDO("mysql:host=127.0.0.1;dbname=project", "root", "qwer1234");
      echo "连接成功"; 
      $stmt = $conn->query("SELECT * FROM category WHERE state ='active'");
      while ($row = $stmt->fetch()) 
      {
         echo $row['category_name']."<br>\n";
      }
   }
   catch(PDOException $e)
   {
      echo $e->getMessage();
   }
?>