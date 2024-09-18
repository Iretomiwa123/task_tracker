<?php require_once("../resource/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <!-- Corrected Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>

    <header> 
      <div class="container d-flex justify-content-between ">
        <div>
          <img
            src="./image/My TaskMaster.png"
            alt="TaskMaster Logo"
            class="img-fluid"
          />
        </div>
        <div>
        <a href="/login.php" class="btn1">Login</a>
        <a href="/signup.php" class="btn1 ms-3">Signup</a>

        </div>
      </div>
    </header>

    <div class="container ">
      <div class="row hero">
        <div class="col-md-8 text text-center">
          <h1>My taskMaster</h1>
          <p>
            Organize your life, stay on top of your tasks, and achieve your
            goals with ease. Whether you're managing daily chores, planning a
            big project, or just trying to keep track of your to-do's, our
            platform is here to help you stay productive and focused.</p>
            <p>With
              user-friendly features, seamless task management, and personalized
              reminders, you'll never miss a deadline again. Simplify your life,
              one task at a time, and experience the satisfaction of checking off your to-do's. </p>
            <p>Let's make productivity your new superpower! 🗂✨</p>
            
        </div>
        <div class="col-md-4 img">
          <img src="./image/portrait-young-african-woman-with-laptop-white.jpg" alt="Task Image" class="img-fluid" />
        </div>
      </div>
    </div>
    <footer>
      <div class="container d-flex justify-content-between ">
        <div>
          <img
            src="./image/My TaskMasterimg.png"
            alt="TaskMaster Logo"
            class="img-fluid"
          />
        </div>
        <div>
          <p class="mb-0">&copy; Aderonke 2024. All rights reserved</p>
        </div>
      </div>
    </footer>
    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
