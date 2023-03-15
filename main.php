<?php
    // MySQLi database configuration
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "12345678";
    $dbname = "cp476";

    // Create a new mysqli object
    $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

    // Check for errors
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    ### STUDENT ###
    // add a student
    function addStudent() {
        global $conn;
    }

    // update student info
    function updateStudent() {
        global $conn;
    }

    // remove student
    function removeStudent() {
        
    }

    // print all students
    function printNameTableRecords() {
        global $conn;
        $sql = "SELECT * FROM name";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Student ID: " . $row["Student ID"]. " - Name: " . $row["Student Name"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    ### COURSE ###
    // register a students to a course
    function addCourseRecord() {
        global $conn;
    }

    // update course record in database
    function updateCourseRecord() {
        global $conn;
    }

    // remove course record from database
    function removeCourseRecord() {
        global $conn;
    }

    // print all course records
    function printCourseTableRecords() {
        global $conn;
        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Student ID: " . $row["Student ID"]. " - Course Code: " . $row["Course Code"]. " - Test 1: " . $row["Test 1"]. " - Test 2: " . $row["Test 2"]. " - Test 3: " . $row["Test 3"]. " - Final: " . $row["Final"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    ### FINAL GRADE ###
    // show student final grade
    function studentfinalGrade() {
        global $conn;
    }

    // show all student final grades
    function printAllStudentFinalGrades() {
        global $conn;
    }

    // Close the connection
    //$conn->close();
?>