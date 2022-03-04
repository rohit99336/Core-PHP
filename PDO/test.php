<?php

/**
 * ++ -- Postfix increment/decrement  - left-to-right
 * ++ -- Prefix increment/decrement   - right-to-left
 */

$i = 5;

echo "LTR =>".++$i - 2+$i ."<br>"; 

/**
 * 1+5 = 6 
 * - 
 * 6+1 = 7
 * 
 * 6-7 = -1
 * 
 *  **/


echo "RTL =>".$i++ - $i+2 ."<br>";

/**
 * 7+1 = 8
 * -
 * 5+2 = 7
 * 
 * 8-7 = 1
 * 
 */


?>