<?php
    require_once 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $studentID = $_POST['student_id'];
        $courseCode = $_POST['course_code'];

        removeCourseRecord($studentID, $courseCode);
        header('Location: index.php'); //redirect

        exit;
    }
?>