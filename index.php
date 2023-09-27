<?php
$pw_chars = "abcdefghijklmnopqrstuvwxyz_ABCDEFGHIJKLMNOPQRSTUVWXYZ-0123456789!£$%&";

if (isset($_GET["psw_length"])) {
    $selected_length = $_GET["psw_length"];
    $newPsw = '';

    for ($i = 0; $i <= $selected_length; $i++) {
        $newChar = $pw_chars[rand(1, strlen($pw_chars)-1)];
        $newPsw .= $newChar;
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <script src="./main.js" defer></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header"><h1>Safe Password Generator</h1></div>
            <div class="card-body">
                <form method="get" action=".">
                    <label for="psw_length" class="form-label">Lunghezza Password (10-50 caratteri)</label>
                    <input type="range" class="form-range" id="psw_length" name="psw_length" min="10" max="50" step="1" value="10">
                    <p><strong>Lunghezza:</b> <span id="selectedLength"></span></p>

                    <button type="submit" class="btn btn-primary" >Genera Password</button>

                    <?php if (!empty($newPsw)): ?>

                        <p><strong>Password Generata: </strong> <? echo $newPsw ?></p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>