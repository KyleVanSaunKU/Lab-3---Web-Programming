<?php
// Grab the posted numbers
$min_multiplicand = $_POST['min_multiplicand'];
$max_multiplicand = $_POST['max_multiplicand'];
$min_multiplier   = $_POST['min_multiplier'];
$max_multiplier   = $_POST['max_multiplier'];

// Basic validation
if (!is_numeric($min_multiplicand) || !is_numeric($max_multiplicand) ||
    !is_numeric($min_multiplier) || !is_numeric($max_multiplier)) {
    die("All inputs must be numbers.");
}
if ($min_multiplicand > $max_multiplicand || $min_multiplier > $max_multiplier) {
    die("Minimum values must be less than or equal to maximum values.");
}

// Start output
echo "<h1>Multiplication Table</h1>";
echo "<table border='1' cellpadding='5'>";

// First row header
echo "<tr><th></th>";
for ($i = $min_multiplier; $i <= $max_multiplier; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Table body
for ($row = $min_multiplicand; $row <= $max_multiplicand; $row++) {
    echo "<tr><th>$row</th>";
    for ($col = $min_multiplier; $col <= $max_multiplier; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
