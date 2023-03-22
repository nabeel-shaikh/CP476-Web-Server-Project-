<?php
    require_once 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $rows = getAllStudentFinalGrades();
        if (!$rows) {
            echo "No Names Found";
            exit;
        }

    echo "<h1>Course Table Records</h1>";
    echo "<table><tr><th>Student ID</th><th>Student Name</th><th>Course Code</th><th>Final</th></tr><tbody>";

    foreach ($rows as $row){
        echo "<tr><td>{$row['Student ID']}</td><td>{$row['Student Name']}</td><td>{$row['Course Code']}</td><td>{$row['Final Grade']}</td></tr>";
    }

    echo "</tbody></table>";
    }
?>
