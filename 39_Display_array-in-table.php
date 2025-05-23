

<?php

$user = [
    [1, "Sahil Khola ", "20", "Php developer"],
    [2, "Sourav", "22 ", "Java developer"],
    [3, "Tanisq", "24 ", "Javascript developer"]
];
echo "<table border = '2'>";
for ($i = 0; $i < count($user); $i++) {
    echo "<tr>";

    for ($j = 0; $j < count($user[$i]); $j++) {
        echo "<td>";
        echo $user[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>"
?>