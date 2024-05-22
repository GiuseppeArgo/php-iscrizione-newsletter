<?php
require_once __DIR__ . "/partials/functions.php";

if (!isset($_SESSION)) {
    session_start();
}

$wrong_mail = "";
$result = false;

if (isset($_POST["user_email"])) {
    $user_email = $_POST["user_email"];
    $result = check_email($user_email);

    if ($result) {
        $_SESSION["auth"] = true;
        header("Location: ./thankyou.php");
    } else {
        $error = "L'email non è valida, assicurati che contenga '.' e '@'";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-iscrizione-newsletter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="index.php" method="POST">
                <div class="mb-3">
                <label for="mail" class="form-label">Inserisci la tua mail</label>
                <input type="text" class="form-control" id="mail" name="user_email">
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
            <?php if (isset($error)) { ?>
                <div class="p-3 w-50 mx-auto mt-3 text-center bg-danger-subtle">
                    <?php echo $error ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>

