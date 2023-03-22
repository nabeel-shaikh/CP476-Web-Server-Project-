<?php
    require_once 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $studentID = $_POST['student_id'];
        $newStudentName = $_POST['student_name'];

        updateStudent($studentID, $newStudentName);
        header('Location: index.php'); //redirect

        exit;
    }
?>