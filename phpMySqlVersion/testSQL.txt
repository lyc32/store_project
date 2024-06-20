<?php
   $connection = new mysqli("127.0.0.1", "root", "qwer1234", "project");
   
   $result = $connection->query("SELECT * FROM Category WHERE state ='active'");
   while ($row = $result->fetch_assoc())
   {
      echo($row['id']." ".$row['category_name']." ".$row['link']." ".$row['state']."<br>");
   }
?>