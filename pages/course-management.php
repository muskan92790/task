<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <!-- Link to the course-specific CSS -->
    <link rel="stylesheet" href="assets/course-management.css">
</head>
<body>
    <h2 id="course">Task 1: Course Management</h2>
    <form method="POST" action="">
        <label for="course_name">Course Name:</label>
        <input type="text" id="course_name" name="course_name" required>
        
        <label for="course_code">Course Code:</label>
        <input type="text" id="course_code" name="course_code" required>
        
        <label for="credits">Credits:</label>
        <input type="number" id="credits" name="credits" required>
        
        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="">Select Department</option>
            <option value="CSE">Computer Science and Engineering</option>
            <option value="ECE">Electronics and Communication Engineering</option>
            <option value="ME">Mechanical Engineering</option>
        </select>
        
        <label for="description">Course Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="date">Course Start Date:</label>
        <input type="date" id="date" name="date" required>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
