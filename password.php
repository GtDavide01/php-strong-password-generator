<?php
session_start();
$passwordgenerata = $_SESSION["password"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>La tua password è : </h1>
        <h1><?php echo $passwordgenerata ?></h1>
        <a href="lougout.php" class="btn btn-primary">Ritorna alla home </a>
    </div>

</body>

</html>