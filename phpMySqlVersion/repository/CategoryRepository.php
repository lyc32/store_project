<?php
   require '../config/SqlConfig.php';  
   require '../model/Category.php';
   
   class CategoryRepository
   {
      private $connection;
      
      function __construct()
      {
         $sqlConfig = new SqlConfig();
         $this->connection = new mysqli($sqlConfig->host, $sqlConfig->user, $sqlConfig->pass, $sqlConfig->db);
         
         if ($this->connection->connect_error) 
         {
            die("<p class='title text-white'>Unable To Connect DataBase!<br>Connection failed: " . $conn->connect_error . "</p>");
         }
      }
      
      function getAllCategory()
      {
         $result = $this->connection->query("SELECT * FROM category WHERE state ='active'");
         $arr = array();
         while ($row = $result->fetch_assoc())
         {
            $category = new Category($row['id'], $row['category_name'], $row['link'], $row['state']);
            array_push($arr, $category);
         }
         return $arr;
      }
      
      function updateCategory()
      {
         
      }
      
      function deleteCategory()
      {
         
      }
      
      
  }
?>