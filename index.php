<?php
session_start();
include __DIR__ . "./partials/functions.php";
$numberPassword = $_GET["number"] ?? " ";
$repeatyes = $_GET["repeatyes"] ?? " ";
$repeatno = $_GET["repeatno"] ?? " ";
$lettere = $_GET["lettere"] ?? " ";
$numeri = $_GET["numeri"] ?? " ";
$simboli  = $_GET["simboli"] ?? " ";

$_SESSION["password"] = generate($numberPassword);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Password-generator</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="generator">
            <div class="container">
                <header>
                    <h1>Strong Password Generator</h1>
                    <h2>Genera una password sicura </h2>
                    <div class="alert alert alert-primary d-flex align-items-center" role="alert">
                        <div>
                            Nessun parametro valido inserito
                        </div>
                    </div>
                </header>
                <form action="index.php" method="GET">
                    <div class="containform">
                        <div class="container">
                            <label for="number">Lunghezza password: </label>
                            <input type="number" name="number">
                            <div class="all d-flex">
                                <div class="text">
                                    <p> Consenti ripetizione di uno o più caratteri :</p>
                                </div>
                                <div class="option">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="repeatyes" id="repeatyes">
                                        <label class="form-check-label" for="repeatyes">
                                            Si
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="repeatno" id="repeatno">
                                        <label class="form-check-label" for="repeatno">
                                            No
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lettere" id="lettere">
                                        <label class="form-check-label" for="lettere">
                                            Lettere Maiuscole
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="numeri" id="numeri">
                                        <label class="form-check-label" for="numeri">
                                            Numeri
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="simboli" id="simboli">
                                        <label class="form-check-label" for="simboli">
                                            Simboli
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Invia</button>
                            <button class="btn btn-secondary" type="reset">Annulla</button>
                            <?php if (!empty($numberPassword)) { ?>
                                <a href="password.php" class="btn btn-primary">Vedi password</a>
                            <?php } ?>

                        </div>
                </form>
            </div>
        </div>
        </div>
    </main>
</body>

</html>