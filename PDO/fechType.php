<?php

    include './include/database.php';
    $data = $db->query('select * from user');
    // $row = $data->fetch();
    echo '<pre>';
    
    // while($row = $data->fetch(PDO::FETCH_NUM))
    // while($row = $data->fetch(PDO::FETCH_ASSOC))
    // while($row = $data->fetch(PDO::FETCH_BOTH))
    while($row = $data->fetch(PDO::FETCH_OBJ)){
        print_r($row);
        echo '<br>';
    }   //use for print array
    echo'</pre>'

?>
