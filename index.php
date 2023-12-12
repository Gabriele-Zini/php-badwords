<?php
$paragraph = trim('paragraph');
$censored = trim('censored');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <form action="request.php" method="GET">
        <div class="form-section form-1">
            <label for="paragraph">inserisci il tuo paragrafo</label>
            <textarea type="text" id="paragraph" name="paragraph" rows="4" cols="50"></textarea>
        </div>

        <div class="form-section form-2">
            <label for="censored">inserisci la parola da censurare</label>
            <input type="text" id="censored" name="censored">
        </div>
        <button type="submit">invia</button>
    </form>

</body>

</html>