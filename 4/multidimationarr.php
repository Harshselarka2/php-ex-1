<?php
$students = [
    ["name" => "Arjun", "scores" => [85, 90, 88]],
    ["name" => "Priya", "scores" => [78, 82, 79]],
    ["name" => "Rahul", "scores" => [92, 91, 89]],
];

foreach ($students as $student) {
    $name = $student["name"];
    $scores = $student["scores"];
    $average = array_sum($scores) / count($scores);  // Calculate average score
    echo "$name's scores: " . implode(", ", $scores) . " | Average: " . number_format($average, 2) . "<br>";
}
?>
