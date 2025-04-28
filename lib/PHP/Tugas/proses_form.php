<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$nama = $_POST['nama'];
$umur = $_POST['umur'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Form</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: linear-gradient(to right, #43cea2, #185a9d); height: 100vh; display: flex; justify-content: center; align-items: center; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); width: 400px; text-align: center; transition: 0.3s; }
        .card:hover { transform: scale(1.03); }
        h2 { margin-bottom: 20px; color: #333; }
        p { margin: 10px 0; font-size: 18px; }
        a { display: inline-block; margin-top: 15px; color: #43cea2; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Hasil Form</h2>
        <p>Halo, <b><?php echo htmlspecialchars($nama); ?></b>!</p>
        <p>Status: <b><?php echo ($umur >= 18) ? 'Dewasa' : 'Belum Dewasa'; ?></b></p>
        <br>
        <a href="form.php">Input Lagi</a> | 
        <a href="dashboard.php">Dashboard</a> | 
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
