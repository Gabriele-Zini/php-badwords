<?php
$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
    <link rel="stylesheet" href="./css/">
</head>

<body>

    <form action="request.pho" method="GET">
        <label for="paragraph">inserisci il tuo paragrafo</label>
        <input type="text" id="paragraph" name="paragraph">

        <label for="censored">inserisci la parola da censurare</label>
        <input type="text" id="censored" name="censored">
        <button type="submit">invia</button>
    </form>

</body>

</html>