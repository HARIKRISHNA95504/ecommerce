<?php
include('../includes/db.php');  // Database connection
session_start();

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $role = 'user'; // Default role for users

    // Check if the email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "<script>alert('Email is already registered!');</script>";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
        $stmt->execute([$email, $password, $role]);

        // Log the user in after successful registration
        $_SESSION['user_id'] = $conn->lastInsertId();
        header("Location: ../index.php"); // Redirect to the homepage
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>
        <form method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-medium mb-2">Email:</label>
                <input 
                    type="email" 
                    name="email" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900"
                >
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-medium mb-2">Password:</label>
                <input 
                    type="password" 
                    name="password" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900"
                >
            </div>
            <button 
                type="submit" 
                name="register"
                class="w-full bg-[#012b47]  text-white py-3 rounded-md text-lg font-medium transition duration-200"
            >
                Register
            </button>
        </form>
        <?php if (isset($error_message)): ?>
            <p class="text-red-500 text-center mt-4 text-sm">
                <?= htmlspecialchars($error_message); ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>
