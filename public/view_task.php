<?php require_once("../resource/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Task</title>
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
                        <li><a href="dashboard.php">Home</a></li>
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
                    <h1>My TaskMaster Dashboard</h1>
                    <div class="notifications">
                        🔔 <span class="badge">3</span>
                    </div>
                </header>
                
                <section>
                    <h2>View Task</h2>
                    <table class="table table-striped" style="color: white">
                        <thead>
                            <tr>
                                <th>Task ID</th>
                                <th>Task Name</th>
                                <th>Description</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody style="color: white">
                            <?php view_task(); ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
