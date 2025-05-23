<?php
$users = [
    ["Name" => "Sahil Khola ", "Age" => "20", "Profession" => "Php developer"],
    ["Name" => "Sourav", "Age" => "22 ", "Profession" => "Java developer"],
    ["Name" => "Tanisq", "Age" => "24 ", "Profession" => "Javascript developer"]
];

echo "<table border = '2'>";
foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $key => $value) {
        echo "<td>";

        echo "$key : $value";
        echo "<br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
