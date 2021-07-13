<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header("location: index.php");
    die(); //can use exit() too
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-3">Zenitsu (Demon Slayer)</h1>
    <ul class="list-group">
        <li class="list-group-item"><b>Email: </b> zen@email.com</li>
        <li class="list-group-item"><b>Phone: </b> +80808909191</li>
        <li class="list-group-item"><b>Address: </b> Osarka, Japan</li>
    </ul>
<br>
<a href="_actions/logout.php">Logout</a>
</div>
</body>
</html>