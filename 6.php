<?php

$cols = 10;
$rows = 10;

for ($tr = 1; $tr <= $rows; $tr ++) {
    echo "<table style='align-content: center; border-spacing: 5px'>";
    echo "<tr>";
    for($td = 1; $td <= $cols; $td++) {
        if (($tr % 2 == 0) && ($td % 2 == 0)) {
            echo "<td>" . "(" . $tr * $td . ")" . "</td>";
        } else {
            echo "<td>" .$tr * $td."</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
