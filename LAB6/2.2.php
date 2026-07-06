<!--<?php

$a = array(5, 1, 4, 2, 3);

sort($a);

echo "Sorted Array: <br>";

foreach($a as $i)
{
    echo $i . " ";
}

?>-->   
<html>
<body>

<form method="post">
    Enter Numbers:
    <input type="text" name="a">
    <input type="submit" name="btn" value="Sort">
</form>

<?php
if(isset($_POST['btn']))
{
    $a = explode(",", $_POST['a']);
    sort($a);

    echo "Sorted Array: ";

    for($i=0; $i<count($a); $i++)
    {
        echo $a[$i]." ";
    }
}
?>

</body>
</html>
