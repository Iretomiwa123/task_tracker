<?php
$uploads_directory = "uploads";

function display_image($user_photo) {
    global $uploads_directory;
    return $uploads_directory . DS . $user_photo;

}

//helper function
function last_id() {
    global $connection;
    return mysqli_insert_id($connection);
}

function set_message($msg) {
    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

function display_message() {
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location) {
    header("Location: $location");
    exit;  
}

function query($sql) {
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result) {
    global $connection;
    if (!$result) {
        die("QUERY FAILED: " . mysqli_error($connection));
    }
}

function escape_string($string) {
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result) {
    return mysqli_fetch_array($result);
}

/************************Login and Signup*/

function Login() {
    if (isset($_POST['submit'])) {
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM users WHERE username = '{$username}'");
        confirm($query);

        if (mysqli_num_rows($query) == 0) {
            set_message("Invalid Password or Username");
            redirect("login.php");
        } else {
            $row = fetch_array($query);
            if (password_verify($password, $row['password'])) {
                
                $_SESSION['user_id'] = $row['id']; 
                $_SESSION['username'] = $row['username'];  
                redirect("dashboard.php"); 
            } else {
                set_message("Invalid Password or Username");
                redirect("login.php");
            }
        }
    }
}


function signup() {
    if (isset($_POST['submit'])) {

        $username    = escape_string($_POST['username']);
        $firstname   = escape_string($_POST['firstname']);
        $lastname    = escape_string($_POST['lastname']);
        $gender      = escape_string($_POST['gender']);
        $email       = escape_string($_POST['email']);
        $phonenumber = escape_string($_POST['number']);
        $about       = escape_string($_POST['about']);
        $password    = escape_string($_POST['password']);
        $password    = password_hash($password, PASSWORD_BCRYPT);  // Hashing password

        $user_photo  = escape_string($_FILES['image']['name']);
        $photo_tmp   = $_FILES['image']['tmp_name']; // Do not escape file content

        // Check if username or email already exists
        $query = query("SELECT * FROM users WHERE username = '{$username}' OR email = '{$email}'");
        confirm($query);


        move_uploaded_file($photo_tmp, UPLOAD_DIRECTORY . DS . $user_photo);

        // Insert new user into database
        $query = query("INSERT INTO users(username, firstname, lastname, gender, email, number, password, user_photo) 
        VALUES ('{$username}', '{$firstname}', '{$lastname}', '{$gender}', '{$email}', '{$phonenumber}', '{$password}', '{$user_photo}')");

        confirm($query);

        // Log in the user by setting session variables
        $_SESSION['user_id'] = last_id();  // Get the last inserted user ID
        $_SESSION['username'] = $username;

        set_message("User created and logged in.");
        redirect("dashboard.php");  // Redirect to user dashboard
    }
}

/***********************Dashboard***********/

function profile_display() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        // Fetch only the logged-in user's data
        $query = query("SELECT * FROM users WHERE user_id = '{$user_id}'");
        confirm($query);

        $row = fetch_array($query);

        // Display the user's profile
        $user_photo = display_image($row['user_photo']);

        $user_profile = <<<DELIMETER
            <img src="../resource/{$user_photo}" alt="User Image">
            <h2>{$row['firstname']} {$row['lastname']}</h2>
            <p>{$row['gender']}</p>

            <!-- User Details Section -->
            <div class="details-section">
                <h5>About</h5>
                <p>{$row['about']}</p>
                <h5>Contact Information</h5>
                <p>Email Address: {$row['email']}</p>
                <p>Phone number: {$row['number']}</p>
            </div>                  

        DELIMETER;

        echo $user_profile;
    } else {
        set_message("Please log in to view your profile.");
        redirect("login.php");
    }
}


/***************************Add task*********/

function add_task() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        if (isset($_POST['submit'])) {
            $task_name         = escape_string($_POST['task_name']);
            $task_description  = escape_string($_POST['task_description']);
            $task_priority     = escape_string($_POST['task_priority']);
            $task_deadline     = escape_string($_POST['task_deadline']);

            $query = query("INSERT INTO tasks (task_name, task_description, task_priority, task_deadline, user_id) 
                            VALUES ('{$task_name}', '{$task_description}', '{$task_priority}', '{$task_deadline}', '{$user_id}')");

            confirm($query);

            redirect("view_task.php"); 
        } 
    } else {
       
        redirect("login.php");
    }
}

/****************View task**********/
function view_task() {
    global $connection; 
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        $query = "SELECT id, task_name, task_description, task_priority, status, task_deadline FROM tasks WHERE user_id = $user_id";

        $result = query($query); 
        confirm($result);  

        if (mysqli_num_rows($result) > 0) {
            while ($row = fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['task_name'] . "</td>";
                echo "<td>" . $row['task_description'] . "</td>";
                echo "<td>" . $row['task_priority'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['task_deadline'] . "</td>";
                echo "<td><a href='edit_task.php?id=" . $row['id'] . "' class='btn btn-success btn-sm'>Edit</a> ";
                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No tasks found</td></tr>";
        }
    }
}

?>

