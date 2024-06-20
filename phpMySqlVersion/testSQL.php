<?php   
   $connection = new mysqli("127.0.0.1", "root", "qwer1234", "project");
   if($connection->connect_error)
   {
      echo("connect DB ERROR");
   }
   else 
   {
      $result = $connection -> query("SELECT * FROM CATEGORY");
      echo("get result");
      //while ($row = $result->fetch_assoc())
      //{
      //   echo($row['id']." ".$row['category_name']." ".$row['link']." ".$row['state']."<br>");
      //}
   }
   
?>