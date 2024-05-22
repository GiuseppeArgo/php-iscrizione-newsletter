<?php
require_once __DIR__ . "/partials/functions.php";

if (isset($_POST["user_email"])) {
    $user_email = $_POST["user_email"];
    $result = check_email($user_email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php if (isset($result)) { ?>
            <div class="p-3 w-50 mx-auto my-3 text-center <?php echo $result ? "bg-success-subtle" : "bg-danger-subtle" ?>">
                <?php echo $result ? "Iscrizione effettuata" : "L'email non è valida, assicurati che contenga '.' e '@'" ?>
            </div>
        <?php } ?>
    </div>
  </div>
</div>
</body>
</html>

