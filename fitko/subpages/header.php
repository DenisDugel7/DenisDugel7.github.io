<?php
$base = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . "/fitko/";
$current = $_SERVER['REQUEST_URI'];
?>


<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitko – Vaše fitness centrum</title>
    <link rel="stylesheet" href="<?= $base ?>style.css">
</head>
<?php 
if (!str_ends_with($current, '/subpages/admin.php')) {
    echo '<body>
        <header>
            <nav class="navbar">
                <div class="logo"><img src="'.$base.'Assets/imgs/logo.jpg" style="width: 5%; height: 5%;"></div>
                <ul class="menu">
                    <li><a href="'.$base.'index.php">Domov</a></li>
                    <li><a href="'.$base.'subpages/about_us.php">O nás</a></li>
                    <li><a href="'.$base.'subpages/services.php">Služby</a></li>
                    <li><a href="'.$base.'subpages/team.php">Tím</a></li>
                    <li><a href="'.$base.'subpages/reservations.php">Rezervácia</a></li>
                    <li><a href="'.$base.'subpages/contact.php">Kontakt</a></li>
                    <li><a href="'.$base.'subpages/admin.php">Admin</a></li>
                </ul>
            </nav>
        </header>';
}


?>

