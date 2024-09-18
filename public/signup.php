<?php require_once("../resource/config.php"); ?>
<?php signup(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Form</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container mt-3 form">
      <h2 class="text-center mb-4">Register</h2>
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="userName" class="form-label">Username</label>
            <input
              type="text"
              class="form-control"
              id="username"
              name="username"
              placeholder="Enter your preffered username"
              required
            />
          </div>

          <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input
              type="text"
              class="form-control"
              id="firstName"
              name="firstname"
              placeholder="Enter your first name"
              required
            />
          </div>

          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input
              type="text"
              class="form-control"
              id="lastName"
              name="lastname"
              placeholder="Enter your last name"
              required
            />
          </div>
          <div class="mb-3 ">
            <label for="userName" class="form-label">Gender</label>
            <select name="gender" id="">
              <option value="">option</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="unidentified">Unidentified</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="Phone number" class="form-label">Phone Number</label>
            <input
              type="number"
              class="form-control"
              id="number"
              name="number"
              placeholder="Enter your Phone Number"
              required
            />
            <div class="mb-3">
            <label for="about" class="form-label">Your skills</label>
            <input
              type="about"
              class="form-control"
              id="about"
              name="about"
              placeholder="Your Skills"
              required
            />
          </div>
          
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              placeholder="Enter your password"
              required
            />
          </div>

          <div class="mb-3">
            <label for="imageUpload" class="form-label">Profile Picture</label>
            <input
              type="file"
              class="form-control"
              id="imageUpload"
              name="image"
              accept="image/*"
              required
            />
          </div>

          <div class="d-grid">
            <button type="submit" class="btn2" name="submit">Register</button>
          </div>
      </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
