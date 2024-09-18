<?php require_once("../resource/config.php"); ?>
<?php Login(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h2 class="text-center mb-4">Login</h2>
          <form action="#" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input
                type="username"
                class="form-control"
                id="username"
                name="username"
                placeholder="Enter your Username"
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

            <div class="d-grid">
              <button type="submit" class="btn2" name="submit">Login</button>
            </div>

            <div class="mt-3 text-center">
              <p>Don't have an account? <a href="signup.php" style="color:#7300D1">Sign up here</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
