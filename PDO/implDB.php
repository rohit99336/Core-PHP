<?php

    include './include/database.php';
    $data = $db->query('select * from user');
    // $row = $data->fetch();
    echo '<pre>';
    while($row = $data->fetch()){
        print_r($row);
        echo '<br>';
    }   //use for print array
    echo'</pre>'

?>
