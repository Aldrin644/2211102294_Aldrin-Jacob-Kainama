<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: linear-gradient(to right, #6a11cb, #2575fc); height: 100vh; display: flex; justify-content: center; align-items: center; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); width: 300px; text-align: center; transition: 0.3s; }
        .card:hover { transform: scale(1.03); }
        h2 { margin-bottom: 20px; color: #333; }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 6px; }
        input[type="submit"] { background: #2575fc; color: white; font-weight: bold; cursor: pointer; transition: 0.3s; }
        input[type="submit"]:hover { background: #1a5edb; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Login</h2>
        <form method="POST" action="proses_login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
