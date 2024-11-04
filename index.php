<?php
include "connection.php";
// Initialize variables for error handling and form submission
$id = $password = $user_role = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $user_role = isset($_POST['user_role']) ? htmlspecialchars($_POST['user_role']) : '';
    $id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

    // Validate input
    if (empty($user_role)) {
        $error = "⚠️ Please select a user role.";
    } elseif (empty($id) || empty($password)) {
        $error = "⚠️ All fields are required.";
    } else {
        // Example logic for user authentication
        if ($id === "12345" && $password === "password") {
            // On successful login, redirect to another page
            header("Location: student/studentHome.php"); // Replace with your target page
            exit; // Stop further processing after redirect
        } else {
            $error = "⚠️ Invalid UNIQUE ID or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hostal Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://cdn4.iconfinder.com/data/icons/web-mobile-universal/32/universal_icons-09-512.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        .custom-select {
            padding-right: 30px; /* Adjust this value to move the arrow */
        }
    </style>
</head>

<body>
<br><br>

<div class="limiter">
    <div class="container-login100">
        <form action="" method="post">
            <span class="login100-form-title">Hostal Login</span>

            <?php if ($error): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> <?php echo $error; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="wrap-input100 validate-input">
                <select class="input100 custom-select" name="user_role" id="user_role" onchange="updatePlaceholder()">
                    <option value="" disabled selected>Select Role</option>
                    <option value="student">STUDENT</option>
                    <option value="proctor">PROCTOR</option>
                    <option value="warden">WARDEN</option>
                    <option value="admin">ADMIN</option>
                </select>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="id" id="idInput" placeholder="Login Id" required value="<?php echo htmlspecialchars($id); ?>">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100 validate-input">
                <input class="input100" type="password" name="password" placeholder="Password" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">Login</button>
            </div>

            <div class="text-center p-t-12">
                <a class="txt2" href="#">Forgot Password</a>
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
<footer class="text-center mt-5">
    <div class="container">
        <p>DESIGNED BY <a href="https://thegreattech.tech/" target="_blank" style="color:blue;">THEGREAT TECH</a></p>
        <p>For any queries or issues, contact us at <a href="mailto:thegreattechofficial@gmail.com" style="color:blue;">TheGreatTech</a></p>
    </div>
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    function updatePlaceholder() {
        const userRole = document.getElementById('user_role').value;
        const idInput = document.getElementById('idInput');
        
        if (userRole === 'student' || userRole==='proctor') {
            idInput.placeholder = 'Enter Enrollment Number';
        } else {
            idInput.placeholder = 'Enter UNIQUE ID';
        }
    }
</script>

</body>
</html>
