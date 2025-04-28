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
    <title>Form Nama & Umur</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
            transition: 0.3s;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        h2 {
            margin-bottom: 25px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input[type="text"],
        input[type="number"] {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }
        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #fda085;
            outline: none;
        }
        input[type="submit"] {
            background-color: #fda085;
            border: none;
            padding: 12px;
            color: #fff;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #f6a355;
        }
        .nav-link {
            display: block;
            margin-top: 20px;
            color: #fda085;
            text-decoration: none;
            font-size: 14px;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .nav-container {
            margin-top: 10px;
        }
        @media (max-width: 500px) {
            .container {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Nama & Umur</h2>
        <form method="POST" action="proses_form.php">
            <input type="text" name="nama" placeholder="Masukkan Nama" required>
            <input type="number" name="umur" placeholder="Masukkan Umur" required>
            <input type="submit" value="Kirim">
        </form>
        <div class="nav-container">
            <a class="nav-link" href="dashboard.php">Ke Dashboard</a>
            <a class="nav-link" href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
