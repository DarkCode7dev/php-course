<?php
class emp{
    public $userid;
    public $name;
    public function __construct($userid, $name){
        $this->userid = $userid;
        $this->name = $name;
}
    public function displayData(){
        echo $this->userid."-".$this->name."<br/>"; 
    }
    
    public function __destruct(){
        echo "I am dynig!";
    }
    
}
$emp = new emp("27123","Abhinav");
$emp->displayData();
