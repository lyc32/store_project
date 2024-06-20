<?php   
   $connection = mysql_connect("127.0.0.1", "root", "qwer1234") or die("Unable to connect!");
   mysql_select_db("project");
   $result = mysql_query("SELECT * FROM Category WHERE state ='active'");
   while($row = mysql_fetch_array($result))
   {
      echo($row['id']." ".$row['category_name']." ".$row['link']." ".$row['state']."<br>");
   }
?>