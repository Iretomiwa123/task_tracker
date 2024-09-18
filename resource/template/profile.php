<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 User Profile</title>
    <!-- Bootstrap 5.3.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/style.css"> 
</head>
<body>

<div class="container">
    <div class="profile-card">
        <img src="user-image.jpg" alt="User Image">
        <h2>First and Last Name</h2>

        <!-- Social Media Links -->
        <div class="social-links">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-github"></i></a>
        </div>

        <!-- User Details Section -->
        <div class="details-section">
            <h5>About</h5>
            <p>TodoMaster is your ultimate task management app, designed to help you stay organized, productive, and in control of your daily responsibilities. Whether you're managing work projects, personal tasks, or both, TodoMaster simplifies task tracking and prioritization with its intuitive interface and smart features.</p>


            <h5>Contact Information</h5>
            <p>Email <Address></Address></p>
            <p>Phone number</p>
        </div>

        <!-- Contact Button -->
         <div class="d-flex justify-content-between">
            <button type="submit" class="btn3">Add task</button>
            <button type="submit" class="btn4"> View my tasks</button>
         </div>
        
    </div>
</div>

<!-- Bootstrap 5.3.2 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
