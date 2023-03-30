<?php
    require_once 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $studentID = $_POST['student_id'];
        $courseCode = $_POST['course_code'];

        echo removeCourseRecord($studentID, $courseCode);
    }
?>