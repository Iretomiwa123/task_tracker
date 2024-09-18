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

                <!-- Task Form -->
                <?php add_task(); ?>
                <form action="" method="post" class="mt-4">
                    
                    <div class="mb-3">
                        <label for="taskName" class="form-label">Task Title</label>
                        <input type="text" class="form-control" id="taskName" name="task_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="taskDescription" class="form-label">Task Description</label>
                        <textarea class="form-control" id="taskDescription" name="task_description" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="taskPriority" class="form-label">Priority</label>
                        <select class="form-select" id="taskPriority" name="task_priority" required>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="taskDeadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control" id="taskDeadline" name="task_deadline" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Add Task</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
