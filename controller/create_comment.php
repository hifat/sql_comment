<?php
require('config.php');

if(isset($_POST['comment_detail'])) {
   $food_id = $_POST['food_id'];
   $cmt_detail = $_POST['comment_detail'];

   $result = $conn->query("INSERT INTO comments (usr_id, food_id, cmt_detail) VALUES ('1', '".$food_id."', '".$cmt_detail."')");

   if($result) {
      echo json_encode([
         "result" => "success"
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