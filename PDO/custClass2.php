<?php

    include './include/database.php';
    
    class User
    {
        public $first_name;
        public $last_name;
        public $fullName;
        private $records = [];

        public function __set($name, $value)
        {
            $this->records[$name] = $value;
        }

        public function __get($name)
        {
            if(array_key_exists($name,$this->records)){
                return $this->records[$name];
            }
        }

        public function ToArray(){
            return $this->records;
        }

    }

    $data = $db->query('select * from user');
    echo "<pre>";

    $data->setFetchMode(PDO::FETCH_CLASS,'user');
    while($row = $data->fetch()){
        print_r($row->last_name);
        echo $row->fullName;
        echo "<br>";
    } 
?>
