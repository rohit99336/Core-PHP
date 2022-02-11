<?php
$course = array("C++"=>'10000','java'=>'12000','PHP'=>'12000');
echo $course['java'];
echo'<pre>';
print_r($course);

foreach($course as $key=>$value){
    echo "key is <b>".$key.' </b>and value is: '.$value.'<br>';
}
?>