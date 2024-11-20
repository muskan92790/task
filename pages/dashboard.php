<!-- <h2>Dashboard</h2>
<p>Welcome to the question Maker Application</p> -->

<h2 id="dash">Dashboard</h2>

<div class="dashboard-welcome">
    <h3>Welcome to the Question Maker Application, <span id="user-name">User</span>!</h3>
    <p>Your portal to easily manage, create, and organize questions for various programs. Let’s get started!</p>
</div>

<div class="dashboard-info">
    <div class="info-card">
        <h4>Current Date & Time</h4>
        <p id="current-time"></p>
    </div>

    <div class="info-card">
        <h4>Quick Actions</h4>
        <ul>
            <!-- <li><button onclick="location.href='?page=course-management'">Manage Courses</button></li>
            <li><button onclick="location.href='?page=question-management'">Manage Questions</button></li>
            <li><button onclick="location.href='?page=report-generation'">Generate Reports</button></li> -->
            <li><button onclick="window.location.href='?page=dashboard'">Dashboard</button></li>
            <li><button onclick="window.location.href='?page=course-management'">Course Management</button></li>
            <li><button onclick="window.location.href='?page=outcome-management'">Outcome Management</button></li>
            <li><button onclick="window.location.href='?page=question-management'">Question Management</button></li>
            <li><button onclick="window.location.href='?page=report-generation'">Report Generation</button></li>
        </ul>
    </div>
</div>

<div class="dashboard-footer">
    <p>Need help? <a href="mailto:support@example.com">Contact Support</a></p>
</div>

<script>
// Dynamic Time
// function updateTime() {
//     const now = new Date();
//     const hours = String(now.getHours()).padStart(2, '0');
//     const minutes = String(now.getMinutes()).padStart(2, '0');
//     const seconds = String(now.getSeconds()).padStart(2, '0');
//     const time = `${hours}:${minutes}:${seconds}`;
    
//     document.getElementById('current-time').textContent = time;
// }

// setInterval(updateTime, 1000);
// updateTime();

function updateTime() {
    const now = new Date();

    // Get time
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    const time = `${hours}:${minutes}:${seconds}`;

    // Get date
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are zero-based
    const day = String(now.getDate()).padStart(2, '0');
    // const date = `${year}-${month}-${day}`;
    const date = `${day}-${month}-${year}`;

    // Update time and date in the HTML
    document.getElementById('current-time').textContent = `${date} ${time}`;
}

// Call the function every second
setInterval(updateTime, 1000);
updateTime();
</script>