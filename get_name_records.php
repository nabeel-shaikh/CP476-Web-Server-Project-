<?php
    require_once 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $rows = getNameTableRecords();
        if (!$rows) {
            echo "No Names Found";
            exit;
        }

    echo "<table><tr><th>Student ID</th><th>Student Name</th></tr><tbody>";

    foreach ($rows as $row){
        echo "<tr><td>{$row['Student ID']}</td><td>{$row['Student Name']}</td></tr>";
    }

    echo "</tbody></table>";
    }
?>
