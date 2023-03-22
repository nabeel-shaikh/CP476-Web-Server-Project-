<?php
    require_once 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $rows = getCourseRecords();
        if (!$rows) {
            echo "No Names Found";
            exit;
        }

    echo "<h1>Course Table Records</h1>";
    echo "<table><tr><th>Student ID</th><th>Course Code</th><th>Test 1</th><th>Test 2</th><th>Test 3</th><th>Final</th></tr><tbody>";

    foreach ($rows as $row){
        echo "<tr><td>{$row['Student ID']}</td><td>{$row['Course Code']}</td><td>{$row['Test 1']}</td><td>{$row['Test 2']}</td><td>{$row['Test 3']}</td><td>{$row['Final']}</td></tr>";
    }

    echo "</tbody></table>";
    }
?>
