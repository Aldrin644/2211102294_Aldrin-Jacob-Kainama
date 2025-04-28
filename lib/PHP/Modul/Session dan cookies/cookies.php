<!-- Simpan -->
<?php setcookie("username", "Taufiq", time() + 3600); // Berlaku 1 jam ?>

<!-- Akses -->
<?php echo $_COOKIE['username']; ?>