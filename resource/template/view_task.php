<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(91.85deg, #480082 -1.89%, #7300d1 56.14%, #3b006b 114.18%);
            color: white;
        }
        .sidebar {
            background-color: #3b006b;
            padding: 1rem;
            height: 100vh;
            color: white;
        }
        .sidebar h2 {
            color: #ffb800;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 0;
            display: block;
        }
        .sidebar ul li a:hover {
            background-color: #480082;
            border-radius: 5px;
        }
        .main-content {
            margin-left: 15rem;
            padding: 2rem;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #3b006b;
            padding: 1rem;
            border-radius: 5px;
        }
        .header h1 {
            color: #ffb800;
        }
        .notifications {
            font-size: 1.5rem;
        }
        .badge {
            background-color: #ffb800;
        }
        .quick-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5rem;
        }
        .stat-item {
            background-color: #480082;
            padding: 1rem;
            border-radius: 5px;
            width: 23%;
            text-align: center;
        }
        .stat-item h3 {
            color: #ffb800;
        }
        .dashboard table {
            background-color: #3b006b;
            border-radius: 5px;
            width: 100%;
        }
        .dashboard th, .dashboard td {
            padding: 1rem;
            color: white;
        }
        .dashboard th {
            background-color: #480082;
        }
        .dashboard button {
            background-color: #ffb800;
            border: none;
            color: #3b006b;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin-right: 0.5rem;
        }
        .dashboard button:hover {
            background-color: #7300d1;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <aside class="sidebar col-md-3">
                <h2>Dashboard</h2>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#profile">Profile</a></li>
                        <li><a href="#analytics">Analytics</a></li>
                        <li><a href="#reports">Reports</a></li>
                        <li><a href="#settings">Settings</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </nav>
            </aside>
            <div class="main-content col-md-9">
                <header class="header">
                    <h1>Welcome to Ayiti Dashboard</h1>
                    <div class="notifications">
                        🔔 <span class="badge">3</span>
                    </div>
                </header>
                <section class="content mt-4">
                    <div class="marquee">
                        <p id="last-login">Last login: <span id="last-login-time"></span></p>
                    </div>
                    <section class="quick-stats">
                        <div class="stat-item">
                            <h3>Initial Students</h3>
                            <p>30</p>
                        </div>
                        <div class="stat-item">
                            <h3>Remaining Students</h3>
                            <p>13</p>
                        </div>
                        <div class="stat-item">
                            <h3>Knowledge</h3>
                            <p>Unlimited</p>
                        </div>
                        <div class="stat-item">
                            <h3>Visitors</h3>
                            <p>Once in a blue moon</p>
                        </div>
                    </section>
                    <div class="dashboard mt-5">
                        <h1>Dashboard</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Details</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item 1</td>
                                    <td>Ayiti Weekly Assignment</td>
                                    <td>Active</td>
                                    <td><button>View</button> <button>Edit</button></td>
                                </tr>
                                <tr>
                                    <td>Item 2</td>
                                    <td>Ayiti Weekly Class Cancel</td>
                                    <td>Inactive</td>
                                    <td><button>View</button> <button>Edit</button></td>
                                </tr>
                                <tr>
                                    <td>Item 3</td>
                                    <td>Ayiti Giveaway</td>
                                    <td>Pending</td>
                                    <td><button>View</button> <button>Edit</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            function formatDateTime(date) {
                const options = {
                    weekday: 'long', year: 'numeric', month: 'long', day: 'numeric',
                    hour: '2-digit', minute: '2-digit', second: '2-digit'
                };
                return date.toLocaleDateString('en-US', options);
            }

            const lastLoginTimeElement = document.getElementById('last-login-time');
            const now = new Date();
            lastLoginTimeElement.textContent = formatDateTime(now);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
