<?php

    include './include/database.php';
    
    class User
    {
        public $first_name;
        public $last_name;
        public $fullName;

        public function __construct()
        {
            $this->fullName = $this->first_name.' '.$this->last_name;
        }
    }

    $data = $db->query('select * from user');
    echo "<pre>";

    $data->setFetchMode(PDO::FETCH_CLASS,'user');
    while($row = $data->fetch()){
        // print_r($row);
        echo $row->fullName;
        echo "<br>";
    } 
?>
