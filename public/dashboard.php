<?php 
require_once("../resource/config.php"); 

if (!isset($_SESSION['user_id'])) {
    set_message("Please log in to access the dashboard.");
    redirect("login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$query = query("SELECT * FROM users WHERE user_id = '{$user_id}'");
confirm($query);
$user_data = fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dash.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <aside class="sidebar col-md-3">
                <h2>Dashboard</h2>
                <nav>
                    <ul>
                        <li><a href="dasboard.php">Home</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="add_task.php">Add Task</a></li>
                        <li><a href="view_task.php">View Task</a></li>
                        <li><a href="edit_task.php">Edit Task</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </nav>
            </aside>
        
            <div class="main-content col-md-9">
                <header class="header">
                <h1><?php echo isset($user_data['username']) ? $user_data['username'] : 'Guest'; ?></h1>

                    <div class="notifications">
                        🔔 <span class="badge">0</span> <!-- Can be updated dynamically -->
                    </div>
                </header>
                
                <section class="content mt-4">
                    <div class="marquee">
                        <p id="last-login">Last login: <span id="last-login-time"><?php echo date("Y-m-d", strtotime($user_data['last_login'])); ?></span></p>
                    </div>

                    <section class="quick-stats">
                        <div class="stat-item">
                            <h3>Task Done</h3>
                            <p><?php // Fetch done tasks count ?></p>
                        </div>
                        <div class="stat-item">
                            <h3>Pending</h3>
                            <p><?php // Fetch pending tasks count ?></p>
                        </div>
                        <div class="stat-item">
                            <h3>Ongoing Task</h3>
                            <p><?php // Fetch ongoing tasks count ?></p>
                        </div>
                        <div class="stat-item">
                            <h3>Suggestion-box</h3>
                            <p>Once in a blue moon</p>
                        </div>
                    </section>

                </section>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
