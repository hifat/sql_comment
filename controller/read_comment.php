<?php
require('config.php');

if(isset($_GET['food_id'])) {
   $food_id = $_GET['food_id'];

   $result = $conn->query("SELECT * FROM comments WHERE food_id = '".$food_id."'");
   $comments = [];

   if($result) {
      while($row = $result->fetch_assoc()) {
         array_push($comments, $row['cmt_detail']);
      }

      echo json_encode([
         "result" => "success",
         "data" => $comments
      ]);
   }
   else {
      echo json_encode([
         "result" => "failed"
      ]);
   }
}
else {
   header('../index.php');
}