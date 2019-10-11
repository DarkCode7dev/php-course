<?php
//associative array
$arr = array("Name"=>"Anoop","Empid"=>271343,"Mobile"=>array("7411","8880"));
$json=json_encode($arr);//calling array into json
echo $json;
