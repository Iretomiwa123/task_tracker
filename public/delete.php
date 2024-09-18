<?php require_once("../resource/config.php"); ?>
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
</div>

</section>
            