<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: linear-gradient(to right, #00c6ff, #0072ff); height: 100vh; display: flex; justify-content: center; align-items: center; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); width: 400px; text-align: center; transition: 0.3s; }
        .card:hover { transform: scale(1.03); }
        h2 { margin-bottom: 20px; color: #333; }
        p { font-size: 18px; margin-bottom: 20px; }
        a { display: inline-block; margin-top: 10px; color: #0072ff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Dashboard</h2>
        <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b>!</p>
        <a href="form.php">Isi Form Nama & Umur</a><br><br>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
