<?php
$conn = new mysqli('localhost', 'root', '', 'test');
$conn->set_charset('utf8');

function debug($str) {
   echo "<pre>";
   print_r($str);
   echo "</pre>";
}