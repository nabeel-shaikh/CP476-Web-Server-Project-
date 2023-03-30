<?php
    require_once 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $studentID = $_POST['student_id'];
        $courseCode = $_POST['course_code'];
        $test1 = $_POST['test_1'];
        $test2 = $_POST['test_2'];
        $test3 = $_POST['test_3'];
        $final = $_POST['final'];

        echo updateCourse($studentID, $courseCode, $test1, $test2, $test3, $final);
    }
?>