## PDO Functions and use

### Conect database using PDO

    <?php
        $db = new PDO('mysql:host=localhost;dbname=pdo;','root','');
        // var_dump($db);
        // echo "Database page";
    ?>

### include file in other page

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

## PDO fetch methods

1. FETCH_NUM -> fetch array data with index no from array associative format.
2. FETCH_ASSOC -> fetch array data from array associative format.
3. FETCH_BOTH -> fetch array data from array associative format and indexing format.this is defult function in fetch.
4. FETCH_OBJ -> this is return object of stdClass. stdClass class is a empty class of PHP.
