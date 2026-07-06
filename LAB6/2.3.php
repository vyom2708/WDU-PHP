<!-- array_change_key_case() -->

<?php 

    $a = array("Name"=>"Vyom","City"=>"Morbi"); 
    print_r(array_change_key_case($a, CASE_LOWER)); 

?>

<!-- array_chunk() -->

<?php 

    $months = array("Jan","Feb","Mar","Apr","May","Jun"); 
    print_r(array_chunk($months,2)); 
    
?>

<!-- array_count_values() -->

<?php 
    $a = array("A","B","A","C","B","A"); 
    print_r(array_count_values($a)); 
?>

<!-- array_pop() -->

<?php 
    $a = array("Red","Green","Blue"); 
    array_pop($a); 
    print_r($a); 
?>

<!-- array_push() -->

<?php 
    $a = array("Red","Green"); 
    array_push($a,"Blue"); 
    print_r($a); 
?>

<!-- array_unshift() -->

<?php 
    $a = array("Green","Blue"); 
    array_unshift($a,"Red"); 
    print_r($a); 
?>

<!-- array_shift() -->

<?php 
    $a = array("Red","Green","Blue"); 
    array_shift($a); 
    print_r($a); 
?>

