// Add student alert
$(document).ready(function() {
    $('#add_student_btn').click(function() {
        event.preventDefault();
        var form = $('#add_student');
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function(response) {
                if (response == 0) {
                    alert('Student added successfully');
                } else if (response == 1) {
                    alert('Invalid Student ID');
                } else if (response == 2) {
                    alert('Invalid Student Name');
                } else {
                    alert('Failed to add student');
                }
            },
            error: function(error) {
                alert('Failed to add student:');
            }
        });
    });
});

// Update student alert
$(document).ready(function() {
    $('#update_student_btn').click(function() {
        event.preventDefault();
        var form = $('#update_student');
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function(response) {
                if (response == 0) {
                    alert('Student name updated successfully');
                } else if (response == 1) {
                    alert('Invalid Student ID');
                } else if (response == 2) {
                    alert('Invalid Student Name');
                    
                } else {
                    alert('Failed to update student name');
                }
            },
            error: function() {
                alert('Failed to update student name');
            }
        });
    });
});

// Remove student alert
$(document).ready(function() {
    $('#remove_student_btn').click(function() {
        event.preventDefault();
        var form = $('#remove_student');
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function(response) {
                if (response == 0) {
                    alert('Student removed successfully');
                } else if (response == 1) {
                    alert('Invalid Student ID');
                } else {
                    alert('Failed to remove student');
                }
            },
            error: function() {
                alert('Failed to remove student');
            }
        });
    });
});

// Get students
$(document).ready(function() {
    $('#get_student_btn').click(function() {
        event.preventDefault();
        var form = $('#get_student');
        var url = form.attr('action');

        $.ajax({
            type: 'POST',
            url: url,
            success: function(response) {
                $("#name_records").html(response)
            },
            error: function() {
                alert('Failed to get students');
            }
        });
    });
});

// Add Course alert
$(document).ready(function() {
    $('#add_course_btn').click(function() {
        event.preventDefault();
        var form = $('#add_course');
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function(response) {
                if (response == 0) {
                    alert('Course added successfully');
                } else if (response == 1) {
                    alert('Invalid Student ID');
                } else if (response == 2) {
                    alert('Invalid Course Code');
                } else if (response == 3) {
                    alert('Invalid Test Grade');
                } else {
                    alert('Failed to add course');
                }
            },
            error: function() {
                alert('Failed to add course');
            }
        });
    });
});

// Update Course alert
$(document).ready(function() {
    $('#update_course_btn').click(function() {
        event.preventDefault();
        var form = $('#update_course');
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function(response) {
                if (response == 0) {
                    alert('Course record updated successfully');
                } else if (response == 1) {
                    alert('Invalid Student ID');
                } else if (response == 2) {
                    alert('Invalid Course Code');
                } else if (response == 3) {
                    alert('Invalid Test Grade');
                } else {
                    alert('Failed to update course record');
                }
            },
            error: function() {
                alert('Failed to update course record');
            }
        });
    });
});

// Remove Course alert
$(document).ready(function() {
    $('#remove_course_btn').click(function() {
        event.preventDefault();
        var form = $('#remove_course');
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function(response) {
                if (response == 0) {
                    alert('Course Removed successfully');
                } else if (response == 1) {
                    alert('Invalid Student ID');
                } else if (response == 2) {
                    alert('Invalid Course Code');
                } else {
                    alert('Failed to remove course record');
                }
            },
            error: function() {
                alert('Failed to remove course record');
            }
        });
    });
});

// Get course
$(document).ready(function() {
    $('#get_course_btn').click(function() {
        event.preventDefault();
        var form = $('#get_course');
        var url = form.attr('action');

        $.ajax({
            type: 'POST',
            url: url,
            success: function(response) {
                $("#course_records").html(response)
            },
            error: function() {
                alert('Failed to get students');
            }
        });
    });
});

// Final Grades
$(document).ready(function() {
    $('#get_final_btn').click(function() {
        event.preventDefault();
        var form = $('#get_final');
        var url = form.attr('action');

        $.ajax({
            type: 'POST',
            url: url,
            success: function(response) {
                $("#final_grades").html(response)
            },
            error: function() {
                alert('Failed to get students');
            }
        });
    });
});