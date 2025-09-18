<?php
$size = $_POST['size'];

// Validate
if (!is_numeric($size) || $size < 1) {
    die("Please enter a positive number.");
}
$size = (int)$size;

// Output table
echo "<h1>{$size} × {$size} Multiplication Table</h1>";
echo "<table border='1' cellpadding='5'>";

// Header row
echo "<tr><th></th>";
for ($i = 1; $i <= $size; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Rows
for ($row = 1; $row <= $size; $row++) {
    echo "<tr><th>$row</th>";
    for ($col = 1; $col <= $size; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
