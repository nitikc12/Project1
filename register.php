<?php
session_start();
include("config.php");


$errors = [];

if (isset($_POST["Submit"])) {
    // Get user input
    $userName = $_POST["username"];
    $email = $_POST["email"];
    $rawPassword = $_POST["password"];
    $age = $_POST["age"];

    // Validate email
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $errors[] = "Invalid email address.";
    } else {
        // Check if email is already in use
        $verify_query = mysqli_query($conn, "SELECT Email FROM users WHERE Email='$email'");
        if (mysqli_num_rows($verify_query) != 0) {
            $errors[] = "This email is already in use. Please try another one.";
        } else {
            // Continue processing
            // Validate username length
            if (strlen($userName) < 6) {
                $errors[] = "Username must be at least 6 characters.";
            } else {
                // Validate password strength
                $password = $_POST["password"];
                if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
                    $errors[] = "Password must have at least one uppercase letter, one lowercase letter, and one number.";
                } else {
                    // Hash the password
                    $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);
                    // Insert user data into the database
                    mysqli_query($conn, "INSERT INTO users (`UserName`, `Email`, `Password`, `Age`) VALUES ('$userName', '$email', '$hashedPassword', '$age')")
    or die("Error Occurred");

$_SESSION['success'] = "Registration successful!";
header("Location: home.php"); // Redirect to the home page
exit();
                    exit();
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="box from-box">
            <header>Sign Up</header>

            <?php
            if (!empty($errors)) {
                echo '<div class="message">';
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
                echo '</div> <br>';
            }
            ?>

            <form action="" method="post">
                <div class="field input">
                    <label for="userName">Username:</label>
                    <input type="text" name="username" id="userName" value="<?php echo isset($userName) ? $userName : ''; ?>">
                </div>

                <div class="field input">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>">
                </div>

                <div class="field input">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="field input">
    <label for="age">Age:</label>
    <select name="age" id="age">
        <?php
        $selectedAge = isset($age) ? $age : '';
        for ($i = 18; $i <= 99; $i++) {
            $selected = ($i == $selectedAge) ? 'selected' : '';
            echo "<option value=\"$i\" $selected>$i</option>";
        }
        ?>

                <div class="field input">
                    <input type="submit" class="btn" name="Submit" value="Register">

           </div>
            </form>
        </div>
    </div>
</body>

</html>
