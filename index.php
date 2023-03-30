<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CP476 Project</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

    <?php
      include 'add_student.php';
      include 'update_student.php';
      include 'remove_student.php';
      include 'get_name_records.php';
      include 'add_course.php';
      include 'update_course.php';
      include 'remove_course.php';
      include 'get_final_grades.php';
    ?>
  </head>

  <body>
    <!-- Header section -->
    <header>
      <div class="container">
        <h1 class="text-center">Group #20 Website</h1>
      </div>
    </header>

    <!-- Introduction and Team section -->
    <section id="intro">
      <div class="container">
        <h2 class="text-center">Our Team</h2>
        <div class="members">
          <ul>
            <li>Nabeel Shaikh</li>
            <li>Hasan Khan</li>
            <li>Jon O'Brien</li>
          </ul>
        </div>
      </div>
    </section>

    <div class="forms">
    
    <div>
      <h1>Add Student</h1>
      <form id="add_student" method="post" action="add_student.php">
          <label for="student_id">Student ID:</label>
          <input type="text" id="student_id" name="student_id">

          <label for="student_name">Student Name:</label>
          <input type="text" id="student_name" name="student_name">

          <button id="add_student_btn" type="submit">Add Student</button>
      </form>
    </div>

    <div>
      <h1>Update Student</h1>
      <form id="update_student" method="post" action="update_student.php">
          <label for="student_id">Student ID:</label>
          <input type="text" id="student_id" name="student_id">

          <label for="student_name">Student Name:</label>
          <input type="text" id="student_name" name="student_name">

          <button id="update_student_btn" type="submit">Update Student</button>
      </form>
    </div>

    <div>
      <h1>Remove Student</h1>
      <form id="remove_student" method="post" action="remove_student.php">
          <label for="student_id">Student ID:</label>
          <input type="text" id="student_id" name="student_id">

          <button id="remove_student_btn" type="submit">Remove Student</button>
      </form>
    </div>

    <div>
      <h1>Show Name Table</h1>
      <span id="name_records">

      </span>
      <form id="get_student" method="post" action="get_name_records.php">
          <button id="get_student_btn" type="submit">Show Names</button>
      </form>
    </div>

    <div>
      <h1>Add Course Record</h1>
      <form id="add_course" method="post" action="add_course.php">
          <label for="student_id">Student ID:</label>
          <input type="text" id="student_id" name="student_id">

          <label for="student_name">Course Code:</label>
          <input type="text" id="course_code" name="course_code">
          
          <label for="student_name">Test 1:</label>
          <input type="text" id="test_1" name="test_1">
          
          <label for="student_name">Test 2:</label>
          <input type="text" id="test_2" name="test_2">

          <label for="student_name">Test 3:</label>
          <input type="text" id="test_3" name="test_3">

          <label for="student_name">Final:</label>
          <input type="text" id="final" name="final">

          <button id="add_course_btn" type="submit">Add Course Record</button>
      </form>
    </div>

    <div>
      <h1>Update Course Record</h1>
      <form id="update_course" method="post" action="update_course.php">
          <label for="student_id">Student ID:</label>
          <input type="text" id="student_id" name="student_id">

          <label for="student_name">Course Code:</label>
          <input type="text" id="course_code" name="course_code">
          
          <label for="student_name">Test 1:</label>
          <input type="text" id="test_1" name="test_1">
          
          <label for="student_name">Test 2:</label>
          <input type="text" id="test_2" name="test_2">

          <label for="student_name">Test 3:</label>
          <input type="text" id="test_3" name="test_3">

          <label for="student_name">Final:</label>
          <input type="text" id="final" name="final">

          <button id="update_course_btn" type="submit">Update Course Record</button>
      </form>
    </div>

    <div>
      <h1>Remove Course Record</h1>
      <form id="remove_course" method="post" action="remove_course.php">
          <label for="student_id">Student ID:</label>
          <input type="text" id="student_id" name="student_id">

          <label for="student_name">Course Code:</label>
          <input type="text" id="course_code" name="course_code">

          <button id="remove_course_btn" type="submit">Remove Course Record</button>
      </form>
    </div>

    <div>
      <h1>Show Course Table</h1>
      <span id="course_records">

      </span>
      <form id="get_course" method="post" action="get_course_records.php">
          <button id="get_course_btn" type="submit">Show Courses</button>
      </form>
    </div>

    <div>
      <h1>Show Final Grade</h1>
      <span id="final_grades">

      </span>
      <form id="get_final" method="post" action="get_final_grades.php">
          <button id="get_final_btn" type="submit">Show Final Grades</button>
      </form>
    </div>

    </div>
  </body>
</html>