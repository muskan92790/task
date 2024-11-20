<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizify - A question maker application</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Quizify</h1>
        <select name="profile_type">
            <option value="program">Select Program</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="M.Tech">M.Tech</option>
        </select>
    </header>

    <!-- Main Content Area -->
    <main class="content">
        <!-- Dashboard Buttons -->
        <!-- <div class="dashboard-buttons">
            <button onclick="window.location.href='?page=dashboard'">Dashboard</button>
            <button onclick="window.location.href='?page=course-management'">Course Management</button>
            <button onclick="window.location.href='?page=outcome-management'">Outcome Management</button>
            <button onclick="window.location.href='?page=question-management'">Question Management</button>
            <button onclick="window.location.href='?page=report-generation'">Report Generation</button>
        </div> -->

        <!-- Dynamic Content -->
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
        $allowed_pages = ['dashboard', 'course-management', 'outcome-management', 'question-management', 'report-generation'];
        if (in_array($page, $allowed_pages)) {
            include("pages/$page.php");
        } else {
            echo "<h2>Page not found</h2>";
        }
        ?>
    </main>

    <!-- Footer Section
    <footer>
        <p>&copy; 2024 Question Setting Software</p>
    </footer> -->
</body>
</html>
