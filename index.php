<?php
include __DIR__ . '/partials/functions.php';
$pw_chars = "abcdefghijklmnopqrstuvwxyz_ABCDEFGHIJKLMNOPQRSTUVWXYZ-0123456789!#@%";

if (isset($_GET["psw_length"])) {
    session_start();
    $_SESSION['newPsw'] = generatePassword($_GET["psw_length"], $pw_chars);
    header('Location: password.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?
    include __DIR__ . '/components/header.php';
    ?>

    <!-- JS -->
    <script src="./main.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>Safe Password Generator</h1>
            </div>
            <div class="card-body">
                <form method="get" action=".">
                    <label for="psw_length" class="form-label">Lunghezza Password (10-50 caratteri)</label>
                    <input type="range" class="form-range" id="psw_length" name="psw_length" min="10" max="50" step="1" value="<? echo (isset($_GET['psw_length'])) ? $_GET['psw_length'] : '10'  ?>">
                    <p><strong>Lunghezza:</b> <span id="selectedLength"></span></p>

                    <button type="submit" class="btn btn-primary">Genera Password</button>

                    <?php if (!empty($newPsw)) : ?>

                        <p><strong>Password Generata:</strong> <? echo $newPsw ?></p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>