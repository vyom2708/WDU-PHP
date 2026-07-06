<?php
const clg_name = "MARWADI UNIVERSITY";
$name="VYOM PUROHIT";
$roll= 7362;
$sem= 4;
$t_mark=500;
$py=90;
$c=88;
$os=85;
$cn=87;
$ls=95;
$o_mark= $py+$c+$os+$cn+$ls;
$per= ($o_mark/$t_mark)*100;

echo("<center>===============================</center><br>");
echo("<center>       SEMESTER RESULT         </center><br>");
echo("<center>===============================</center><br>");
echo("<center>".clg_name."</center>"."<br>");
echo("<center>NAME:".$name. "</center>"."<br>");
echo("<center>ROLL NO:".$roll. "</center>"."<br>");
echo("<center>PYTHON: " . $py ."</center>". "<br>");
echo("<center>CSHARP: " . $c ."</center>"."<br>");
echo("<center>O.S: " . $os ."</center>"."<br>");
echo("<center>C.N: " . $cn ."</center>"."<br>");
echo("<center>L.S: " . $ls ."</center>"."<br><br>");
echo("<center>TOTAL MARKS OBTAINED OUT OF 500: ".$o_mark."</center>"."<br>");
echo("<center>PERCENTAGE: ".$per."%"."</center>"."</br>");
?>