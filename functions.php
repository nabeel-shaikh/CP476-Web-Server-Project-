<?php
    //MySQLi DB Config
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "12345678";
    $dbname = "cp476";

    //Create MySQLi object
    $conn = new MySQLi($dbhost, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    ### STUDENT ###
    //Add a student
    function addStudent($studentID, $studentName) {
        global $conn;

        if (filter_var($studentID, FILTER_VALIDATE_INT, array("options" => array("min_range"=>111111111, "max_range"=>999999999))) === false || filter_var($studentID, FILTER_SANITIZE_NUMBER_INT) == false) {
            return 1;
        }

        if ($studentName == "") {
            return 2;
        }
        $studentName = htmlspecialchars($studentName, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        try {
            $stmt = $conn->prepare("INSERT INTO name (`Student ID`, `Student Name`) VALUES (?, ?)");
            $stmt->bind_param("is", $studentID, $studentName);
            $result = $stmt->execute();

            if ($result) {
                return 0;
            }
            
            return -1;
        } catch (Exception $e) {
            //handle error

            return -1;
        }
    }

    //Update student information
    function updateStudent($studentID, $newStudentName) {
        global $conn;

        if (filter_var($studentID, FILTER_VALIDATE_INT, array("options" => array("min_range"=>111111111, "max_range"=>999999999))) === false || filter_var($studentID, FILTER_SANITIZE_NUMBER_INT) == false) {
            return 1;
        }

        if ($newStudentName == "") {
            return 2;
        }
        $newStudentName = htmlspecialchars($newStudentName, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        try {
            $stmt = $conn->prepare("UPDATE name SET `Student Name` = ? WHERE `Student ID`= ?");
            $stmt->bind_param("si", $newStudentName, $studentID);
            $result = $stmt->execute();

            if ($result) {
                return 0;
            }

            return -1;
        } catch (Exception $e) {
            //handle error
            
            return -1;
        }
    }

    //Remove a student
    function removeStudent($studentID) {
        global $conn;

        if (filter_var($studentID, FILTER_VALIDATE_INT, array("options" => array("min_range"=>111111111, "max_range"=>999999999))) === false || filter_var($studentID, FILTER_SANITIZE_NUMBER_INT) == false) {
            return 1;
        }

        try {
            $stmt = $conn->prepare("DELETE FROM name WHERE `Student ID` = ?");
            $stmt->bind_param("i", $studentID);
            $result = $stmt->execute();

            if ($result) {
                return 0;
            }

            return -1;
        } catch (Exception $e) {
            //handle error

            return -1;
        }
    }

    //Get all records in name table
    function getNameTableRecords() {
        global $conn;

        try {
            $result = $conn->query("SELECT * FROM name");
            $rows = array();

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }

                $result->close();
            }

            return $rows;
        } catch (Exception $e) {
            //handle error

            return false;
        }
    }

    ### COURSE ###
    //Add a Course record
    function addCourseRecord($studentID, $courseCode, $test1, $test2, $test3, $final) {
        global $conn;

        if (filter_var($studentID, FILTER_VALIDATE_INT, array("options" => array("min_range"=>111111111, "max_range"=>999999999))) === false) {
            return 1;
        }

        if ($courseCode == "") {
            return 2;
        }
        $courseCode = htmlspecialchars($courseCode, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        if (filter_var($test1, FILTER_VALIDATE_FLOAT, array("options" => array("min_range"=>0, "max_range"=>100), "flags" => FILTER_FLAG_ALLOW_FRACTION)) === false) {
            return 3;
        }

        if (filter_var($test2, FILTER_VALIDATE_FLOAT, array("options" => array("min_range"=>0, "max_range"=>100), "flags" => FILTER_FLAG_ALLOW_FRACTION)) === false) {
            return 3;
        }

        if (filter_var($test3, FILTER_VALIDATE_FLOAT, array("options" => array("min_range"=>0, "max_range"=>100), "flags" => FILTER_FLAG_ALLOW_FRACTION)) === false) {
            return 3;
        }

        if (filter_var($final, FILTER_VALIDATE_FLOAT, array("options" => array("min_range"=>0, "max_range"=>100), "flags" => FILTER_FLAG_ALLOW_FRACTION)) === false) {
            return 3;
        }

        try {
            $stmt = $conn->prepare("INSERT INTO course (`Student ID`, `Course Code`, `Test 1`, `Test 2`, `Test 3`, `Final`) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isdddd", $studentID, $courseCode, $test1, $test2, $test3, $final);
            $result = $stmt->execute();

            if ($result) {
                return 0;
            }

            return false;
        } catch (Exception $e) {
            //handle error

            return false;
        }
    }

    //Update Course record
    function updateCourse($studentID, $courseCode, $test1, $test2, $test3, $final) {
        global $conn;

        if (filter_var($studentID, FILTER_VALIDATE_INT, array("options" => array("min_range"=>111111111, "max_range"=>999999999))) === false) {
            return 1;
        }

        if ($courseCode == "") {
            return 2;
        }
        $courseCode = htmlspecialchars($courseCode, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        if (filter_var($test1, FILTER_VALIDATE_FLOAT, array("options" => array("min_range"=>0, "max_range"=>100), "flags" => FILTER_FLAG_ALLOW_FRACTION)) === false) {
            return 3;
        }

        if (filter_var($test2, FILTER_VALIDATE_FLOAT, array("options" => array("min_range"=>0, "max_range"=>100), "flags" => FILTER_FLAG_ALLOW_FRACTION)) === false) {
            return 3;
        }

        if (filter_var($test3, FILTER_VALIDATE_FLOAT, array("options" => array("min_range"=>0, "max_range"=>100), "flags" => FILTER_FLAG_ALLOW_FRACTION)) === false) {
            return 3;
        }

        if (filter_var($final, FILTER_VALIDATE_FLOAT, array("options" => array("min_range"=>0, "max_range"=>100), "flags" => FILTER_FLAG_ALLOW_FRACTION)) === false) {
            return 3;
        }

        try {
            $stmt = $conn->prepare("UPDATE course SET `Test 1` = ?, `Test 2` = ?, `Test 3` = ?, `Final` = ? WHERE `Student ID` = ? AND `Course Code` = ?");
            $stmt->bind_param("ddddis", $test1, $test2, $test3, $final, $studentID, $courseCode);
            $result = $stmt->execute();

            if ($result) {
                return 0;
            }

            return false;
        } catch (Exception $e) {
            //handle error
            
            return false;
        }
    }

    //Remove a Course record
    function removeCourseRecord($studentID, $courseCode) {
        global $conn;

        if (filter_var($studentID, FILTER_VALIDATE_INT, array("options" => array("min_range"=>111111111, "max_range"=>999999999))) === false) {
            return 1;
        }

        if ($courseCode == "") {
            return 2;
        }
        $courseCode = htmlspecialchars($courseCode, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        try {
            $stmt = $conn->prepare("DELETE FROM course WHERE `Student ID` = ? AND `Course Code` = ?");
            $stmt->bind_param("is", $studentID, $courseCode);
            $result = $stmt->execute();

            if ($result) {
                return 0;
            }

            return false;
        } catch (Exception $e) {
            //handle error

            return false;
        }
    }

    //Get all records in Course table
    function getCourseRecords() {
        global $conn;

        try {
            $result = $conn->query("SELECT * FROM course");
            $rows = array();

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }

                $result->close();
            }

            return $rows;
        } catch (Exception $e) {
            //handle error

            return false;
        }
    }

    ### Final ###
    //Calculate Final Grades
    function getAllStudentFinalGrades() {
        global $conn;
        $sql = "SELECT n.`Student ID`, n.`Student Name`, c.`Course Code`, ROUND((c.`Test 1` * 0.2) + (c.`Test 2` * 0.2) + (c.`Test 3` * 0.2) + (c.`Final` * 0.4), 2) AS `Final Grade`
          FROM `name` n
          JOIN `course` c ON n.`Student ID` = c.`Student ID`
          ORDER BY n.`Student ID`, c.`Course Code`";
        $result = $conn->query($sql);
        $rows = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }

        return $rows;

    }
?>