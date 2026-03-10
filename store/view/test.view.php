<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 80px;
            background-color: #2f3436;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar li {
            margin-bottom: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .sidebar i {
            font-size: 24px;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
        }
        .header .icons {
            display: flex;
            align-items: center;
        }
        .header .icons i {
            font-size: 24px;
            margin-right: 20px;
        }
        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card h2 {
            margin-top: 0;
        }
        .card p {
            margin-bottom: 20px;
        }
        .card .btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .card .btn:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="#"><i class="fas fa-home"></i></a></li>
                <li><a href="#"><i class="fas fa-user"></i></a></li>
                <li><a href="#"><i class="fas fa-cog"></i></a></li>
                <li><a href="#"><i class="fas fa-chart-line"></i></a></li>
                <li><a href="#"><i class="fas fa-bell"></i></a></li>
                <li><a href="#"><i class="fas fa-question-circle"></i></a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Dashboard</h1>
                <div class="icons">
                    <i class="fas fa-search"></i>
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-user-circle"></i>
                </div>
            </div>
            <div class="card">
                <h2>Welcome, <?php echo $userInfo[0]["name"]; ?>!</h2>
                <p>Last login: <?php echo $userInfo[0]["creation_date"]; ?></p>
                <button class="btn">View Profile</button>
            </div>
            <div class="card">
                <h2>Account Settings</h2>
                <p>Name: <?php echo $userInfo[0]["name"]; ?></p>
                <p>Email: <?php echo $userInfo[0]["email"]; ?></p>
                <p>Account Status: <?php echo $userInfo[0]["account_status"]; ?></p>
                <button class="btn">Edit Profile</button>
            </div>
            <?php if($session->has("store_id")) { ?>
            <div class="card">
                <h2>Store Manager</h2>
                <p>Opened Store: <?php if(!empty($opened_store)) { echo $opened_store[0]["store_name"]; } else { echo "No store selected"; } ?></p>
                <button class="btn">Manage Store</button>
            </div>
            <?php } else { ?>
            <p>Select a store to manage it</p>
            <?php } ?>
        </div>
    </div>
    <script>
        // Add event listeners to buttons
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(event) {
                    // Add your button click logic here
                });
            });
        });
    </script>
</body>
</html>