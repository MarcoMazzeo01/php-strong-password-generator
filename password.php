<?php

session_start();

if (empty($_SESSION['newPsw'])) {
    header('Location: .');
} else {
    $newPass = $_SESSION['newPsw'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <? include __DIR__ . '/components/header.php' ?>
</head>

<body>
    <div class="container">

        <div class="alert alert-success mt-4" role="alert">
            Password generata con successo!
        </div>

        <div class="card">
            <div class="card-body">

                <?php if (!empty($newPass)) : ?>

                    <p class="mb-0"><strong>Password Generata:</strong> <span class="hidden"><? echo $newPass ?></span></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>