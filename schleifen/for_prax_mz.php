<?php

echo '<b>Aufgabe 1</b>'.'<br>';
echo NL;

for($i=0; $i<=10; $i++) { echo $i.'<br>';}
echo '<br>';

echo '<b>Aufgabe 2</b>'.'<br>';
echo "<h2>Das kleine Einmaleins</h2>";
echo "<table border='1'> ";

for ($x=1; $x<=10; $x++) {
    echo "<tr>";
    for ($y=1; $y<=10; $y++) {
        echo "<td>" . $x*$y . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
